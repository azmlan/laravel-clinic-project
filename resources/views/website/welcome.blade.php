@extends('layouts.website')

@section('content')
<!-- {{--Header--}} -->
@if(\Illuminate\Support\Facades\Session::has('newAppointment'))
<div class="bg-success opacity-50">
    <h1 class="text-white ">{{\Illuminate\Support\Facades\Session::get('newAppointment')}}</h1>
</div>
@endif
<header class="primary-gradient-bg pt-5 text-white">
    <div class="top-header m-5 ">
        <!-- {{--Header Title--}} -->
        <div class="header-title   d-flex flex-row justify-content-between col-lg-12 col-sm-12" >
            <div class="header-title-right ">
                <h5 class="display-6"> GR Hospital </h5>
                <h3 class="display-4">لصحة وعناية افضل </h3>
            </div>
            <div class="header-title-left m-4">
                <img src="{{asset('images/hospital-logo.png')}}" alt="" width="70px" height="70px">
            </div>
        </div>
        <!-- {{--Header Middle --}} -->
        <div class="header-middle ">
            <p class="font20 m-5">
                Pinned down in deep snow and running out of food, veteran thru-hiker Stephen “Otter” Olshansky scraped his way to a campground latrine, holed up inside, and prayed for help to arrive.
                Pinned down in deep snow and running out of food, veteran thru-hiker Stephen “Otter” Olshansky scraped his way to a campground latrine, holed up inside, and prayed for help to arrive.
            </p>
        </div>
        <!-- {{--Header bottom--}} -->
        <div class="header-bottom  row justify-content-between  m-5  col-lg-6    ">
            <a href="{{route('appointment')}}" class="col-lg-4 col-md-6 col-sm-12" > <button type="button" class="col-12 btn btn-light btn-lg btn-block   my-3">حجز موعد  </button></a>
             <a href="#scroll-clinics" class="col-lg-6 col-md-6 col-sm-12" >
                <button type="button" class="col-12 btn btn-outline-light btn-lg btn-block   my-3">العيادات</button>
            </a>
        </div>
    </div>
</header>

<main class="">
    <div class="main-title" id="scroll-clinics">
        <h1> </h1>
        <hr>
    </div>
    <!-- {{--main cards--}} -->
    <div class="main-middle container  " >
        <div class="card-wrapper row  m-auto">

            <div class="card-container  col-lg-6 col-md-6 col-sm-6 col-12 my-3 ">
                <div class="card card-bg" >
                    <img src="{{asset('images/hospital-logo.png')}}" alt="" width="70px" height="70px">
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title">عيادة العين</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-light">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="card-container  col-lg-6 col-md-6 col-sm-6 col-12 my-3 ">
                <div class="card card-bg" >
                    <img src="{{asset('images/hospital-logo.png')}}" alt="" width="70px" height="70px">
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title">عيادة الجلدية</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-light">Go somewhere</a>
                    </div>
                </div>
            </div>


            <div class="card-container  col-lg-6 col-md-6 col-sm-6 col-12 my-3 ">
                <div class="card card-bg" >
                    <img src="{{asset('images/hospital-logo.png')}}" alt="" width="70px" height="70px">
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title">عيادة التجميل</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-light">Go somewhere</a>
                    </div>
                </div>
            </div>


            <div class="card-container  col-lg-6 col-md-6 col-sm-6 col-12 my-3 ">
                <div class="card card-bg" >
                    <img src="{{asset('images/hospital-logo.png')}}" alt="" width="70px" height="70px">
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title">عيادة الاصابع </h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-light">Go somewhere</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    </div>
</main>
@endsection
