<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'Learn with Speed') | Learn By Binge</title>
        <link rel="stylesheet" href="{{asset('css/kube.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body class="lbb-body">
        <div class="container">
            <header class="header hide-sm">
                <section>
                    <div class="brand">
                        <a href="{{route('homepage')}}">Learn By Binge</a>
                    </div>
                </section>

        <nav class="navigation">
            <ul>
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li><b><a href="https://imperavi.com/kube/">Courses</a></b></li>
                <li><a href="https://imperavi.com/blog/">Categories</a></li>
                <li><a href="https://imperavi.com/company/">Tutors</a></li>
                <li>
                    <a data-component="dropdown" data-target="#account-dropdown" href="#">Account <span class="caret down"></span></a>
                </li>
            </ul>
        </nav>
        <div class="dropdown hide" id="account-dropdown">
            <ul>
                @guest
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>
                @endguest
                @auth
                    <li><a href="{{route('logout')}}">Logout</a></li>
                @endauth
            </ul>
        </div>
            </header>
            @yield('content')
        </div>

        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/kube.min.js')}}"></script>
    </body>
</html>
