<div class="item">
    <label class="lable"  for="tag" >年   级：</label><input style="width:160px"type="text" autocomplete="off" class="request_input" name="grade" value="{{$infoData['grade']}}" {{$readonly}} autofocus>
    <label class="lable"  for="tag" >考生 号：</label><input style="width:160px"type="text" autocomplete="off" class="request_input"  name="examineeNum" value="{{$infoData['examineeNum']}}" {{$readonly}} autofocus>
    <label class="lable"  for="tag" >成   绩：</label><input style="width:160px"type="text" autocomplete="off" class="request_input"  name="achievement" value="{{$infoData['achievement']}}" {{$readonly}} autofocus>
    <label class="lable"  for="tag" >学   号：</label><input style="width:160px"type="text" autocomplete="off" class="request_input"  name="studentNum" value="{{$infoData['studentNum']}}" {{$readonly}} autofocus>
</div>
<div class="item">
    <label class="lable"  for="tag" >报名日期：</label>
     <input style="width:160px"type="text" autocomplete="off" class="request_input" onclick="WdatePicker()" name="applyTime" class="Wdate text" value="{{$infoData['applyTime']}}" {{$readonly}} autofocus>
    <!--<input style="width:160px"type="text" autocomplete="off" class="request_input" name="applyTime" autofocus>-->
    <label class="lable"  for="tag" >初始学校：</label><input style="width:160px"type="text" autocomplete="off" class="request_input"  name="initialSchool" value="{{$infoData['initialSchool']}}" {{$readonly}} autofocus>
    <label class="lable"  for="tag" >层   次：</label><input style="width:160px"type="text" autocomplete="off" class="request_input"  name="level" value="{{$infoData['level']}}" {{$readonly}} autofocus>
    <label class="lable"  for="tag" >学习形式：</label><input style="width:160px"type="text" autocomplete="off" class="request_input" name="studyForm" value="{{$infoData['studyForm']}}" {{$readonly}} autofocus>
</div> 
<div class="item">
    <label class="lable"  for="tag" >报考学校：</label>
    <select class="request_input" {{$readonly}} style="width:160px" name="applySchool">
        <option value="">--请选择--</option>
        @foreach($data as $v)
        <option value="{{$v['id']}}" @if ($infoData['applySchool']== $v['id']) selected @endif>{{$v['name']}}</option>
        @endforeach
    </select>
    <label class="lable"  for="tag" >报考专业：</label><input style="width:160px"type="text" autocomplete="off" class="request_input"  name="applyProfession" value="{{$infoData['applyProfession']}}" {{$readonly}} autofocus>
    <label class="lable"  for="tag" >核对地址：</label><input style="width:160px"type="text" autocomplete="off" class="request_input"  name="checkAddress" value="{{$infoData['checkAddress']}}" {{$readonly}} autofocus>
    <label class="lable"  for="tag" >预留字段：</label><input style="width:160px"type="text" autocomplete="off" class="request_input"  name="enterFIeld" value="{{$infoData['enterFIeld']}}" {{$readonly}} autofocus>
</div>
<div class="item">
    <label class="lable"  for="tag" >考区：</label><input style="width:160px"type="text" autocomplete="off" class="request_input"  name="examinationArea" value="{{$infoData['examinationArea']}}" {{$readonly}} autofocus>
</div><br/>
<div class="item">
    <label class="lable"  for="tag" >个人履历：</label>
    <textarea cols="80" class="request_input"  rows="5" name="personalResume" {{$readonly}}>{{$infoData['personalResume']}}</textarea>
</div>
