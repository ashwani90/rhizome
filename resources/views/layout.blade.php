<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>@yield('title', 'Studio Rhizome')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="Litho is a clean and modern design, BootStrap 5 responsive, business and portfolio multipurpose HTML5 template with 37+ ready homepage demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="assets/css/font-icons.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/theme-vendors.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
        
    </head>
    <body class="h-100">
    @include('components.header')
    <div class="main-content">
    @include('components.carousel')
    


        <!-- start page loader -->
        <div class="page-loader"></div>
        <!-- end page loader -->
        <!-- start header -->
        <!-- end header -->
        <!-- start slider section -->
        @yield('content')
</div>
        @include('components.footer')
        <!-- end slider section -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/theme-vendors.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
        
    </body>
</html>
