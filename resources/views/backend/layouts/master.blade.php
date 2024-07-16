<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('backend/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/js/select.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" />
</head>
<body class="with-welcome-text">
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">

        </div>
    </div>
    @include('backend.layouts.topmenu')

    <div class="container-fluid page-body-wrapper">

    @include('backend.layouts.sidemenu')

        @yield('content')
    </div>
</div>
<script src="{{asset('backend/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('backend/vendors/chart.js/chart.umd.js')}}"></script>
<script src="{{asset('backend/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{asset('backend/js/off-canvas.js')}}"></script>
<script src="{{asset('backend/js/template.js')}}"></script>
<script src="{{asset('backend/js/settings.js')}}"></script>
<script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('backend/js/todolist.js')}}"></script>
<script src="{{asset('backend/js/jquery.cookie.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/js/dashboard.js')}}"></script>
</body>
</html>