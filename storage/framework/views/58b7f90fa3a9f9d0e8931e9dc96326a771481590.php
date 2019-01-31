<?php $__env->startSection('title','控制面板'); ?>

<?php $__env->startSection('pageHeader','控制面板'); ?>

<?php $__env->startSection('pageDesc','DashBoard'); ?>

<?php $__env->startSection('content'); ?>
<div class="main animsition">
    <div class="container-fluid">

        <div class="row">
            <div class="">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php echo $__env->make('admin.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('admin.partials.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">基本信息</h3>
                            </div>
                            <?php echo $__env->make('admin.info._form_one', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <div class="panel-heading">
                                <h3 class="panel-title">报考信息</h3>
                            </div>
                            <?php echo $__env->make('admin.info._form_two', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <div class="panel-heading">
                                <h3 class="panel-title">缴费信息</h3>
                            </div>
                            <?php echo $__env->make('admin.info._form_tree', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <div class="panel-heading">
                                <h3 class="panel-title">负责人信息</h3>
                            </div>
                            <?php echo $__env->make('admin.info._form_four', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <div class="form-group">
                                <div class="col-md-7 col-md-offset-3">
                                    <a class="btn btn-primary btn-md" href="/admin/info/" >返回</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>