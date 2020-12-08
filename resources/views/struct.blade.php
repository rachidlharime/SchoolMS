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

        <style>
            
            table td {
                vertical-align: middle !important;
            }
        </style>

    </head>
    <body>

        
        <div class="wrapper">
            @include('layouts.sidebar')

            <div id="content">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-justify"></i>
                    <i class="fas fa-times"></i>
                </button> 
                
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('logout') }}" 
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ Auth::user()->username.' | ' }}
                                {{ (Auth::user()->isAdmin !== null) ? 'Admin' : '' }}
                                {{ (Auth::user()->isTeacher !== null) ? 'Teacher' : '' }}
                                {{ (Auth::user()->isStudent !== null) ? 'Student' : '' }}
                                <i class="fas fa-sign-out-alt ml-2"></i>
                            </a>
                        </li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </nav>

                <div class="container mt-5">

                    @include('layouts.modal')

                    @if (session()->has('msg'))
                    @include('layouts.toast')
                    @endif

                    @yield('content')

                </div>

            </div>
        </div>
        
        <script src={{asset('jquery/jquery.js')}}></script>
        <script src={{asset('bootstrap/bootstrap.js')}}></script>
        <script src={{asset('js/collapse.js')}}></script>
        <script src={{asset('js/modal.js')}}></script>
        <script src={{asset('js/toast.js')}}></script>
        <script src={{asset('js/validate.js')}}></script>

        <script>
                // function filter(){

                //     var xmlhttp = new XMLHttpRequest();
                //     // xmlhttp.onreadystatechange = function() {
                //     //     if (this.readyState == 4 && this.status == 200) {
                //     //         // document.getElementById("txtHint").innerHTML = this.responseText;
                //     //     }
                //     // };
                //     // xmlhttp.open("GET", $('#filterForm').attr('action')+'/'+this.value );
                //     // xmlhttp.send();

                //     console.log($('#filterForm').attr('action')+'/'+this.value)
                // }

        </script>
        
    </body>
</html>