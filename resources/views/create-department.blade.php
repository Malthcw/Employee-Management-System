@extends('partials.main')
@section('content')

    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Add Department</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Department</li>
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
                                <form class="needs-validation" action="{{ route('departments.store') }}" method="post" novalidate>
                                    @csrf
                                    
                                    <div class="row">                                       
                                        <div class="mb-3 col-md-6">
                                            <label for="validationCustom04">Department</label>
                                            <input type="text" class="form-control" name="name" id="validationCustom04" placeholder="Department Name" required>
                                           
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