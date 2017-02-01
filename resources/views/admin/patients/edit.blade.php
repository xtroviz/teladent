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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <header class="m-top-s m-bottom-s">
                    <div class="col-md-5 col-xs-6">
                        TELADENTISTRY
                    </div>
                    <div class="clearfix"></div>
                </header>
                <div class="content admin-ip-reports p-top bg-white">
                    <div class="content-header padder">
                        <div class="col-md-12">
                            <h1 class="no-margin text-d-blue">Edit Patient</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="spacer"></div>
                    <div class="padder">
                        <div class="p-top">
                            <form action="{{ url('admin/patient/update/'.$patient['patient_id']) }}" role="form"
                                  method="POST" class="form-horizontal">
                                {!! csrf_field() !!}
                                {{ method_field('PATCH') }}
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
                                        <label class="control-label col-md-3">First Name
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" name="first_name"
                                                   value="{{ $patient['first_name'] }}"
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
                                                   value="{{ $patient['last_name'] }}"
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
                                            <input readonly type="text" name="email"
                                                   value="{{$patient['email'] }}"
                                                   class="form-control"/>
                                            @if ($errors->has('email'))
                                                <span class="help-block has-error">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Zip </label>
                                        <div class="col-md-6">
                                            <input type="text" name="zip"
                                                   value="{{ $patient['zip'] }}"
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
                                                   value="{{ $patient['phone'] }}"
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
                                            <button type="submit" class="btn btn-primary no-bg">Update</button>
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
    </div>
@endsection
