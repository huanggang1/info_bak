@extends('admin.layouts.base')

@section('title','控制面板')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')
<div id="warn" style="display: none;">
    所有信息填写不完整
</div> 
<div class="main animsition">
    <div class="container-fluid">

        <div class="row">
            <div class="">

                @include('admin.partials.errors')
                @include('admin.partials.success')
                <form class="form-horizontal" role="form" method="POST" onsubmit = "return toVaild()"  action="/admin/info/store">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">基本信息</h3>
                        </div>
                        @include('admin.info._form_one')
                        <div class="panel-heading">
                            <h3 class="panel-title">报考信息</h3>
                        </div>
                        @include('admin.info._form_two')
                        <div class="panel-heading">
                            <h3 class="panel-title">缴费信息</h3>
                        </div>
                        @include('admin.info._form_tree')
                        <div class="panel-heading">
                            <h3 class="panel-title">负责人信息</h3>
                        </div>
                        @include('admin.info._form_four')
                        <div class="panel-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="cove_image"/>

                            <div class="form-group">
                                <div class="col-md-7 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary btn-md" id="add">
                                        <i class="fa fa-plus-circle"></i>
                                        添加
                                    </button>
                                </div>
                            </div>

                            </form>

                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal-delete" tabIndex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">提示</h4>
            </div>
            <div class="modal-body">
                <p class="lead">
                    <i class="fa fa-question-circle fa-lg"></i>
                    用户姓名不能空
                </p>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">确定</button>

            </div>
        </div>
    </div>
</div>

@stop
@section('js')
<script>
    function toVaild() {
        var flag = true;
        if ($('#userName').val() == "") {
            flag = false;
            $("#modal-delete").modal();
        }
        //$(".request_input").each(function (i, ele) {
//        console.log($(ele).val(), i, ele)
//        if ($(ele).val() == "") {
//            console.log($(ele).val());
//            flag = false;
//            $("#modal-delete").modal();
//        }
//        })
        return flag;

    }
</script>
@stop