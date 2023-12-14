<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">

    <title>GR Hospital</title>
    <style>
        [type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}

/* custom styles */

.dinput {
  border: 1px solid #c4c4c4;
  border-radius: 5px;
  background-color: #fff;
  padding: 3px 5px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 190px;
}
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
<!-- {{--Navbar--}} -->

<nav class="navbar navbar-expand-lg sticky-top primary-gradient-bg text-light">
    <div class="container-fluid">

{{--    <i class="fas fa-bars text-light" ></i>--}}
        <button class="btn btn-lg navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-controls="navbarSupportedContent">
                <i class="fas fa-bars text-light" ></i>
        </button>
                <div class="my-2">
                    <span>GR</span>
                    <img src="{{asset('images/hospital-logo.png')}}" alt="" srcset="" width="50px" height="50px">
                </div>


        <div class="collapse navbar-collapse ms-auto  " id="navbarSupportedContent" style="max-width: 400px">
            <ul class="navbar-nav  mb-2 mb-lg-0 justify-content-between " style="min-width: 100%" >
                                <li class="nav-item ">
                                    <a class="nav-link-light active " aria-current="page" href="{{route('main-page')}}">الرئيسية</a>
                                </li>
                                @if (Route::has('login'))
                                    @auth
                                        <li class="nav-item">

                                            <a class="nav-link-light" href="{{route('user.home')}}">لوحة التحكم</a>
                                        </li>
                                    @if(Route::is('user.home'))
                                        <li>
                                            <div class="my-2 d-flex flex-row">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <input  type="submit" value="خروج" class="d-inline btn btn-sm mx-4"/>
                                                </form>
                                            </div>
                                        </li>
                                        @endif
                                    @else
                                        <li class="nav-item">
                                            <a class="nav-link-light" href="{{route('register')}}">تسجيل</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link-light" href="{{route('login')}}">دخول</a>
                                        </li>
                                    @endauth
                                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')


<footer class="mt-auto pt-4">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © جميع الحقوق محفوظة
        <a class="text-dark" ><h5 class="d-inline">GR Hospital</h5></a>
    </div>
    <!-- Copyright -->
</footer>
</body>
</html>
