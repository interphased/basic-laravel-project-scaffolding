<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>App</title>
    <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('/assets/ico/favicon.png') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <link rel="shortcut icon" href="{{ asset('/assets/ico/favicon.ico') }}">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        var paths = {
            'current': '{{ Request::url() }}'
        };
    </script>
</head>
<body>

    @include('partials._nav')

    @include('partials._alert')

    @yield('content')

    @include('partials._footer')

    @yield('modal')

    <!-- Scripts -->
    <script src="{{ asset('/assets/js/vendor.js') }}"></script>
    <script src="{{ asset('/assets/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
