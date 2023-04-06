

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Categories</h1>
        </div>
    </div>
    <section>
        <?php echo $__env->make('includes.admin.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-fluid text-right" style="margin-bottom: 16px;">
            <a class="btn btn-success" href="<?php echo e(url('/posts-categories/create')); ?>">
                Add New
            </a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($post_category->id); ?></td>
                    <td><?php echo e($post_category->name); ?></td>

                    <td>
                        <a href="<?php echo e(route('posts-categories.edit',['posts_category'=>$post_category->id])); ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="<?php echo e(url('posts/delete')); ?>" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?php echo e($post_category->id); ?>">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                        <div class="modal fade" id="deleteModal<?php echo e($post_category->id); ?>" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this post?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <?php echo e(Form::open(['url'=>route('posts-categories.destroy',$post_category->id),'method'=>'delete'])); ?>

                                        <button type="submit" class="btn btn-default">Yes</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                        <?php echo e(Form::close()); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/admin/post_categories/list.blade.php ENDPATH**/ ?>