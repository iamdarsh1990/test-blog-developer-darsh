

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Tag</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo $__env->make('includes.admin.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e(Form::model($tag, ['route' => ['tags.update', $tag->id],'method'=>'PATCH'])); ?>

            <?php echo $__env->make('admin.tags.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="form-group text-right">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
            <?php echo e(Form::close()); ?>

        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/admin/tags/edit.blade.php ENDPATH**/ ?>