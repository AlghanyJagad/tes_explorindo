<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">

<head>
    <!-- initiate head with meta tags, css and script -->
    @include('_includes.head')
</head>

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-fixed">

    @yield('content')

    @include('_includes.script')
</body>