<!doctype html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>دخول</title>
    <link href="{{asset('css/admin-styles.css')}}" rel="stylesheet" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">



    <style>

        *{
            font-family: 'Tajawal', sans-serif;
            font-weight: 700;
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }


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


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin w-100 m-auto">
    <form method="POST" action="{{route('doctor.login')}}">
        @csrf
        <img src="{{asset('images/hospital-logo.png')}}" alt="" srcset="" width="50px" height="50px">
        <h1 class="h3 mb-3 fw-normal">تسجيل دخول</h1>
        @if (session('error'))
            <h2 class="text-center text-light bg-danger" > {{session('error')}}</h2>
        @endif
        <div class="form-floating">
            <input class="form-control" id="inputEmail" name="email"  placeholder="الايميل" />
            <label for="inputEmail"> الايميل </label>
        </div>
        <div class="form-floating">
            <input class="form-control" id="inputPassword" name="password"  type="password" placeholder="كلمة المرور" />
            <label for="inputPassword">كلمة المرور</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <span class="mx-3">تذكرني</span>
                <input  type="checkbox" value="remember-me">
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-outline-primary " type="submit">دخول</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
</main>



</body>
</html>
