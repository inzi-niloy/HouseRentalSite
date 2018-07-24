<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/admin/dashboard/')}}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/admin/dashboard/')}}/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('/admin/dashboard/')}}/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('/admin/dashboard/')}}/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{asset('/admin/dashboard/')}}/assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('/admin/dashboard/')}}/assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('/admin/dashboard/')}}/assets/css/themify-icons.css" rel="stylesheet">

    {{--//-----------------ck editor-------------------------------//--}}

    <script src="{{asset('/')}}/admin/ckeditor/ckeditor.js"></script>
    <script src="{{asset('/')}}/admin/ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="{{asset('/')}}/admin/ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="{{asset('/')}}/admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

</head>
<body>

    @include('admin.home.includes.sidebar')
    @include('admin.home.includes.menu')

    @yield('body')

    @include('admin.home.includes.footer')

    </div>
</div>
    <script>
        initSample();
    </script>

</body>

<!--   Core JS Files   -->
<script src="{{asset('/admin/dashboard/')}}/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="{{asset('/admin/dashboard/')}}/assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{asset('/admin/dashboard/')}}/assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="{{asset('/admin/dashboard/')}}/assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('/admin/dashboard/')}}/assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{asset('/admin/dashboard/')}}/assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('/admin/dashboard/')}}/assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        $.notify({
            icon: 'ti-gift',
            message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

        },{
            type: 'success',
            timer: 4000
        });

    });
</script>

</html>
