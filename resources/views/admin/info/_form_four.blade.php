<div class="item">
    <label class="lable"  for="tag" >负责 人：</label><input type="text" autocomplete="off" class="request_input" name="person"  value="{{$infoData['person']}}" {{$readonly}} autofocus>
    <label class="lable"  for="tag" >介绍 人：</label><input type="text" autocomplete="off" class="request_input"  name="introducer" value="{{$infoData['introducer']}}" {{$readonly}} autofocus>
</div><br/>
<div class="item">
  <label class="lable"  for="tag" >备注：</label>
  <textarea name="remarks"  class="request_input"  cols="80"  rows="5"  {{$readonly}} >{{$infoData['remarks']}}</textarea>
</div>
