

<?php $__env->startSection('content'); ?>

    <style>.info{display:block;font-size: 16px;padding-bottom: 5px;}</style>
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header" style="display: flex;justify-content: space-between;align-items: center;">
                <h1>User's Information</h1>
                <a class="btn btn-primary" href="<?php echo e(url('all-users')); ?>">Back</a>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <span class="info">
            <strong>Username: </strong> <span><?php echo e(ucfirst($user['name'])); ?></span>
        </span>
        <span class="info">
            <strong>Email: </strong> <span><?php echo e($user['email']); ?></span>
        </span>
        <span class="info">
            <strong>Mobile: </strong> <span><?php echo e($user['mobile']); ?></span>
        </span>
        <span class="info">
            <strong>State: </strong> <span><?php echo e(ucfirst($user['state'])); ?></span>
        </span>
        <span class="info">
            <strong>City: </strong> <span><?php echo e($user['city']); ?></span>
        </span>
        <span class="info">
            <strong>Zip: </strong> <span><?php echo e($user['zip']); ?></span>
        </span>
        <span class="info">
            <strong>Created: </strong> <span><?php echo e($user['created_at']); ?></span>
        </span>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/admin/viewuser.blade.php ENDPATH**/ ?>