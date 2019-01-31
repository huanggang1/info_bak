<div class="item">
    <label class="lable"  for="tag" >姓   名：</label><input type="text" name="name"  value="<?php echo e($infoData['name']); ?>"  <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >性   别：</label>
    <input type="radio"  name="sex"  value="0" <?php if($infoData['sex']== 0): ?> checked <?php endif; ?>  <?php echo e($readonly); ?> autofocus>男
    <input type="radio"  name="sex"  value="1" <?php if($infoData['sex']== 1): ?> checked <?php endif; ?> <?php echo e($readonly); ?> autofocus>女
    <label class="lable"  for="tag" >民   族：</label><input type="text"  name="nation"  value="<?php echo e($infoData['nation']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable" for="tag" >政治面貌：</label><input type="text"  name="politicalStatus"  value="<?php echo e($infoData['politicalStatus']); ?>"  <?php echo e($readonly); ?> autofocus>
</div>
<div class="item">
    <label class="lable" for="tag" >身份证号：</label><input type="text" name="identityNum"  value="<?php echo e($infoData['identityNum']); ?>"  <?php echo e($readonly); ?> autofocus>
    <label class="lable" for="tag" >工作单位：</label><input type="text"  name="workUnit"  value="<?php echo e($infoData['workUnit']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable" for="tag" >是否加分：</label>
    <input type="radio"  name="addPoints"  value="0" <?php if($infoData['addPoints']== 0): ?> checked <?php endif; ?>  <?php echo e($readonly); ?> autofocus>否
    <input type="radio"  name="addPoints"  value="1" <?php if($infoData['addPoints']== 1): ?> checked <?php endif; ?> <?php echo e($readonly); ?> autofocus>是
    <label class="lable" for="tag" >手 机号：</label><input type="text" name="phone"  value="<?php echo e($infoData['phone']); ?>" <?php echo e($readonly); ?> autofocus>
</div>
<div class="item">
    
    <label class="lable" for="tag" >备用电话：</label><input type="text"  name="remarksPhone"  value="<?php echo e($infoData['remarksPhone']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable" for="tag" >预留字段：</label><input type="text"  name="reservedFields"  value="<?php echo e($infoData['reservedFields']); ?>" <?php echo e($readonly); ?> autofocus>
</div>
