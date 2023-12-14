@extends('layouts.website')
@section('content')
    <main class="">
        <div class="book-res-title">
            <h1>حجز موعد </h1>
            <hr>
        </div>
        <!-- {{--main cards--}} -->
        <div
            class="container bg-light p-4  border-radius-3  col-xl-5 col-lg-6 col-10  vh-50 d-flex flex-column justify-content-center align-items-center">
         <span>مرحبا

            @if (Auth::check())
                 {{auth()->user()->name}}
             @else
                 بالضيف
             @endif
             </span>
            <form action="{{route('getDoctorClinic')}}" method="GET">
                @foreach($clinics as $clinic)
                    <input type="submit" id="clinicButton" name="clinic" class=" mx-1 btn" value="{{$clinic->name}}" required/>
                @endforeach
            </form>
            @if(Request::is('appointments/doctor'))
                <form action="{{route('newAppointment')}}" method="POST" class="container bg-light p-4  border-radius-3 " id="newAppointment">
                    @csrf
                    <p disabled>اختر الدكتور</p>
                    <div class="d-flex flex-row">
                        @foreach($clinicDoctors as $clinicDoctor)
                            <div class="col-2 d-flex flex-row mx-4 align-baseline">
                                <input type="radio" id="doctorButton" name="doctorId" value="{{$clinicDoctor->id}}"
                                       required/>
                                <span class="mx-1">{{$clinicDoctor->name}}</span>
                            </div>
                        @endforeach
                    </div>
                    <select class="form-select my-4" aria-label="Default select example">
                        <option selected disabled>احترالتاريخ</option>
                        <option value="1" class="day1">الاحد</option>
                        <option value="2" class="day2">الاثنين</option>
                        <option value="3" class="day3">الثلاثاء</option>
                        <option value="4" class="day4">الاربعاء</option>
                        <option value="5" class="day5">الخميس</option>
                    </select>

                    <button type="submit" class="btn btn-light border border-dark">حجز</button>

                </form>
            @endif
        </div>
        <!-- main about -->


    </main>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>
        $(document).ready(function () {

            // var form =$("#newAppointment");
            // var clinicButton = $("#clinicButton");
            // var doctorButton = "#doctorButton";
            var day1 = ".day1";
            var day2 = ".day2";
            var day3 = ".day3";
            var day4 = ".day4";
            var day5 = ".day5";

            // $(clinicButton).click(function(){
            // How To get the id of the clinic
            // or name the name of it

            // console.log( clinicButton.val());
            //
            //     $.ajax({
            //         url:"/getDoctorClinic",
            //         type: 'get',
            //         dataType: 'json',
            //         success: function(res){
            //             console.log("Response",res);
            //         }
            //     });
            //
            // });

            // Create table rows
            // function createRows(response){
            //     var len = 0;
            //     $('#empTable tbody').empty(); // Empty <tbody>
            //     if(response['data'] != null){
            //         len = response['data'].length;
            //     }
            //
            //     if(len > 0){
            //         for(var i=0; i<len; i++){
            //             var id = response['data'][i].id;
            //             var username = response['data'][i].username;
            //             var name = response['data'][i].name;
            //             var email = response['data'][i].email;
            //
            //             var tr_str = "<tr>" +
            //                 "<td align='center'>" + (i+1) + "</td>" +
            //                 "<td align='center'>" + username + "</td>" +
            //                 "<td align='center'>" + name + "</td>" +
            //                 "<td align='center'>" + email + "</td>" +
            //                 "</tr>";
            //
            //             $("#empTable tbody").append(tr_str);
            //         }
            //     }else{
            //         var tr_str = "<tr>" +
            //             "<td align='center' colspan='4'>No record found.</td>" +
            //             "</tr>";
            //
            //         $("#empTable tbody").append(tr_str);
            //     }
            // }

            // });


        });
    </script>

@endsection
