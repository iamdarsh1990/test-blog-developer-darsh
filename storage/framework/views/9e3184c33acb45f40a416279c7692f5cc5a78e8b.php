

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Users</h1>
        </div>
    </div>
    <div class="row" style="margin: 0px;">
        <?php $__currentLoopData = $usersData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-6" style="border: 1px solid #80808094;border-radius: 5px;padding: 10px;margin-right:20px;margin-top:20px;">
                <div class="card-body">
                    <h4 class="card-title" style="font-weight: bold;"><?php echo e(ucfirst($data['name'])); ?></h4>
                    <p class="card-text"><?php echo e($data['email']); ?>.</p>
                </div>
                <a href="<?php echo e(route('view-user',$data['id'])); ?>" class="btn btn-primary">view</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/admin/users.blade.php ENDPATH**/ ?>