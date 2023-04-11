<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- login-register31:27-->
<head>
        @include('home.head')
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            @include('home.header')
            @yield('content')
            <!-- Login Content Area End Here -->
            @include('home.footer')
        <!-- jQuery-V1.12.4 -->
        @include('home.script')
    </body>

<!-- login-register31:27-->
</html>