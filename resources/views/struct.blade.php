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
            .modal {
                z-index: 999999999 !important;
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
                            <a class="nav-link dropdown-toggle" href="#"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                {{ Auth::user()->username.' | ' }}
                                {{ (Auth::user()->isAdmin !== null) ? 'Admin' : '' }}
                                {{ (Auth::user()->isTeacher !== null) ? 'Teacher' : '' }}
                                {{ (Auth::user()->isStudent !== null) ? 'Student' : '' }}
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item text-danger" 
                                    data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt mr-2"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </nav>

                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                You're logging out . Are you sure ?
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-footer">
                            <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                            <a href="{{ route('logout') }}" class="btn btn-primary"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>

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
                
        </script>
        
    </body>
</html>