<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow is-white" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-start">
                    <a class="navbar-item" href="{{route('home')}}">
                        <img src="{{asset('images/devblog-logo.png')}}" alt="DevBlog" />
                    </a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Learn</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
                </div>
                <div class="navbar-end">
                    @if (!Auth::guest())
                        <a href="" class="navbar-item is-tab">Login</a>
                        <a href="" class="navbar-item is-tab">Signup</a>
                        @else
                        <div class="navbar-item has-dropdown is-active">
                            <a class="navbar-link">
                               Hi Boris
                            </a>

                            <div class="navbar-dropdown">
                                <a class="navbar-item">
                                    <span class="icon"><i class="fa fa-fw fa-user-circle-o"></i></span>
                                    Profile
                                </a>
                                <a class="navbar-item">
                                    <span class="icon"><i class="fa fa-fw fa-bell"></i></span>
                                    Notifications
                                </a>
                                <a class="navbar-item">
                                    <span class="icon"><i class="fa fa-fw fa-cog"></i></span>
                                    Settings
                                </a>
                                <hr class="navbar-divider">
                                <a class="navbar-item">
                                    <span class="icon"><i class="fa fa-sign-out "></i></span>
                                    Logout
                                </a>
                            </div>
                    @endif
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>