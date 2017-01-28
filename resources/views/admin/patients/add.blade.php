<?php
/**
 * Created by PhpStorm.
 * User: Huma
 * Date: 1/27/2017
 * Time: 1:30 AM
 */
?>
@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Patient</div>

                    <div class="panel-body">
                        <form action="{{ url('admin/patient/save') }}" role="form" method="POST"
                              class="form-horizontal">
                            {!! csrf_field() !!}
                            <div class="form-body">
                                @if(Session::has('message_failure'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('message_failure') }}
                                    </div>
                                @endif
                                @if(Session::has('flash_message'))
                                    <div class="alert alert-success">
                                        {{ Session::get('flash_message') }}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label class="control-label col-md-3">Patient ID
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-6">
                                        @if(\Illuminate\Support\Facades\Input::old('patient_id'))
                                            <input type="text" name="patient_id"
                                                   value="{{ \Illuminate\Support\Facades\Input::old('patient_id') }}"
                                                   class="form-control" readonly/>
                                        @else
                                            <input type="text" name="patient_id" value="{{ mt_rand(100000, 999999)}}"
                                                   class="form-control" readonly/>
                                        @endif
                                        @if ($errors->has('patient_id'))
                                            <span class="help-block has-error">
                                                <strong>{{ $errors->first('patient_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">First Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" name="first_name"
                                               value="{{ \Illuminate\Support\Facades\Input::old('first_name') }}"
                                               class="form-control"/>
                                        @if ($errors->has('first_name'))
                                            <span class="help-block has-error">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Last Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" name="last_name"
                                               value="{{ \Illuminate\Support\Facades\Input::old('last_name') }}"
                                               class="form-control"/>
                                        @if ($errors->has('last_name'))
                                            <span class="help-block has-error">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" name="email"
                                               value="{{ \Illuminate\Support\Facades\Input::old('email') }}"
                                               class="form-control"/>
                                        @if ($errors->has('email'))
                                            <span class="help-block has-error">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Confirm Email
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" name="email_confirmation"
                                               value="{{ \Illuminate\Support\Facades\Input::old('email_confirmation') }}"
                                               class="form-control"/>
                                        @if ($errors->has('email_confirmation'))
                                            <span class="help-block has-error">
                                                <strong>{{ $errors->first('email_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="password" name="password"
                                               value="{{ \Illuminate\Support\Facades\Input::old('password') }}"
                                               class="form-control"/>
                                        @if ($errors->has('password'))
                                            <span class="help-block has-error">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Confirm Password
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="password" name="password_confirmation"
                                               value="{{ \Illuminate\Support\Facades\Input::old('password_confirmation') }}"
                                               class="form-control"/>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block has-error">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Zip </label>
                                    <div class="col-md-6">
                                        <input type="text" name="zip"
                                               value="{{ \Illuminate\Support\Facades\Input::old('zip') }}"
                                               class="form-control"/>
                                        @if ($errors->has('zip'))
                                            <span class="help-block has-error">
                                                <strong>{{ $errors->first('zip') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Phone </label>
                                    <div class="col-md-6">
                                        <input type="text" name="phone"
                                               value="{{ \Illuminate\Support\Facades\Input::old('phone') }}"
                                               class="form-control"/>
                                        @if ($errors->has('phone'))
                                            <span class="help-block has-error">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-success">Create</button>
                                        <a href="{{ url('/admin/patients') }}" class="btn btn-default">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
