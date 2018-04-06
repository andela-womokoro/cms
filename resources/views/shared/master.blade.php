<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Content Management System</div>
                <p>
                    @if(Auth::user())
                        <a href="/content/view">Contents</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="/content/new">Create New</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="auth/logout">Logout</a>
                    @else
                        <a href="/">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="auth/register">Register</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="auth/login">Login</a>
                    @endif
                </p>
                @yield('content')

                @if(isset($alert))
                    <script>swal('Yo!', '{!! $alert !!}');</script>
                @endif
            </div>
        </div>
    </body>
</html>
