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
<div id="wrapper" class="admin-end">
    <div class="popup">
        <div class="popup-overlay"></div>
        <div class="popup-container">
            <div class="popup-content">
                <p>Are you sure, you want to delete this record?</p>
                <a href="javascript:;" class="btn btn-default btn-dismiss" onclick="dismissMe()">No</a> <a
                        class="btn btn-danger btn-delete-url">Yes</a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-fixed-top admin-top-nav">
        <div class="container-fluid">
            <div class="col-md-10" id="navbar">
                <ul class="nav navbar-nav">
                    <li class=""><a href="{{ url('/admin/dashboard') }}"><i
                                    class="inline-block v-middle fa fa-cog m-right"></i><span
                                    class="inline-block v-middle">Admin Portal</span></a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/admin/logout') }}" class="logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav admin-menu">
            <li class="sidebar-brand">
                <a href="{{ url('/admin/dashboard') }}">
                    <div class="icon">
                        <i class="fa fa-cog"></i>
                    </div>
                    <div class="icon-text">Admin <br class="visible-lg visible-md"/> Dashboard</div>
                </a>
            </li>
            <li class="home">
                <a href="{{ url('admin/patients') }}">Patients List</a>
            </li>
            <li><a href="{{ url('admin/patient/add') }}">Add Patient</a></li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    <div id="page-content-wrapper">
        @yield('content')
    </div>
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