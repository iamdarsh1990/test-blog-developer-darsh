
<?php $__env->startSection('page_css'); ?>
<link href="<?php echo e(URL::asset('back/css/select2.min.css')); ?>" rel="stylesheet" type="text/css">
<?php $__env->stopSection(); ?>
<div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('title', 'Post title *')); ?>

    <?php echo e(Form::text("title", null, array("class"=>"form-control","id"=>"title"))); ?>

    <?php if($errors->has('title')): ?>
        <span class="help-block">
                <strong><?php echo e($errors->first('title')); ?></strong>
        </span>
    <?php endif; ?>
</div>
<div class="form-group<?php echo e($errors->has('category') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('category_id', 'Category *')); ?>

    <?php echo e(Form::select("category_id",$categories,null, array("class"=>"form-control","id"=>"category_id"))); ?>

    <?php if($errors->has('category')): ?>
        <span class="help-block">
                <strong><?php echo e($errors->first('category')); ?></strong>
        </span>
    <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('content') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('content', 'Content *')); ?>


    <?php echo e(Form::textarea("content", null, array("class"=>"form-control","id"=>"content"))); ?>

    <?php if($errors->has('content')): ?>
        <span class="help-block">
                <strong><?php echo e($errors->first('content')); ?></strong>
        </span>
    <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('tags[]') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('tags', 'Tags')); ?>

    <?php echo e(Form::select("tags[]",$post_tags, null, array("class"=>"form-control","id"=>"tags","multiple"=>"multiple"))); ?>

    <?php if($errors->has('tags[]')): ?>
        <span class="help-block">
                <strong><?php echo e($errors->first('tags[]')); ?></strong>
        </span>
    <?php endif; ?>
</div>

<div class="form-group<?php echo e($errors->has('featured_image') ? ' has-error ':''); ?>">
<?php echo e(Form::label('featured_image','Featured image * ')); ?>

    <?php echo e(Form::file('featured_image',null,array("class"=>"form-control","id"=>"featured_image"))); ?>

        <img id="preview_featured_image" class="inputImgPreview" src="<?php if(isset($post)): ?><?php echo e($post->featured_image->thumb); ?> <?php endif; ?>" class="img-thumbnail"/>
    <?php if($errors->has('featured_image')): ?>
        <span class="help-block">
                <strong><?php echo e($errors->first('featured_image')); ?></strong>
        </span>
    <?php endif; ?>
</div>


<div class="form-group<?php echo e($errors->has('active') ? ' has-error' : ''); ?>">
    <label>Active : </label>
    <label class="radio-inline">
        <?php echo e(Form::radio('active','1',true,['id'=>'yes'])); ?> Yes
    </label>
    <label class="radio-inline">
        <?php echo e(Form::radio('active','0',null,['id'=>'yes'])); ?> No
    </label>
    <?php if($errors->has('active')): ?>
        <span class="help-block">
                <strong><?php echo e($errors->first('active')); ?></strong>
        </span>
    <?php endif; ?>
</div>


<?php $__env->startSection('page_scripts'); ?>

    <script type="text/javascript" src="<?php echo e(URL::asset('back/js/ckeditor/ckeditor.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('back/js/select2.min.js')); ?>"></script>

    <script type="text/javascript">
        CKEDITOR.replace( 'content' );

        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var targetPreview = 'preview_'+$(input).attr('id');
                reader.onload = function(e) {
                    $('#'+targetPreview).attr('src', e.target.result).show();
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#featured_image").change(function() {
            readURL(this);
        });

        $(document).ready(function() {

            $("#category_id").select2();

            $("#tags").select2();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/admin/posts/form.blade.php ENDPATH**/ ?>