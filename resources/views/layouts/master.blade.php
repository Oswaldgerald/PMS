<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
@include('pages.head')
<body class="hold-transition skin-blue sidebar-mini">
@include('pages.header_o')
 <div class="wrapper">

       @include('pages.sidebar')

    <div class="content-wrapper">
        <!-- Main content -->
        <div class="container">
            @yield('content')

        </div>
    </div>
</div>
<!-- ./wrapper -->
@include('pages.footer')

<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('bower_components/admin-lte/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('bower_components/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('bower_components/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('bower_components/chart.js/Chart.js')}}"></script>
<script src="{{asset('bower_components/admin-lte/dist/js/pages/dashboard2.js')}}"></script>
<script src="{{asset('bower_components/admin-lte/dist/js/demo.js')}}"></script>
{{--<script src="{{asset('js/app.js')}}"></script>--}}

</body>
</html>
