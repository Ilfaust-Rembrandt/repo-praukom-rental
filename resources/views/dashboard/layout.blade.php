<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <script src="https://kit.fontawesome.com/06d7664f3c.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Skyline Wheels</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link align-middle px-0">
                        <i class="fa-solid fa-user"></i> <span>Logout</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('adminboard')}}" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-gauge"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                    </li>
                    <li>
                        <a href="{{route('servisboard')}}" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-car"></i> <span class="ms-1 d-none d-sm-inline">Servis</span></a>
                    </li>
                    <li>
                        <a href="{{route('logs')}}" class="nav-link px-0 align-middle ">
                            <i class="fa-solid fa-table"></i> <span class="ms-1 d-none d-sm-inline">Logs</span></a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col py-3">
            @yield('content')
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>