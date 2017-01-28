<?php
/**
 * Created by PhpStorm.
 * User: Huma
 * Date: 1/27/2017
 * Time: 1:00 AM
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ URL::asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/admin_styles.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/jquery.dataTables.min.css')}}" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
    <div class="popup">
        <div class="popup-overlay"></div>
        <div class="popup-container">
            <div class="popup-content">
                <p>Are you sure, you want to delete this record?</p>
                <a href="javascript:;" class="btn btn-default btn-dismiss">No</a> <a
                        class="btn btn-danger btn-delete-url">Yes</a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="javascript:;app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;@if (Auth::guard('admin')->user())
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">Patients<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('admin/patients') }}">Patients List</a></li>
                                <li><a href="{{ url('admin/patient/add') }}">Add Patient</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guard('admin')->user())
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ str_replace("-"," ",Auth::guard('admin')->user()->username) }} <span
                                        class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/admin/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ url('/admin') }}">Login</a></li>
                        <li><a href="{{ url('/admin/register') }}">Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</div>
<!-- jQuery -->
<script src="{{ URL::asset('js/jquery.js') }}"></script>
<!-- Scripts -->
<script src="{{ URL::asset('js/app.js') }}"></script>
<script src="{{ URL::asset('js/admin_js.js') }}"></script>
<!-- DataTables -->
<script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
<!-- App scripts -->
@stack('scripts')
</body>
</html>