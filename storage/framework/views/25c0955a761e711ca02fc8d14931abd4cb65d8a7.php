<div class="form-group">
    <label for="tag" class="col-md-3 control-label">角色名称</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="name" id="tag" value="<?php echo e($name); ?>" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">角色标签</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="display_name" id="tag" value="<?php echo e($display_name); ?>" autofocus>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-3 control-label">角色概述</label>
    <div class="col-md-5">
        <textarea name="description" class="form-control" rows="3"><?php echo e($description); ?></textarea>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-3 control-label">权限列表</label>
</div>
<div class="form-group">
    <div class="form-group">
        <?php if($permissionAll): ?>
            <?php foreach($permissionAll[0] as $v): ?>
                <div class="form-group">
                    <label class="control-label col-md-3 all-check">
                        <?php echo e($v['display_name']); ?>：
                    </label>
                    <div class="col-md-6">
                        <?php if($permissionAll[$v['id']] ): ?>
                            <?php foreach($permissionAll[$v['id']] as $vv): ?>
                                <div class="col-md-4" style="float:left;padding-left:20px;margin-top:8px;">
                        <span class="checkbox-custom checkbox-default">
                        <i class="fa"></i>

                            <input class="form-actions"
                                   <?php if(in_array($vv['id'],$perms)): ?>
                                   checked
                                   <?php endif; ?>
                                   id="inputChekbox<?php echo e($vv['id']); ?>" type="Checkbox" value="<?php echo e($vv['id']); ?>"
                                   name="permissions[]"> <label for="inputChekbox<?php echo e($vv['id']); ?>">
                                <?php echo e($vv['display_name']); ?>

                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<script>
//    $(function () {
//        $('.all-check').on('click', function () {
//
//        });
//    });
</script>

