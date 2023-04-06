

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Posts</h1>
        </div>
    </div>
    <div class="row" style="margin: 0px;">
        <?php $__currentLoopData = $postData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-2 col-md-2 text-center" style="border: 1px solid #80808094;border-radius: 5px;padding: 10px;margin-right:20px;margin-top:20px;">
                <div class="card-body">
                    <img src="<?php echo e($data['featured_image']->thumb); ?>" style="width: 150px;height: 150px;">
                    <h4 class="card-title" style="font-weight: bold;"><?php echo e(ucfirst($data['title'])); ?></h4>
                </div>
                <a href="<?php echo e(route('view-post',$data['id'])); ?>" class="btn btn-primary">view</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/admin/posts.blade.php ENDPATH**/ ?>