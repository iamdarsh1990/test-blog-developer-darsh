

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {{Form::label('name', 'Name *')}}
    {{Form::text("name", null, array("class"=>"form-control","id"=>"name"))}}
    @if ($errors->has('name'))
        <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {{Form::label('email', 'Email *')}}
        {{Form::email("email",null, array("class"=>"form-control","id"=>"email"))}}
        @if ($errors->has('email'))
                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
</div>

<div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
        {{Form::label('mobile', 'Mobile *')}}
        {{Form::text("mobile",null, array("class"=>"form-control","id"=>"mobile"))}}
        @if ($errors->has('mobile'))
                <span class="help-block">
                <strong>{{ $errors->first('mobile') }}</strong>
        </span>
        @endif
</div>

<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
    {{Form::label('city', 'City *')}}
    {{Form::text("city",null, array("class"=>"form-control","id"=>"city"))}}
    @if ($errors->has('city'))
        <span class="help-block">
                <strong>{{ $errors->first('city') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
    {{Form::label('state', 'State *')}}
    {{Form::text("state",null, array("class"=>"form-control","id"=>"state"))}}
    @if ($errors->has('state'))
        <span class="help-block">
                <strong>{{ $errors->first('state') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
    {{Form::label('zip', 'Zip *')}}
    {{Form::text("zip",null, array("class"=>"form-control","id"=>"zip"))}}
    @if ($errors->has('zip'))
        <span class="help-block">
                <strong>{{ $errors->first('zip') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
    {{Form::label('new_password', 'Password *')}}

    {{Form::password("new_password",array("class"=>"form-control","id"=>"new_password"))}}
    @if ($errors->has('new_password'))
        <span class="help-block">
                <strong>{{ $errors->first('new_password') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('confirm_password') ? ' has-error ':''}}">
    {{Form::label('confirm_password','Confirm password * ')}}
    {{Form::password('confirm_password',array("class"=>"form-control","id"=>"confirm_password"))}}
    @if ($errors->has('confirm_password'))
        <span class="help-block">
                <strong>{{ $errors->first('confirm_password') }}</strong>
        </span>
    @endif
</div>


@section('page_scripts')
@endsection

