@extends('layouts.admin.template')

@section('content')

    <style>.info{display:block;font-size: 16px;padding-bottom: 10px;}</style>
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header" style="display: flex;justify-content: space-between;align-items: center;">
                <h1>User's Information</h1>
                <a class="btn btn-primary" href="{{ url('all-posts') }}">Back</a>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <span class="info">
            <strong>Title: </strong> <span>{{ ucfirst($post['title']) }}</span>
        </span>
        <span class="info">
            <strong>Content: </strong> <p style="margin-top: 10px;">
                <?= nl2br($post['content']) ?></p>
        </span>
        <span class="info">
            <strong>Username: </strong> <span>{{ ucfirst($user['name']) }}</span>
        </span>
        <span class="info">
            <strong>Category: </strong> <span>{{ ucfirst($category['name']) }}</span>
        </span>
        <span class="info">
            <strong>Image: </strong> <span><img src="{{ $post['featured_image']->thumb }}" style="width: 150px;height: 150px;"></span>
        </span>
        <span class="info">
            <strong>Created: </strong> <span>{{ $post['created_at'] }}</span>
        </span>
        <span class="info">
            <strong>Status: </strong>
            @if($post['active'] == 1)
                <span class="label label-success">Active</span>
            @else
                <span class="label label-danger">Deactivated</span>
            @endif
        </span>
    </div>

@endsection