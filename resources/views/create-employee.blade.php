@extends('partials.main')
@section('content')

    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Create Employee</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Employee</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
            
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm">
                                <form class="needs-validation" action="{{ route('employees.store') }}" method="post" novalidate>
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="validationCustom01">Name</label>
                                            <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Employee Name" required>
                                           
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="validationCustom02">Email</label>
                                            <input type="email" class="form-control" id="validationCustom02" placeholder="Email" name="email" required>
                                        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="validationCustom03">Position</label>
                                            <input type="text" class="form-control" name="position" id="validationCustom03" placeholder="Ex:-Manager" required>
                                          
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="validationCustom04">Department</label>
                                            <select class="form-control" name="department_id" id="validationCustom04" required>
                                                @foreach($departments as $department)
                                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                @endforeach
                                            </select>
                                          
                                        </div>
                                        
                                    </div>
                                
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- /Row -->
	

@endsection