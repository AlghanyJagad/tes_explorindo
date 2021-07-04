<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">

<head>
    <!-- initiate head with meta tags, css and script -->
    @include('_includes.head')
</head>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-fixed">
    @include('_includes.sidebar')

    @yield('content')

    @include('_includes.footer')
    @include('_includes.script')
</body>