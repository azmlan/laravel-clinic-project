@extends('layouts.user')

@section('content')
    <section >
        <div class="container ">
                @if(\Illuminate\Support\Facades\Session::has('validationFails'))
                    <h3 class="text-danger ">{{\Illuminate\Support\Facades\Session::get('validationFails')}}</h3>
                @endif
                    @if(\Illuminate\Support\Facades\Session::has('userUpdate'))
                        <h3 class="text-success ">{{\Illuminate\Support\Facades\Session::get('userUpdate')}}</h3>
                    @endif
            <div class="row d-flex justify-content-center align-items-center ">
                <form class="col-xl-9"  id="userUpdateForm" action="{{route('user.update',auth()->id())}}" method="POST">
@csrf
                    <div class="card" style="border: none;">
                        <div class="card-body">

                            <div class="row align-items-center pt-4 pb-3">
                                <div class="col-md-3 ps-5">


                                    <h6 class="mb-0">الاسم </h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input type="text" class="form-control form-control-lg" placeholder="{{$user->name}}" value="{{$user->name}}" name="name"/>

                                </div>
                            </div>

                            <hr class="mx-n3">

                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">الإيميل</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input type="text" class="form-control form-control-lg" placeholder="{{$user->email}}" value="{{$user->email}}" name="email"/>

                                </div>
                            </div>

                            <hr class="mx-n3">

                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">اسم المستخدم</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input class="form-control" placeholder="{{$user->username}}" value="{{$user->username}}" name="username"/>

                                </div>
                            </div>

                            <hr class="mx-n3">

                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">كلمة المرور</h6>

                                </div>
                                <div class="col-md-9 pe-5">
                                    <a href="{{route('user.updatePassword')}}"  class="btn bg-warning dark-hover text-light">تغيير كلمة المرور</a>
                                </div>
                            </div>

                            <hr class="mx-n3">

                            <div class="px-5 py-4">
                                <button type="submit"  class="btn primary-bg dark-hover text-light">تحديث</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
