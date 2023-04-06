
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('includes.admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form id="login_form" action="<?php echo e(url('login')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <fieldset>
                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" value="<?php echo e(old('email')); ?>" autofocus>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?> type="checkbox" value="">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->

                            <input type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->

<script src="<?php echo e(URL::asset('back/js/jquery.min.js')); ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(URL::asset('back/js/bootstrap.min.js')); ?>"></script>


</body>

</html>
<?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/auth/login.blade.php ENDPATH**/ ?>