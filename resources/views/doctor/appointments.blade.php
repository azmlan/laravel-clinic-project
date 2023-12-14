@extends('layouts.doctor')
@section('content')
<section class="main-content-user-reservation">
    <div class="container">
        <h1>Appointment Table UI</h1>
        <br>
        <br>

        <table class="table table-user-reservation">
            <thead>
            <tr>
                <th>Patient</th>
                <th>Status</th>
                <th>Appointment</th>
                <th>Phone</th>
                <th>Doctor</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div class="user-info">
                        <div class="user-info__img">
                            <img src="{{asset('/images/hospital-logo.png')}}" alt="User Img">
                        </div>
                        <div class="user-info__basic">
                            <h5 class="mb-0">Kiran Acharya</h5>
                            <p class="text-muted mb-0">28 yrs, Male</p>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="btn btn-success">Consult</span>
                </td>
                <td>
                    <h6 class="mb-0">06:00 PM</h6>
                    <small>2 Feb 2021</small>
                </td>
                <td>
                    <h6 class="mb-0">+91 9876543215</h6>
                    <a href="#!"><small>Contact</small></a>
                </td>
                <td>
                    <h6 class="mb-0">Dr. Ananth</h6>
                </td>
                <td>
                    <div class="dropdown open">
                        <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="triggerId1">
                            <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i> Edit</a>
                            <a class="dropdown-item text-danger" href="#"><i class="fa fa-trash mr-1"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="user-info">
                        <div class="user-info__img">
                            <img src="{{asset('/images/hospital-logo.png')}}" alt="User Img">
                        </div>
                        <div class="user-info__basic">
                            <h5 class="mb-0">Kiran Acharya</h5>
                            <p class="text-muted mb-0">28 yrs, Male</p>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="btn btn-primary">Revisit</span>
                </td>
                <td>
                    <h6 class="mb-0">06:00 PM</h6>
                    <small>2 Feb 2021</small>
                </td>
                <td>
                    <h6 class="mb-0">+91 9876543215</h6>
                    <a href="#!"><small>Contact</small></a>
                </td>
                <td>
                    <h6 class="mb-0">Dr. Ananth</h6>
                </td>
                <td>
                    <div class="dropdown open">
                        <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="triggerId1">
                            <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i> Edit</a>
                            <a class="dropdown-item text-danger" href="#"><i class="fa fa-trash mr-1"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="user-info">
                        <div class="user-info__img">
                            <img src="{{asset('/images/hospital-logo.png')}}" alt="User Img">
                        </div>
                        <div class="user-info__basic">
                            <h5 class="mb-0">Kiran Acharya</h5>
                            <p class="text-muted mb-0">28 yrs, Male</p>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="btn btn-success">Consult</span>
                </td>
                <td>
                    <h6 class="mb-0">06:00 PM</h6>
                    <small>2 Feb 2021</small>
                </td>
                <td>
                    <h6 class="mb-0">+91 9876543215</h6>
                    <a href="#!"><small>Contact</small></a>
                </td>
                <td>
                    <h6 class="mb-0">Dr. Ananth</h6>
                </td>
                <td>
                    <div class="dropdown open">
                        <a href="#" class="px-2" id="triggerId1" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="triggerId1">
                            <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i> Edit</a>
                            <a class="dropdown-item text-danger" href="#"><i class="fa fa-trash mr-1"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection
