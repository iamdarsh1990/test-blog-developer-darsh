
<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Users</h1>
    </div>
  </div>
<section>
  <?php echo $__env->make('includes.admin.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="container-fluid text-right" style="margin-bottom: 16px;">
    <a class="btn btn-success" href="<?php echo e(route('users.create')); ?>">
      Add New
    </a>
  </div>
  <table class="table" id="list-table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>

      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
  <div class="modal fade" id="deleteModal" role="dialog">
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
          <?php echo e(Form::open(['url'=>url('users/'),'method'=>'delete',"id"=>"data-delete-form"])); ?>

          <button type="submit" class="btn btn-default">Yes</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          <?php echo e(Form::close()); ?>

        </div>
      </div>
    </div>
  </div>
<div class="text-center">
  <?php echo e($users->links()); ?>

</div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>
  <script type="text/javascript">
    $(function () {
      var table = $('#list-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '<?php echo route('users.index'); ?>',
        columns: [
          {data: 'id', name: 'id'},
          {data: 'name', name: 'name'},
          {data: 'email', name: 'email'},
          {data: 'city', name: 'city'},
          {data: 'state', name: 'state'},
          {data: 'zip', name: 'zip'},
          {data: 'actions', name: 'actions', orderable: false, searchable: false}
        ]
      });
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\test\darsh-test-task-blog\resources\views/admin/users/list.blade.php ENDPATH**/ ?>