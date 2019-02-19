<html>

    <head>

        <title>Exam Passers - @yield('title')</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}" ></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" crossorigin="anonymous">

        <script src="{{ URL::asset('js/bootstrap.min.js') }}" ></script>

 
     </head>

    <body>
 
        <div class="container">

            @yield('content')

        </div>

    </body>

  
</html>