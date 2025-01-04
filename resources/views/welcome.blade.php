<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    @vite('resources/sass/app.scss')
</head>

<body class="bg-dark">
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex">
                <ul class="nav-bar-nav d-flex align-items-center mb-2 mb-md-0 fs-5 ms-auto" style="gap: 1rem;">
                    <li class="nav-item">
                        <a href="{{ route('dashboard-admin.index') }}" class="btn btn-light">
                            Login
                        </a>
                    </li>
                    <li class="list-inline-item text-light">|</li>
                    {{-- <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-light">
                            Sign In
                        </a>
                    </li> --}}
                    <li class="list-inline-item text-light">|</li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-light">
                            Register
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- HERO PART 1 --}}
    <div class="px-4 py-5 my-5 text-center border border-light rounded-5 m-5">
        <h1 class="display-5 fw-bold text-light">Welcome to Sistem Perpustakaan</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 text-light">Your trusted digital library management system. Here, you can easily access
                and manage
                a wide range of resources, from books to multimedia content, all designed to enhance your learning and
                research experience.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="{{ route('login') }}" class="btn btn-light btn-lg px-4 gap-3 rounded-5">
                    Learn More
                </a>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
