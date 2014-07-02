<!doctype html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/portfoliostyle.css" rel="stylesheet">
</head>
	@include('header')
<body>
    <div class="container">
        @yield('content')
        @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif
    </div>
    @include('footer')
</body>
</html>