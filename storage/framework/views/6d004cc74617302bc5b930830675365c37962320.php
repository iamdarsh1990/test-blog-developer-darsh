

<?php $__env->startSection('content'); ?>

    <style>.info{display:block;font-size: 16px;padding-bottom: 10px;}</style>
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header" style="display: flex;justify-content: space-between;align-items: center;">
                <h1>User's Information</h1>
                <a class="btn btn-primary" href="<?php echo e(url('all-posts')); ?>">Back</a>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <span class="info">
            <strong>Title: </strong> <span><?php echo e(ucfirst($post['title'])); ?></span>
        </span>
        <span class="info">
            <strong>Content: </strong> <p style="margin-top: 10px;">
                <?= nl2br($post['content']) ?></p>
        </span>
        <span class="info">
            <strong>Username: </strong> <span><?php echo e(ucfirst($user['name'])); ?></span>
        </span>
        <span class="info">
            <strong>Category: </strong> <span><?php echo e(ucfirst($category['name'])); ?></span>
        </span>
        <span class="info">
            <strong>Image: </strong> <span><img src="<?php echo e($post['featured_image']->thumb); ?>" style="width: 150px;height: 150px;"></span>
        </span>
        <span class="info">
            <strong>Created: </strong> <span><?php echo e($post['created_at']); ?></span>
        </span>
        <span class="info">
            <strong>Status: </strong>
            <?php if($post['active'] == 1): ?>
                <span class="label label-success">Active</span>
            <?php else: ?>
                <span class="label label-danger">Deactivated</span>
            <?php endif; ?>
        </span>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/admin/viewpost.blade.php ENDPATH**/ ?>