<html>

    <head>

        <title>Exam Passers - @yield('title')</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" crossorigin="anonymous">
       

        <script src="{{ URL::asset('js/jquery-3.2.1.slim.min.js') }}"  crossorigin="anonymous"></script>

        <script src="{{ URL::asset('js/popper.min.js') }}" crossorigin="anonymous"></script>
        
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"  crossorigin="anonymous"></script>
             
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery.dataTables.min.css') }}">

        <script src="{{ URL::asset('js/jquery.dataTables.min.js') }}" ></script>

        <script src="{{ URL::asset('js/vue.js') }}" ></script>
   
        <script src="{{ URL::asset('js/vue-axios.min.js') }}" ></script>

        <script src="{{ URL::asset('js/index.js') }}" ></script>

        <script type="text/javascript">
            
            $(document).ready( function () {
              
               $('#exam_passers_table').DataTable({
                
                    "pageLength": 50
                
                });

               $('#school_lists ').DataTable({
                
                    "order": 1
                
                });

            } );

          </script>

    </head>

    <body>

        @section('sidebar')
             
        @show

        <div class="container">

            @yield('content')

        </div>

    </body>


</html>
