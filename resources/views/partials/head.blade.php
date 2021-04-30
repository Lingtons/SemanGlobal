<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{asset('img/favicon.ico')}}" rel="shortcut icon" />

    <link href="https://fonts.googleapis.com/css?family=Sarabun:300,300i,400,400i,500,500i,600,600i,700,700i&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
</head>
