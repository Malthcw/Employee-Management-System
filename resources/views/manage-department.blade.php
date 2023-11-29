@extends('partials.main')
@section('content')


<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Department</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Department</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="/create-department" class="btn add-btn"><i class="fa-solid fa-plus"></i> Add Department</a>
							</div>
                      
						</div>
                        
					</div>
					<!-- /Page Header -->
					
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif		
					<div class="row">
						<div class="col-md-12">
							<div>
								<table class="table mb-0 table-striped custom-table datatable">
									<thead>
										<tr>
											<th class="width-thirty">#</th>
											<th>Department Name</th>
											<th class="text-end">Action</th>
										</tr>
									</thead>
									<tbody>

                                        @foreach ($departments as $data )
                                   
										<tr>
											<td>{{$data->id}}</td>
											<td>{{$data->name}}</td>
											<td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-icons">more_vert</i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_department_{{ $data->id }}"><i
                                                                class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                            data-bs-target="#delete_department_{{ $data->id }}"><i class="fa-regular fa-trash-can m-r-5"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </td>
										</tr>

                                        <div class="modal fade" id="edit_department_{{ $data->id }}" tabindex="-1" aria-labelledby="edit_departmentLabel_{{ $data->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="edit_departmentLabel_{{ $data->id }}">Edit Department</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('departments.update', $data->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="mb-3">
                                                                <label for="edit_department_name_{{ $data->id }}" class="form-label">Department Name</label>
                                                                <input type="text" class="form-control" id="edit_department_name_{{ $data->id }}" name="name"
                                                                    value="{{ $data->name }}" required>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Update Department</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="delete_department_{{ $data->id }}" tabindex="-1" aria-labelledby="delete_departmentLabel_{{ $data->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="delete_departmentLabel_{{ $data->id }}">Delete Department</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to delete the department "{{ $data->name }}"?</p>
                                                        <form action="{{ route('departments.destroy', $data->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete Department</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
@endsection