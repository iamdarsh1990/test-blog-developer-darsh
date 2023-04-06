


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add new user</h1>
        </div>
    </div>
<div class="row">
	<?php echo $__env->make('includes.admin.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="col-md-12">
        <?php echo e(Form::open(['url' => route("users.store"), 'method' => 'POST','files'=>true])); ?>

            <?php echo $__env->make('admin.users.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="form-group text-right">
            <input type="submit" class="btn btn-primary" value="Save">
        </div>
        <?php echo e(Form::close()); ?>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/admin/users/create.blade.php ENDPATH**/ ?>