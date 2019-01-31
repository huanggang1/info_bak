<div class="item">
    <label class="lable"  for="tag" >报名 费：</label><input style="width:160px"type="text" name="enrollFee" value="<?php echo e($infoData['enrollFee']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >收款 人：</label><input style="width:160px"type="text"  name="payee" value="<?php echo e($infoData['payee']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >总费 用：</label><input style="width:160px"type="text"  name="totalCost" value="<?php echo e($infoData['totalCost']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >是否全费：</label>
    <input type="radio"  name="fullCost"  value="0" <?php if($infoData['fullCost']== 0): ?> checked <?php endif; ?>  <?php echo e($readonly); ?> autofocus>否
    <input type="radio"  name="fullCost"  value="1" <?php if($infoData['fullCost']== 1): ?> checked <?php endif; ?> <?php echo e($readonly); ?> autofocus>是
</div>
<div class="item">
    <label class="lable"  for="tag" >预留字段：</label><input style="width:160px"type="text" name="costFieldsOne" value="<?php echo e($infoData['costFieldsOne']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >第一 年：</label><input style="width:160px"type="text"  name="yearOne" value="<?php echo e($infoData['yearOne']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >第二 年：</label><input style="width:160px"type="text"  name="yearTwo" value="<?php echo e($infoData['yearTwo']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >第三 年：</label><input style="width:160px"type="text" name="yearTree" value="<?php echo e($infoData['yearTree']); ?>" <?php echo e($readonly); ?> autofocus>
</div>
<div>
    <label class="lable"  for="tag" >预留字段：</label><input style="width:160px"type="text"  name="costFieldsTwo" value="<?php echo e($infoData['costFieldsTwo']); ?>" <?php echo e($readonly); ?> autofocus>
</div>
