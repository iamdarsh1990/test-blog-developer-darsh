@extends('layouts.admin.template')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Posts</h1>
        </div>
    </div>
    <div class="row" style="margin: 0px;">
        @foreach($postData as $data)
            <div class="col-lg-2 col-md-2 text-center" style="border: 1px solid #80808094;border-radius: 5px;padding: 10px;margin-right:20px;margin-top:20px;">
                <div class="card-body">
                    <img src="{{ $data['featured_image']->thumb }}" style="width: 150px;height: 150px;">
                    <h4 class="card-title" style="font-weight: bold;">{{ ucfirst($data['title']) }}</h4>
                </div>
                <a href="{{route('view-post',$data['id'])}}" class="btn btn-primary">view</a>
            </div>
        @endforeach
    </div>

@endsection