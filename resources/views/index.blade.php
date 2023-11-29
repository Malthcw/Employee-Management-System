@extends('partials.main')
@section('content')

<!-- Page Content -->
<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Welcome {{ auth()->user()->name }}!</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-md-6 ">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa-solid fa-users"></i></span>
                    <div class="dash-widget-info text-center">
                        <h3>{{ $employeeCount }}</h3>
                        <span>Total Employees</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6  ">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa-solid fa-building-user"></i></span>
                    <div class="dash-widget-info text-center">
                        <h3>{{ $departmentCount }}</h3>
                        <span>Total Departments</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="text-center col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Employee Department Chart</h3>
                            <div id="employeeChart">@include('pie')</div>
                        </div>
                    </div>
                </div>
                <div class="text-center col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Admin Details</h3>
                            <form >
                                @csrf
                            
                                <div class="mb-3">
                                    <label class="custom-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ auth()->user()->name }}" readonly>
                                                </div>
                                    <div class="mb-3">
                                        <label class="custom-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ auth()->user()->email }}" readonly>
                                                </div>
                                
                    
                    
                            </form>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>     
    </div>

</div>
<!-- /Page Content -->

</div>
<!-- /Page Wrapper -->

@endsection