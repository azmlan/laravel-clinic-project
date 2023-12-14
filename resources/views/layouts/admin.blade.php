<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>لوحة التحكم </title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script  src="{{asset('js/bootstrap.min.js')}}"></script>
    <script  src="{{asset('js/jquery.min.js')}}"></script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>



</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2 shadow justify-content-end">


    <div class="d-flex col-md-2 col-12 justify-content-between p-2">
    <button class="navbar-toggler  d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="عرض/إخفاء لوحة التنقل">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{route('admin.index')}}">اسم الشركة</a>
    </div>

    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="بحث" aria-label="بحث">

    <div class="flex-shrink-0 dropdown col-1 d-flex justify-content-center p-2">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <a class=" dropdown-toggle text-light" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user fa-fw text-light"></i></a>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
            <li class="text-center dropdown-item"><a class="text-dark text-light-hover text-decoration-none btn-sm" href="#">تفاصيل </a></li>
            <li class=""><hr class="dropdown-divider"></li>
            <li>
                <form  method="POST" action="{{route('admin.logout')}}">
                    @csrf
                    <input type="submit" class="btn btn-sm dropdown-item" value="خروج"/>
                </form>
            </li>
        </ul>
    </div>



</header>

<div class="container-fluid">

    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">

                <h5 class="mb-5">
                    <a class="nav-link text-dark" href="{{route('admin.index')}}">
                        لوحة التحكم
                    </a>
                </h5>

                    <a class="nav-link text-dark collapse d-flex flex-row " href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                        <span class="mx-2">المستخدمين</span>
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class=" " id="collapseUsers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav d-flex flex-column">
                            <a class="nav-link " href="{{route('admin.admins')}}">المشرفين</a>
                            <a class="nav-link" href="{{route('admin.doctors')}}">الدكاترة</a>
                            <a class="nav-link" href="{{route('admin.users')}}">العملاء</a>
                        </nav>
                    </div>


                <a class="nav-link text-dark collapsed d-flex flex-row" href="#" data-bs-toggle="collapse" data-bs-target="#collapseClinics" aria-expanded="false" aria-controls="collapseClinics">
                        <span class="mx-2">العيادات</span>
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class=" " id="collapseClinics" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav d-flex flex-column">
                            <a class="nav-link" href="{{route('admin.clinic.eyes')}}">العيون</a>
                            <a class="nav-link" href="{{route('admin.clinic.dermatology')}}" >الجلدية</a>
                            <a class="nav-link " href="{{route('admin.clinic.dentist')}}" >الاسنان</a>
                            <a class="nav-link " href="{{route('admin.clinic.beauty')}}">التجميل</a>
                        </nav>
                    </div>


                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                    <span>المزيد </span>
                    <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
                        <span data-feather="plus-circle" class="align-text-bottom"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.appointment')}}">
                            الحجوزات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.major')}}">
                            التخصصات الطبية
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100">
            ContentYielded Here
            @yield('content')
        </main>

            </div>
            </div>
<footer class="py-4 bg-light mt-auto ">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2022</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
