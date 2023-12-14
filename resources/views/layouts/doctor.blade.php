<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/appointment-style.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">

    <title>لوحة التحكم </title>
</head>
<body >

<header class="navbar navbar-dark sticky-top bg-dark flex-wrap p-2 shadow justify-content-lg-around justify-content-sm-between justify-content-start">

    <button class="navbar-toggler  d-md-none collapsed bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="col-sm-3 col-12">
        <a class="navbar-brand  me-0 px-0 fs-6" href="#">مستشفى المبرمجين</a>
    </div>
    <div class="col-10 col-sm-6  rounded-0 border-0">
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="بحث " aria-label="Search">
    </div>

    <div class="navbar-nav">
        <div class="nav-item text-nowrap">

            <form  method="POST" action="{{route('doctor.logout')}}">
            <form>
                @csrf
                <input type="submit" class="d-none d-sm-inline  text-center text-light btn btn-outline-dark " value="خروج"/>
            </form>
        </div>
    </div>

</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <div class="dropdown pb-4">

                        <a href="#" class="  d-flex align-items-start text-dark text-decoration-none  rounded-1 w-100 py-2 " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class=" d-inline text-dark-hover">
                                <i class="fa-sharp fa-regular fa-user mx-1 fs-4 "></i>
                                <h3 class="d-inline   text-center m-0 ">Doctor Name </h3>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow text-center">
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="d-flex align-items-center">
                                @auth
                                    <form method="POST" action="{{ route('doctor.logout') }}" class="dropdown-item ">
                                    <form  class="dropdown-item ">
                                        @csrf
                                        <input type="submit" value="خروج" class="btn btn-sm  text-light "/>
                                    </form>
                                @endauth
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file" class="align-text-bottom"></span>
                            Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart" class="align-text-bottom"></span>
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users" class="align-text-bottom"></span>
                            Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                            Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers" class="align-text-bottom"></span>
                            Integrations
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                    <span>Saved reports</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle" class="align-text-bottom"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar" class="align-text-bottom "></span>
                        This week
                    </button>
                </div>
            </div>
            <h2>Section title</h2>
            @yield('content')

        </main>

    </div>
</div>
</body>
</html>
