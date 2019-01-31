<div class="item">
    <label class="lable"  for="tag" >负责 人：</label><input type="text" name="person"  value="<?php echo e($infoData['person']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >介绍 人：</label><input type="text"  name="introducer" value="<?php echo e($infoData['introducer']); ?>" <?php echo e($readonly); ?> autofocus>
</div><br/>
<div class="item">
  <label class="lable"  for="tag" >备注：</label>
  <textarea name="remarks"  <?php echo e($readonly); ?> ><?php echo e($infoData['remarks']); ?></textarea>
</div>
