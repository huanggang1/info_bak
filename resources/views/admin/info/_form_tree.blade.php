<div class="item">
    <label class="lable"  for="tag" >报名 费：</label><input style="width:160px"type="text" autocomplete="off" class="request_input" name="enrollFee" value="{{$infoData['enrollFee']}}" {{$readonly}} autofocus>
    <label class="lable"  for="tag" >收款 人：</label><input style="width:160px"type="text" autocomplete="off" class="request_input"  name="payee" value="{{$infoData['payee']}}" {{$readonly}} autofocus>
    <label class="lable"  for="tag" >总费 用：</label><input style="width:160px"type="text" autocomplete="off" class="request_input"  name="totalCost" value="{{$infoData['totalCost']}}" {{$readonly}} autofocus>
    <label class="lable"  for="tag" >是否全费：</label>
    <input type="radio"  class="request_input"  name="fullCost"  value="0" @if ($infoData['fullCost']== 0) checked @endif  {{$readonly}} autofocus>否
    <input type="radio" class="request_input"   name="fullCost"  value="1" @if ($infoData['fullCost']== 1) checked @endif {{$readonly}} autofocus>是
</div>
<div class="item">
    <label class="lable"  for="tag" >预留字段：</label><input style="width:160px"type="text" autocomplete="off" class="request_input" name="costFieldsOne" value="{{$infoData['costFieldsOne']}}" {{$readonly}} autofocus>
    <label class="lable"  for="tag" >第一 年：</label><input style="width:160px"type="text" autocomplete="off" class="request_input"  name="yearOne" value="{{$infoData['yearOne']}}" {{$readonly}} autofocus>
    <label class="lable"  for="tag" >第二 年：</label><input style="width:160px"type="text" autocomplete="off" class="request_input"  name="yearTwo" value="{{$infoData['yearTwo']}}" {{$readonly}} autofocus>
    <label class="lable"  for="tag" >第三 年：</label><input style="width:160px"type="text" autocomplete="off" class="request_input" name="yearTree" value="{{$infoData['yearTree']}}" {{$readonly}} autofocus>
</div>
<div class="item">
    <label class="lable"  for="tag" >预留字段：</label><input style="width:160px"type="text" autocomplete="off" class="request_input"  name="costFieldsTwo" value="{{$infoData['costFieldsTwo']}}" {{$readonly}} autofocus>
</div>
