

<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('name', 'Category name')); ?>

    <?php echo e(Form::text("name", null, array("class"=>"form-control","id"=>"title"))); ?>

    <?php if($errors->has('name')): ?>
        <span class="help-block">
                <strong><?php echo e($errors->first('name')); ?></strong>
        </span>
    <?php endif; ?>
</div>


<?php $__env->startSection('page_scripts'); ?>

    <script type="text/javascript" src="<?php echo e(URL::asset('back/js/ckeditor/ckeditor.js')); ?>"></script>

    <script>
        CKEDITOR.replace( 'content' );
    </script>
<?php $__env->stopSection(); ?>

<?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/admin/post_categories/form.blade.php ENDPATH**/ ?>