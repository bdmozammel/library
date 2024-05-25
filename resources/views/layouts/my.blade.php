<html>
    <head>
    <script src="{{asset('admin/vendor/bootstrap/css/bootstrap.css')}}"></script>
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin/js/charts-home.js')}}"></script>
    <script src="{{asset('admin/js/front.js')}}"></script>
    </head>
    <body>
        <div class="container">
            <div class="col-md-12">
                @yield('content')
</div>
</div>
</body>
</html>