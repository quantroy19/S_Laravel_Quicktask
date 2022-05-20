<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ asset('bower_components/light-bootstrap-dashboard/assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png"
        href="{{ asset('bower_components/light-bootstrap-dashboard/assets/img/favicon.ico') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Quan
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    @section('style')
        @include('layouts.style')
    @show
</head>

<body>
    <div class="wrapper">
        <div class="sidebar"
            data-image="{{ asset('bower_components/light-bootstrap-dashboard/assets/img/sidebar-5.jpg') }}"
            data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            @include('layouts.sidebar')
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            @include('layouts.nav')
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <footer class="footer">
                @include('layouts.footer')
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
@include('layouts.script')

</html>
