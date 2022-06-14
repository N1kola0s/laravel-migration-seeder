<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>laravel migration seeder</title>


        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
      
    </head>
    <body>
        <header id="site_header"> Sono l'header </header>
        <!-- /#site_header -->
        <main id="site_main">
            @yield('content')
        </main>
        <!-- /#site_main -->
        <footer id="site_footer">Sono  il footer</footer>
        <!-- /#site_footer -->
    </body>

    <script src="{{asset('js/app.js')}}"></script>
</html>