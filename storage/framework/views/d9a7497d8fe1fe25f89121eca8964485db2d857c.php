<div class="item">
    <label class="lable"  for="tag" >年   级：</label><input style="width:160px"type="text" name="grade" value="<?php echo e($infoData['grade']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >考生 号：</label><input style="width:160px"type="text"  name="examineeNum" value="<?php echo e($infoData['examineeNum']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >成   绩：</label><input style="width:160px"type="text"  name="achievement" value="<?php echo e($infoData['achievement']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >学   号：</label><input style="width:160px"type="text"  name="studentNum" value="<?php echo e($infoData['studentNum']); ?>" <?php echo e($readonly); ?> autofocus>
</div>
<div class="item">
    <label class="lable"  for="tag" >报名日期：</label>
     <input style="width:160px"type="text" onclick="WdatePicker()" name="applyTime" class="Wdate text" value="<?php echo e($infoData['applyTime']); ?>" <?php echo e($readonly); ?> autofocus>
    <!--<input style="width:160px"type="text" name="applyTime" autofocus>-->
    <label class="lable"  for="tag" >初始学校：</label><input style="width:160px"type="text"  name="initialSchool" value="<?php echo e($infoData['initialSchool']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >层   次：</label><input style="width:160px"type="text"  name="level" value="<?php echo e($infoData['level']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >学习形式：</label><input style="width:160px"type="text" name="studyForm" value="<?php echo e($infoData['studyForm']); ?>" <?php echo e($readonly); ?> autofocus>
</div> 
<div class="item">
    <label class="lable"  for="tag" >报考学校：</label>
    <select <?php echo e($readonly); ?> style="width:160px" name="applySchool">
        <option value="">--请选择--</option>
        <?php foreach($data as $v): ?>
        <option value="<?php echo e($v['id']); ?>" <?php if($infoData['applySchool']== $v['id']): ?> selected <?php endif; ?>><?php echo e($v['name']); ?></option>
        <?php endforeach; ?>
    </select>
    <label class="lable"  for="tag" >报考专业：</label><input style="width:160px"type="text"  name="applyProfession" value="<?php echo e($infoData['applyProfession']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >核对地址：</label><input style="width:160px"type="text"  name="checkAddress" value="<?php echo e($infoData['checkAddress']); ?>" <?php echo e($readonly); ?> autofocus>
    <label class="lable"  for="tag" >预留字段：</label><input style="width:160px"type="text"  name="enterFIeld" value="<?php echo e($infoData['enterFIeld']); ?>" <?php echo e($readonly); ?> autofocus>
</div>
<div class="item">
    <label class="lable"  for="tag" >个人履历：</label>
    <textarea name="personalResume" <?php echo e($readonly); ?>><?php echo e($infoData['personalResume']); ?></textarea>
</div>
