@extends('layouts.admin.template')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-fw fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$usersCount}}</div>
                            <div>Total Users</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('all-users')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-list fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$postsCount}}</div>
                            <div>Total Posts</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('all-posts')}}">
                    <div class="panel-footer text-success">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tags fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$tagsCount}}</div>
                            <div>Total Tags</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('tags')}}">
                    <div class="panel-footer text-danger">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$postCategoryCount}}</div>
                            <div>Total Posts Categories</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('tags')}}">
                    <div class="panel-footer text-warning">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

{{--    @if($usersData)--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <h1 class="page-header">Users</h1>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row" style="margin: 0px;">--}}
{{--            @foreach($usersData as $data)--}}
{{--                <div class="col-lg-3 col-md-6" style="border: 1px solid #80808094;border-radius: 5px;padding: 10px;margin-right:20px;">--}}
{{--                    <div class="card-body">--}}
{{--                        <h4 class="card-title" style="font-weight: bold;">{{ ucfirst($data['name']) }}</h4>--}}
{{--                        <p class="card-text">{{ $data['email'] }}.</p>--}}
{{--                    </div>--}}
{{--                    <a href="#" class="btn btn-primary">view</a>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    @endif--}}

@endsection