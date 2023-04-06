<?php if(Session::has('success')): ?>
    <div class="alert alert-success">
        <i class="glyphicon glyphicon-thumbs-up"></i>
        <button data-dismiss="alert" class="close">&times;</button>
        <?php echo e(Session::get('success')); ?>

    </div>
<?php elseif(Session::has('danger')): ?>
    <div class="alert alert-danger">
        <button data-dismiss="alert" class="close">&times;</button>
        <?php echo e(Session::get('danger')); ?>

    </div>
<?php elseif(Session::has('warning')): ?>
    <div class="alert alert-warning">
        <button data-dismiss="alert" class="close">&times;</button>
        <?php echo e(Session::get('warning')); ?>

    </div>
<?php elseif(Session::has('info')): ?>
    <div class="alert alert-info">
        <button data-dismiss="alert" class="close">&times;</button>
        <?php echo e(Session::get('info')); ?>

    </div>
<?php endif; ?>






<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>



<?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/includes/admin/alerts.blade.php ENDPATH**/ ?>