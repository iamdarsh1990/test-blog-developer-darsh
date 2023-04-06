<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo $__env->make('includes.admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('page_css'); ?>
</head>

<body style="background-color: #fcf8e38f!important;">
<!--wrapper -->
<div id="wrapper">

<?php echo $__env->make('includes.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- page-wrapper -->
    <div id="page-wrapper" style="min-height: 100vh;">
    <?php echo $__env->yieldContent('content'); ?>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<script type="text/javascript">
    var APP_URL = "<?php echo e(url('/')); ?>";
</script>
<!-- jQuery -->

<script src="<?php echo e(URL::asset('back/js/jquery.min.js')); ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(URL::asset('back/js/bootstrap.min.js')); ?>"></script>


<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo e(URL::asset('back/js/metisMenu.min.js')); ?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo e(URL::asset('back/js/sb-admin-2.js')); ?>"></script>
<script src="<?php echo e(URL::asset('back/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('back/js/global.js')); ?>"></script>
<?php echo $__env->yieldContent('page_scripts'); ?>

</body>

</html>

<?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/layouts/admin/template.blade.php ENDPATH**/ ?>