@extends ('backend.layouts.master')

@section ('title', trans('menus.user_management') . ' | ' . trans('menus.create_user'))

@section('page-header')
    <h1>
        {{ trans('menus.user_management') }}
        <small>{{ trans('menus.create_user') }}</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> {{ trans('menus.dashboard') }}</a></li>
    <li>{!! link_to_route('admin.access.users.index', trans('menus.user_management')) !!}</li>
    <li class="active">{!! link_to_route('admin.access.users.create', trans('menus.create_user')) !!}</li>
@stop

@section('content')
    {{--@include('backend.access.includes.partials.header-buttons')--}}

    <div class="row" style="margin-top: 200px;">
    <div class="col-md-1 col-md-offset-4">
    <button class="btn btn-success" href="#" data-toggle="modal" data-target="#mohregistermodel" >Admin Level</button>
    </div>
    <div class="col-md-1 col-md-offset-1">
    <button class="btn btn-success learn-more smoothscroll" href="#features" data-toggle="modal" data-target="#phiregistermodel">PHI Level</button>
    </div>
    </div>

    <div>
        <!-- Modal For PHI officer Register-->
        <div id="phiregistermodel" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> PHI Officer Register</h4>
        </div>
        <div class="modal-body">
        {!! Form::open(['route' => 'admin.access.users.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) !!}
        <div class="row">
        {{--name--}}
        <div class="col-md-6">
        {!! Form::label('name', trans('validation.attributes.name'), ['class' => '']) !!}
        {!! Form::input('name', 'name', old('name'), ['class' => 'form-control','required']) !!}
        </div>
        {{--nic--}}
        <div class="col-md-6">
        {!! Form::label('nic_number', trans('NIC'), ['class' => '']) !!}
        {!! Form::input('nic_number', 'nic_number', old('nic_number'), ['class' => 'form-control','required']) !!}
        </div>
        {{--conact number--}}
        <div class="col-md-6">
        {!! Form::label('contact_number', trans('Contact Number'), ['class' => '']) !!}
        {!! Form::input('number', 'contact_number', old('contact_number'), ['class' => 'form-control','required']) !!}
        </div>
        {{--phi_ref--}}
        <div class="col-md-6">
        {!! Form::label('phi_ref_number', trans('PHI Referance Number'), ['class' => '']) !!}
        {!! Form::input('phi_ref_number', 'phi_ref_number', old('phi_ref_number'), ['class' => 'form-control','required']) !!}
        </div>
        {{--phi_area--}}
        <div class="col-md-6">
        {!! Form::label('phi_area', trans('PHI Area'), ['class' => '']) !!}
        {{--{!! Form::input('se', 'name', old('name'), ['class' => 'form-control']) !!}--}}
        <select class="form-control" name="phi_area" id="districtSelect" autocomplete="off" required>
        <option selected>- Select District -</option>
        <option value="Ampara">Ampara</option>
        <option value="Anuradhapura">Anuradhapura</option>
        <option value="Badulla">Badulla</option>
        <option value="Batticaloa">Batticaloa</option>
        <option value="Colombo">Colombo</option>
        <option value="Galle">Galle</option>
        <option value="Gampaha">Gampaha</option>
        <option value="Hambantota">Hambantota</option>
        <option value="Jaffna">Jaffna</option>
        <option value="Kalutara">Kalutara</option>
        <option value="Kandy">Kandy</option>
        <option value="Kegalle">Kegalle</option>
        <option value="Kurunegala">Kurunegala</option>
        <option value="Mannar">Mannar</option>
        <option value="Matara">Matara</option>
        <option value="Moneragala">Moneragala</option>
        <option value="Mullaitivu">Mullaitivu</option>
        <option value="Nuwara Eliya">Nuwara Eliya</option>
        <option value="Polonnaruwa">Polonnaruwa</option>
        <option value="Puttalam">Puttalam</option>
        <option value="Ratnapura">Ratnapura</option>
        <option value="Trincomalee">Trincomalee</option>
        <option value="Vavuniya">Vavuniya</option>
        </select>
        </div>
        {{--email--}}
        <div class="col-md-6">
        {!! Form::label('email', trans('validation.attributes.email'), ['class' => '']) !!}
        {!! Form::input('email', 'email', old('email'), ['class' => 'form-control','required']) !!}
        </div>
        {{--password--}}
        <div class="col-md-6">
        {!! Form::label('password', trans('validation.attributes.password'), ['class' => '']) !!}
        {!! Form::input('password', 'password', null, ['class' => 'form-control','required']) !!}
        </div>
        {{--confirm password--}}
        <div class="col-md-6">
        {!! Form::label('password_confirmation', trans('validation.attributes.password_confirmation'), ['class' => '']) !!}
        {!! Form::input('password', 'password_confirmation', null, ['class' => 'form-control','required']) !!}
        </div>

        {{--hidden filed for status id--}}
        <div class="col-md-6">
        {!! Form::hidden('status', 1) !!}
        </div>

        {{--hidden filed for confirmed id--}}
        <div class="col-md-6">
        {!! Form::hidden('confirmed', 1) !!}
        </div>

        <div class="col-md-offset-9 col-md-1 " style="margin-right: 10px;">
        {!! Form::submit(trans('labels.register_button'), ['class' => 'btn btn-primary subphi']) !!}
        </div>
        <div class="col-md-1">
        {!! Form::Reset(trans('Clear'), ['class' => 'btn btn-danger']) !!}
        </div>
        </div>
        </div>
        {!! Form::close() !!}
        </div>
        </div>

        </div>
        </div>

        <!-- Modal For MOH officer Register-->
        <div id="mohregistermodel" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">


        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> MOH Officer Register</h4>
        </div>
        <div class="modal-body">
        {!! Form::open(['route' => 'admin.access.users.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) !!}
        <div class="row">
        {{--name--}}
        <div class="col-md-6">
        {!! Form::label('name', trans('validation.attributes.name'), ['class' => '']) !!}
        {!! Form::input('name', 'name', old('name'), ['class' => 'form-control','required']) !!}
        </div>
        {{--nic--}}
        <div class="col-md-6">
        {!! Form::label('nic_number', trans('NIC'), ['class' => '']) !!}
        {!! Form::input('nic_number', 'nic_number', old('nic_number'), ['class' => 'form-control','required']) !!}
        </div>
        {{--conact number--}}
        <div class="col-md-6">
        {!! Form::label('contact_number', trans('Contact Number'), ['class' => '']) !!}
        {!! Form::input('contact_number', 'contact_number', old('contact_number'), ['class' => 'form-control','required']) !!}
        </div>
        {{--moh_ref--}}
        <div class="col-md-6">
        {!! Form::label('moh_ref_number', trans('MOH Referance Number'), ['class' => '']) !!}
        {!! Form::input('moh_ref_number', 'moh_ref_number', old('moh_ref_number'), ['class' => 'form-control','required']) !!}
        </div>
        {{--moh_area--}}
        <div class="col-md-6">
        {!! Form::label('moh_area', trans('MOH Area'), ['class' => '','required']) !!}
        {{--{!! Form::input('se', 'name', old('name'), ['class' => 'form-control']) !!}--}}
        <select class="form-control" name="moh_area" id="districtSelect" autocomplete="off">
        <option selected>- Select District -</option>
        <option value="Ampara">Ampara</option>
        <option value="Anuradhapura">Anuradhapura</option>
        <option value="Badulla">Badulla</option>
        <option value="Batticalo">Batticalo</option>
        <option value="Colombo">Colombo</option>
        <option value="Galle">Galle</option>
        <option value="Gampaha">Gampaha</option>
        <option value="Hambantota">Hambantota</option>
        <option value="Jaffna">Jaffna</option>
        <option value="Kalutara">Kalutara</option>
        <option value="Kandy">Kandy</option>
        <option value="Kegalle">Kegalle</option>
        <option value="Kurunegala">Kurunegala</option>
        <option value="Mannar">Mannar</option>
        <option value="Matara">Matara</option>
        <option value="Moneragala">Moneragala</option>
        <option value="Mullaitivu">Mullaitivu</option>
        <option value="Nuwara Eliya">Nuwara Eliya</option>
        <option value="Polonnaruwa">Polonnaruwa</option>
        <option value="Puttalam">Puttalam</option>
        <option value="Ratnapura">Ratnapura</option>
        <option value="Trincomalee">Trincomalee</option>
        <option value="Vavuniya">Vavuniya</option>
        </select>
        </div>
        {{--email--}}
        <div class="col-md-6">
        {!! Form::label('email', trans('validation.attributes.email'), ['class' => '']) !!}
        {!! Form::input('email', 'email', old('email'), ['class' => 'form-control','required']) !!}
        </div>
        {{--password--}}
        <div class="col-md-6">
        {!! Form::label('password', trans('validation.attributes.password'), ['class' => '']) !!}
        {!! Form::input('password', 'password', null, ['class' => 'form-control','required']) !!}
        </div>
        {{--confirm password--}}
        <div class="col-md-6">
        {!! Form::label('password_confirmation', trans('validation.attributes.password_confirmation'), ['class' => '']) !!}
        {!! Form::input('password', 'password_confirmation', null, ['class' => 'form-control','required']) !!}
        </div>

        {{--hidden filed for status id--}}
        <div class="col-md-6">
        {!! Form::hidden('status', '1') !!}
        </div>

        {{--hidden filed for confirmed id--}}
        <div class="col-md-6">
        {!! Form::hidden('confirmed', '1') !!}
        </div>

        <div class="col-md-offset-9 col-md-1 " style="margin-right: 10px;">
        {!! Form::submit(trans('labels.register_button'), ['class' => 'btn btn-primary']) !!}
        </div>
        <div class="col-md-1">
        {!! Form::Reset(trans('Clear'), ['class' => 'btn btn-danger']) !!}
        </div>

        </div>
        </div>
        {!! Form::close() !!}
        </div>

        </div>

        </div>
        </div>
    </div>

@stop

@section('after-scripts-end')
    {!! HTML::script('js/backend/access/permissions/script.js') !!}
    {!! HTML::script('js/backend/access/users/script.js') !!}
@stop


