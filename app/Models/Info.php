<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use PDO;
use Validator;
use Auth;

class Info extends Model {

    public $timestamps = true;
    protected $table = 'info_users';
    public $fields = [
        'name', 'sex', 'nation', 'politicalStatus', 'identityNum', 'workUnit',
        'phone', 'remarksPhone', 'reservedFields', 'grade', 'examineeNum',
        'achievement', 'studentNum', 'applyTime', 'initialSchool', 'level', 'studyForm',
        'applySchool', 'applyProfession', 'checkAddress', 'addPoints', 'enterFIeld',
        'personalResume', 'enrollFee', 'payee', 'totalCost', 'fullCost', 'costFieldsOne',
        'yearOne', 'yearTwo', 'yearTree', 'costFieldsTwo', 'person', 'introducer', 'remarks',
        'examinationArea', 'nativePlace', 'marriage', 'homeAddress',
    ];
    protected $rules = [
        'identityNum' => "unique:info_users,identityNum,2,status",
        'examineeNum' => "unique:info_users,examineeNum,2,status",
        'studentNum' => "unique:info_users,studentNum,2,status",
        'name' => "required:info_users,name",
    ];
    protected $messages = [
        'identityNum.unique' => '身份证号已存在',
        'examineeNum.unique' => '考生号已经存在',
        'studentNum.unique' => '学号已经存在',
        'name.required' => '姓名不能为空',
//        'identityNum.required' => '身份证号不能为空',
//        'examineeNum.required' => '考生号不能为空',
//        'studentNum.required' => '学号不能为空',
    ];

    /**
     * 查询数据库
     * @param type $param
     * @param type $start
     * @param type $length
     * @param type $columns
     * @param type $order
     * @return type
     */
    public function selectAll($param, $start, $length, $columns, $order) {
        $data['recordsFiltered'] = $this->where(function ($query) use ($param) {
                    $this->getWhere($param, $query);
                })->count();
        $data['data'] = $this->where(function ($query) use ($param) {
                    $this->getWhere($param, $query);
                })
                ->skip($start)->take($length)
                ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                ->get();
        return $data;
    }

    /**
     * 查询条件处理
     * @param type $param
     * @param type $query
     */
    private function getWhere($param, $query) {
        if (isset($param['btName']) && !empty($param['btName'])) {
            $query->where('name', 'like', '%' . $param['btName'] . '%');
        }
        if (isset($param['btPhone']) && !empty($param['btPhone'])) {
            $query->where('phone', 'like', '%' . $param['btPhone'] . '%');
        }
        if (isset($param['btSchool']) && !empty($param['btSchool'])) {
            $query->where('applySchool', 'like', '%' . $param['btSchool'] . '%');
        }
        if (isset($param['btnPerson']) && !empty($param['btnPerson'])) {
            $query->where('person', 'like', '%' . $param['btnPerson'] . '%');
        }
        if (isset($param['examinationArea']) && !empty($param['examinationArea'])) {
            $query->where('examinationArea', 'like', '%' . $param['examinationArea'] . '%');
        }
        if (isset($param['btGrade']) && !empty($param['btGrade'])) {
            $query->where('grade', 'like', '%' . $param['btGrade'] . '%');
        }
        if (isset($param['btGrade']) && $param['btnFullCost'] != "-1") {
            $query->where(['fullCost' => $param['btnFullCost']]);
        }

        $query->where(['status' => 1]);
        if (DB::table('role_user')->where(['user_id' => Auth::guard('admin')->user()->id, 'role_id' => 1])->count() == 0 && Auth::guard('admin')->user()->id != 1) {
            $query->where(['uid' => Auth::guard('admin')->user()->id]);
        }
    }

    /**
     * 导出数据查询
     * @param type $param
     * @return type
     */
    public function export($param) {
        DB::setFetchMode(PDO::FETCH_ASSOC);
        $data = DB::table('info_users')->where(function ($query) use ($param) {
                    $this->getWhere($param, $query);
                })->get($this->fields);
        return $data;
    }

    /**
     * 批量数据添加
     * @param type $data
     */
    public function addAll($data) {
        $dataError = [];
        foreach ($data as $k => $v) {
            if (count($this->fields) != count($v)) {
                return ['code' => 0, 'msg' => "导入信息模板错误"];
                continue;
            }
            $arr = array_combine($this->fields, $v);
            $schoolId = $this->schoolSelect($arr['applySchool']);
            if (!$schoolId) {

                $dataError[$k] = $arr['examineeNum'];
                continue;
            }
            $arr['applySchool'] = $schoolId;
            $arr['sex'] = $arr['sex'] == '男' ? "0" : "1";
            $arr['addPoints'] = $arr['addPoints'] == "不加分" ? "0" : "1";
            $arr['fullCost'] = $arr['fullCost'] == '不是' ? "0" : "1";
            $arr['marriage'] = $arr['marriage'] == '否' ? "0" : "1";
            $arr['uid'] = Auth::guard('admin')->user()->id;
            $flag = $this->getAdd($arr, true);
            if (!empty($flag)) {
                $dataError[$k] = $flag;
            }
        }
        if (count($dataError) > 0) {
            return ['code' => 0, 'msg' => "导入信息考生号“ " . implode(',', $dataError) . " ”失败"];
        }
        return ['code' => 1, 'msg' => "导入成功"];
    }

    public function schoolSelect($applySchool) {
        DB::setFetchMode(PDO::FETCH_ASSOC);
        $data = DB::table('school')->where(['name' => $applySchool, 'status' => 1])->first();
        if ($data['id']) {
            return $data['id'];
        }
        return false;
    }

    /**
     * 入库
     * @param type $data
     * @return type
     */
    public function getAdd($data, $mark = false) {
        file_put_contents('log/log_add_' . date('Y-m-d') . '.txt', "[ " . date('Y-m-d H:i:s') . "] : " . json_encode($data, JSON_UNESCAPED_UNICODE) . PHP_EOL, FILE_APPEND);
        //验证唯一性
        $validator = Validator::make($data, $this->rules, $this->messages);
        if ($validator->fails()) {
            if ($mark == true) {
                return $data['examineeNum'];
            } else {
                return $validator;
            }
        } else {
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['uid'] = Auth::guard('admin')->user()->id;
            DB::table('info_users')->insert($data);
        }
    }

    /**
     * 
     * @param type $data
     * @param type $id修改
     */
    public function getSave($data, $id) {
        //验证唯一性 排除本身
        $rules = [
            'identityNum' => 'unique:info_users,identityNum,' . $id . ',id,status,1',
            'examineeNum' => 'unique:info_users,examineeNum,' . $id . ',id,status,1',
            'studentNum' => 'unique:info_users,studentNum,' . $id . ',id,status,1',
            'name' => "required:info_users,name",
        ];
        file_put_contents('log/log_save_' . date('Y-m-d') . '.txt', "[ " . date('Y-m-d H:i:s') . "] : " . json_encode($data, JSON_UNESCAPED_UNICODE) . PHP_EOL, FILE_APPEND);
        $validator = Validator::make($data, $rules, $this->messages);
        $dataArr = $this->getFind($id);
        if ($validator->fails()) {
            return $validator->errors()->getMessages();
        }
        $this->where(['id' => $id])->update($data);
    }

    /**
     * 查询单条数据
     * @param type $id
     */
    public function getFind($id) {
        return Info::find($id);
    }

    /**
     * 删除操作
     * @param type $id
     * @return type
     */
    public function getDelete($id) {
        return $this->where(['id' => $id])->update(['status' => 2]);
    }

}
