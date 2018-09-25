<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/dashboard.css') }}">
    @yield('styles')
</head>
<body>
@include('partials.header')
@if (session('error_message'))
<div class="alert alert-danger text-center">
    {{ session('error_message') }}
</div>
@endif
@yield('content')

<script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
@yield('scripts')
</body>
</html>