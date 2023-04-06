

<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('name', 'tag *')); ?>

    <?php echo e(Form::text("name", null, array("class"=>"form-control","id"=>"name"))); ?>

    <?php if($errors->has('name')): ?>
        <span class="help-block">
                <strong><?php echo e($errors->first('name')); ?></strong>
        </span>
    <?php endif; ?>
</div>

<?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/admin/tags/form.blade.php ENDPATH**/ ?>