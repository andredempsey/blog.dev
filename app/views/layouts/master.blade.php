<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>AaIT Innovations, LLC</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="/css/leaflet.css" />

        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/pagedown.css">
        <link href="/img/aaitlogo_24x24.png" rel="shortcut icon" type="image/x-icon">

    </head>
<body>
        @include('header')
        @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif
        @yield('content')
        @include('footer')
     <!-- Javascripts -->
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="/js/jquery.fitvids.js"></script>
        <script src="/js/jquery.sequence-min.js"></script>
        <script src="/js/jquery.bxslider.js"></script>
        <script src="/js/main-menu.js"></script>
        <script src="/js/template.js"></script>
        <script src="/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        @yield('bottom-script')
</body>
</html>