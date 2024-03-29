<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<body class="bg-dark pt-5 pb-5">

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    @if (Auth::check() == false)
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href={{ url('/') }} style="color: white">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                                    Category
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    @foreach ($categories as $category)
                                        <li><a class="dropdown-item" href={{ url('/category/1') }}>{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href={{ url('/about_us') }} style="color: white">About Us</a>
                            </li>
                        </ul>
                        <span class="navbar-text" style="margin-right: 20px">
                            <a class="nav-link" href={{ url('/register') }} style="color: white">Sign Up</a>
                        </span>
                        <span class="navbar-text">
                            <a class="nav-link" href={{ route('login') }} style="color: white">Login</a>
                        </span>
                    @else
                        @if (Auth::user()->role == 'Admin')
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href={{ url('/home') }} style="color: white">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: white">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href={{ url('/all_user') }} style="color: white">User</a>
                                </li>
                            </ul>
                            <span class="navbar-text">
                                <a class="nav-link" href={{ url('/logout') }} style="color: white">Logout</a>
                            </span>
                        @elseif(Auth::user()->role == 'User')
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href={{ url('/home') }} style="color: white">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href={{ url('/show_update_profile') }} style="color: white">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href={{ url('/all_article') }} style="color: white">Blog</a>
                                </li>
                            </ul>
                            <span class="navbar-text">
                                <a class="nav-link" href={{ url('/logout') }} style="color: white">Logout</a>
                            </span>
                        @endif
                    @endif

                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>
