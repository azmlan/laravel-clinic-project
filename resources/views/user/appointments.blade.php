@extends('layouts.user')

@section('content')
    <section class="main-content-user-appointment">
        <div class="container">
            <h1>المواعيد </h1>
            <br>
            <br>


            <div class="table-responsive">
                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>الدكتور </th>
                                        <th>العيادة</th>
                                        <th>الوقت</th>
                                        <th>رقم الموعد</th>
                                        <th> حالة الموعد</th>
                                        <th>المزيد</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($appointments as $appointment)
                                        <tr>
                                            <td>
                                                <div class="user-info">
                                                    <div class="user-info__img">
                                                        <img src="{{asset('/images/hospital-logo.png')}}" alt="User Img">
                                                    </div>
                                                    <div class="user-info__basic">
                                                        <h5 class="mb-0 mx-1">
                                                            {{$appointment->doctor_name}}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">{{$appointment->clinic_name}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">{{$appointment->date}}</h6>
                                                <small>{{$appointment->created_at}}</small>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">{{$appointment->number}}</h6>
                                            </td>
                                            <td>
                                            <span >
                                                @if($appointment->status_id === 1)
                                                    <span class="btn btn-secondary">معلق</span>
                                                @elseif($appointment->status_id === 2 )
                                                    <span class="btn btn-success">مؤكد</span>
                                                @elseif($appointment->status_id === 3 )
                                                    <span class="btn btn-primary">منتهي</span>
                                                @elseif($appointment->status_id === 4 )
                                                    <span class="btn btn-warning">ملغى</span>
                                                @elseif($appointment->status_id === 5 )
                                                    <span class="btn btn-danger">لم تحضر</span>
                                                @endif

                                            </span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown"  id="clickForMoreButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="clickForMoreButton">
                                                        <li><a class="dropdown-w-0 " href="{{route('user.edit.appointment',$appointment->id)}}">تعديل</a></li>
                                                        <li><a class="dropdown-w-0 " href="#">الغاء</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                </table>
            </div>


            </div>

    </section>
@endsection
