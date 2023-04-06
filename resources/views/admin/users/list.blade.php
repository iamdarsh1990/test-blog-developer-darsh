@extends('layouts.admin.template')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Users</h1>
    </div>
  </div>
<section>
  @include('includes.admin.alerts')
  <div class="container-fluid text-right" style="margin-bottom: 16px;">
    <a class="btn btn-success" href="{{route('users.create')}}">
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
          {{Form::open(['url'=>url('users/'),'method'=>'delete',"id"=>"data-delete-form"])}}
          <button type="submit" class="btn btn-default">Yes</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          {{Form::close()}}
        </div>
      </div>
    </div>
  </div>
<div class="text-center">
  {{$users->links()}}
</div>
</section>
@endsection

@section('page_scripts')
  <script type="text/javascript">
    $(function () {
      var table = $('#list-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('users.index') !!}',
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
@endsection
