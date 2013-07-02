<!DOCTYPE html>
 <html>
   <head>
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{{ asset('assets/css/bootstrap.css') }}}" rel="stylesheet" media="screen">
    <style>
    	body{padding:10px;}
    </style>
    </head>
    <body>
    <h1>{{ $header }}</h1>

    @yield('content1')

    <p></p>

    @yield('modal1')

    <p></p>

    @yield('navbar1')

    <p></p>

    @yield('buttongroup1')

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="{{{ asset('assets/js/bootstrap/bootstrap.js') }}}"></script>
    </body>
</html>
