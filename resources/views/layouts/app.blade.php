<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ChoreTime') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-4.3.1-dist/css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-4.3.1-dist/css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('datepicker/jquery-ui.css') }}" rel="stylesheet">

</head>
<body style="background-color: black;  margin-top: 0px!important">
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="margin: 50px;border: solid black">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('Dashboard') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('appointment') }}">{{ __('Appointment') }}</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutUs') }}">{{ __('About Us') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('userInfoEdit') }}">Setting</a>
                                <a class="dropdown-item" href="{{ route('userAppointmentList') }}">{{ __('Appointment History') }}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<!-- jquery-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('datepicker/datepicker.js')}}"></script>

<!-- Bootstrap JS-->
<script src="{{asset('bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>


@yield('jsScript')
</body>
</html>
