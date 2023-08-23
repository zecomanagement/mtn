<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/vendors/css/vendors.min.css')}}>
    {{--<link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/vendors/css/charts/apexcharts.css')}}>--}}
    {{--<link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/vendors/css/extensions/toastr.min.css')}}>--}}
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/bootstrap.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/bootstrap-extended.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/colors.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/components.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/themes/dark-layout.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/themes/bordered-layout.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/themes/semi-dark-layout.css')}}>

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/pages/dashboard-ecommerce.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/plugins/charts/chart-apex.css')}}>
    {{--<link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/plugins/extensions/ext-component-toastr.css')}}>--}}
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href={{asset('backend/assets/css/style.css')}}>
    <!-- END: Custom CSS-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css">

    @yield('custom_css')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('admin.body.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('admin')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src={{asset('backend/app-assets/vendors/js/vendors.min.js')}}></script>
    <!-- BEGIN Vendor JS-->

 
    <!-- BEGIN: Theme JS-->
    <script src={{asset('backend/app-assets/js/core/app-menu.js')}}></script>
    <script src={{asset('backend/app-assets/js/core/app.js')}}></script>
    <!-- END: Theme JS-->

 
    @yield('custom_js')

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session:: get('alert-type', 'info')}}"
        switch(type){
          case 'info':
          toastr.info(" {{ Session::get('message') }} ");
          break;
    
          case 'success':
          toastr.success(" {{ Session::get('message') }} ");
          break;
    
          case 'warning':
          toastr.warning(" {{ Session::get('message') }} ");
          break;
    
          case 'error':
          toastr.error(" {{ Session::get('message') }} ");
          break;
        }
        @endif
    </script>
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>