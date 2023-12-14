@extends('layouts.user')

@section('content')
    <form class="col-xl-9"  id="userUpdateForm" method="POST">

        <div class="card" style="border: none;">
            <div class="card-body">


                <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5 d-flex justify-content-between align-items-center ">
                        <h6 class="mb-0">العيادة</h6>
                        <span disabled class="fw-lighter  text-muted">{{$appointments->clinic_name}}</span>
                    </div>
                    <div class="col-md-9 pe-5">
                        <form action="{{route('getDoctorClinic')}}" method="GET">
                            @foreach($clinics as $clinic)
                                <input type="submit"  id="clinicButton" name="clinic" class="mx-1 btn"  value="{{$clinic->name}}" required/>
                            @endforeach
                        </form>


                    </div>
                </div>

                <hr class="mx-n3">
                <div class="row align-items-center pt-4 pb-3">



                    <div class="col-md-3 ps-5">


                        <h6 class="mb-0">الدكتور </h6>
                    </div>
                    <div class="col-md-9 pe-5">

                        <select name="doctor" class="form-select my-4" aria-label="Default select example" >
                            <option selected disabled>{{$appointments->doctor_name}}</option>
                            <option  value="1" class="day1">الاحد</option>
                            <option value="2" class="day2">الاثنين</option>
                            <option value="3" class="day3">الثلاثاء</option>
                            <option value="4" class="day4">الاربعاء</option>
                            <option value="5" class="day5">الخميس</option>
                        </select>
                    </div>
                </div>


                <hr class="mx-n3">

                <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">

                        <h6 class="mb-0">التاريخ</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                        <select name="date" class="form-select my-4" aria-label="Default select example" >
                            <option selected disabled>{{$appointments->date}}</option>
                            <option  value="1" class="day1">الاحد</option>
                            <option value="2" class="day2">الاثنين</option>
                            <option value="3" class="day3">الثلاثاء</option>
                            <option value="4" class="day4">الاربعاء</option>
                            <option value="5" class="day5">الخميس</option>
                        </select>
                    </div>
                </div>

                <hr class="mx-n3">

                <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
                        <h6 class="mb-0">الغاء الموعد</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                        <a href="{{route('user.cancel.appointment',$appointments->id)}}"  class="btn bg-warning dark-hover text-light">الغاء الموعد</a>
                    </div>
                </div>

                <hr class="mx-n3">

                <div class="px-5 py-4">
                    <button type="submit"  class="btn primary-bg dark-hover text-light">تحديث</button>
                </div>

            </div>
        </div>

    </form>
@endsection
