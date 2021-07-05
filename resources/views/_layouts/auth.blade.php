<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">

<head>
    <!-- initiate head with meta tags, css and script -->
    @include('_includes.head')
</head>

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-fixed">

    @yield('content')

    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/moment.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/app-invoice-list.min.js') }}"></script>
    <!-- END: Page JS-->


    <script>
    $(window).on('load',  function(){
        if (feather) {
        feather.replace({ width: 14, height: 14 });
        }
    })
    </script>
</body>