

<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('name', 'Name *')); ?>

    <?php echo e(Form::text("name", null, array("class"=>"form-control","id"=>"name"))); ?>

    <?php if($errors->has('name')): ?>
        <span class="help-block">
                <strong><?php echo e($errors->first('name')); ?></strong>
        </span>
    <?php endif; ?>
</div>
<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <?php echo e(Form::label('email', 'Email *')); ?>

        <?php echo e(Form::email("email",null, array("class"=>"form-control","id"=>"email"))); ?>

        <?php if($errors->has('email')): ?>
                <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
        </span>
        <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
        <?php echo e(Form::label('mobile', 'Mobile *')); ?>

        <?php echo e(Form::text("mobile",null, array("class"=>"form-control","id"=>"mobile"))); ?>

        <?php if($errors->has('mobile')): ?>
                <span class="help-block">
                <strong><?php echo e($errors->first('mobile')); ?></strong>
        </span>
        <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('city', 'City *')); ?>

    <?php echo e(Form::text("city",null, array("class"=>"form-control","id"=>"city"))); ?>

    <?php if($errors->has('city')): ?>
        <span class="help-block">
                <strong><?php echo e($errors->first('city')); ?></strong>
        </span>
    <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('state') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('state', 'State *')); ?>

    <?php echo e(Form::text("state",null, array("class"=>"form-control","id"=>"state"))); ?>

    <?php if($errors->has('state')): ?>
        <span class="help-block">
                <strong><?php echo e($errors->first('state')); ?></strong>
        </span>
    <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('zip') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('zip', 'Zip *')); ?>

    <?php echo e(Form::text("zip",null, array("class"=>"form-control","id"=>"zip"))); ?>

    <?php if($errors->has('zip')): ?>
        <span class="help-block">
                <strong><?php echo e($errors->first('zip')); ?></strong>
        </span>
    <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('new_password') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('new_password', 'Password *')); ?>


    <?php echo e(Form::password("new_password",array("class"=>"form-control","id"=>"new_password"))); ?>

    <?php if($errors->has('new_password')): ?>
        <span class="help-block">
                <strong><?php echo e($errors->first('new_password')); ?></strong>
        </span>
    <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('confirm_password') ? ' has-error ':''); ?>">
    <?php echo e(Form::label('confirm_password','Confirm password * ')); ?>

    <?php echo e(Form::password('confirm_password',array("class"=>"form-control","id"=>"confirm_password"))); ?>

    <?php if($errors->has('confirm_password')): ?>
        <span class="help-block">
                <strong><?php echo e($errors->first('confirm_password')); ?></strong>
        </span>
    <?php endif; ?>
</div>


<?php $__env->startSection('page_scripts'); ?>
<?php $__env->stopSection(); ?>

<?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/admin/users/form.blade.php ENDPATH**/ ?>