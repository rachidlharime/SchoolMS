<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title> {{ $title }} </title>

        <link rel="stylesheet" href={{asset('bootstrap/bootstrap.css')}}>
        <link rel="stylesheet" href={{asset('fontawesome/css/all.css')}}>
        <link rel="stylesheet" href={{asset('css/style.css')}}>
        
    </head>
    <body>

        @yield('content')

        <script src={{asset('jquery/jquery.js')}}></script>
        <script src={{asset('bootstrap/bootstrap.js')}}></script>
        
    </body>
</html>