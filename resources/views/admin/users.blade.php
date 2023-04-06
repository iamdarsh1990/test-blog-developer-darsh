@extends('layouts.admin.template')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Users</h1>
        </div>
    </div>
    <div class="row" style="margin: 0px;">
        @foreach($usersData as $data)
            <div class="col-lg-3 col-md-6" style="border: 1px solid #80808094;border-radius: 5px;padding: 10px;margin-right:20px;margin-top:20px;">
                <div class="card-body">
                    <h4 class="card-title" style="font-weight: bold;">{{ ucfirst($data['name']) }}</h4>
                    <p class="card-text">{{ $data['email'] }}.</p>
                </div>
                <a href="{{route('view-user',$data['id'])}}" class="btn btn-primary">view</a>
            </div>
        @endforeach
    </div>

@endsection