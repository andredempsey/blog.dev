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
<body>
	<div class="container">
	@include('header')
    @yield('content')
    @include('footer')
</body>
</html>