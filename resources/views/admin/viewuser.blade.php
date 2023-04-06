@extends('layouts.admin.template')

@section('content')

    <style>.info{display:block;font-size: 16px;padding-bottom: 5px;}</style>
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header" style="display: flex;justify-content: space-between;align-items: center;">
                <h1>User's Information</h1>
                <a class="btn btn-primary" href="{{ url('all-users') }}">Back</a>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <span class="info">
            <strong>Username: </strong> <span>{{ ucfirst($user['name']) }}</span>
        </span>
        <span class="info">
            <strong>Email: </strong> <span>{{ $user['email'] }}</span>
        </span>
        <span class="info">
            <strong>Mobile: </strong> <span>{{ $user['mobile'] }}</span>
        </span>
        <span class="info">
            <strong>State: </strong> <span>{{ ucfirst($user['state']) }}</span>
        </span>
        <span class="info">
            <strong>City: </strong> <span>{{ $user['city'] }}</span>
        </span>
        <span class="info">
            <strong>Zip: </strong> <span>{{ $user['zip'] }}</span>
        </span>
        <span class="info">
            <strong>Created: </strong> <span>{{ $user['created_at'] }}</span>
        </span>
    </div>

@endsection