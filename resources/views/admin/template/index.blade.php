<?php
/**
 * Created by PhpStorm.
 * User: Quan Tran
 * Date: 3/25/2016
 * Time: 2:50 PM
 */
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JobSeeker Admin</title>
    <!-- Bootstrap Styles-->
    <link href="{{url("public/admin/assets/css/bootstrap.css")}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{url("public/admin/assets/css/font-awesome.css")}}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{url("public/admin/assets/js/morris/morris-0.4.3.min.css")}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{url("public/admin/assets/css/custom-styles.css")}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">

        {{--nav header--}}
        @include('admin.template.header')

        {{--nav side menu--}}
        @include('admin.template.navside')
op
        {{--content page--}}

        <div id="page-wrapper">
            {{--content--}}
            @yield('content')

            {{--footer--}}
            @include('admin.template.footer')

        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->

    <script src="{{url("public/admin/assets/js/jquery-1.10.2.js")}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{url("public/admin/assets/js/bootstrap.min.js")}}"></script>
    <!-- Metis Menu Js -->
    <script src="{{url("public/admin/assets/js/jquery.metisMenu.js")}}"></script>
    <!-- Morris Chart Js -->
    <script src="{{url("public/admin/assets/js/morris/raphael-2.1.0.min.js")}}"></script>
    <script src="{{url("public/admin/assets/js/morris/morris.js")}}"></script>
    <!-- Custom Js -->
    <script src="{{url("public/admin/assets/js/custom-scripts.js")}}"></script>

    @section('bonusJs')
    @show
</body>

</html>