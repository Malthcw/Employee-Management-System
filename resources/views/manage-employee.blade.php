@extends('partials.main')
@section('content')

<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Manage Employee</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Manage Employee</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="/create-employee" class="btn add-btn"><i class="fa-solid fa-plus"></i> Create Employee</a>
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
							<div class="table-responsive">
								<table class="table mb-0 table-striped custom-table">
									<thead>
										<tr>
											<th>No</th>
											<th>Name</th>
											<th>Email</th>
											<th>Position</th> 
											<th>Department</th>
											<th class="text-end">Action</th>
										</tr>
									</thead>

                                    
									<tbody>
                                    @foreach ($employee as $employee)

										<tr>
											<td>{{ $employee->id }}</td>
											<td>{{ $employee->name }}</td>
											<td>{{ $employee->email }}</td>
											<td>{{ $employee->position }}</td>
											<td>{{ $employee->department->name }}</td>
											
											<td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-icons">more_vert</i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee_{{ $employee->id }}">
                                                            <i class="fa-solid fa-pencil m-r-5"></i> Edit
                                                        </a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                            data-bs-target="#delete_employee_{{ $employee->id }}">
                                                            <i class="fa-regular fa-trash-can m-r-5"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
										</tr>

                                        <!-- Edit Modal -->
<div class="modal fade" id="edit_employee_{{ $employee->id }}" tabindex="-1"
    aria-labelledby="edit_employeeLabel_{{ $employee->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit_employeeLabel_{{ $employee->id }}">Edit Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('employees.update', $employee->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="edit_employee_name_{{ $employee->id }}" class="form-label">Name</label>
                        <input type="text" class="form-control" id="edit_employee_name_{{ $employee->id }}" name="name"
                            value="{{ $employee->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_employee_email_{{ $employee->id }}" class="form-label">Email</label>
                        <input type="email" class="form-control" id="edit_employee_email_{{ $employee->id }}" name="email"
                            value="{{ $employee->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_employee_position_{{ $employee->id }}" class="form-label">Position</label>
                        <input type="text" class="form-control" id="edit_employee_position_{{ $employee->id }}"
                            name="position" value="{{ $employee->position }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_employee_department_{{ $employee->id }}" class="form-label">Department</label>
                        <select class="form-control" id="edit_employee_department_{{ $employee->id }}"
                            name="department_id" required>
                            @foreach($departments as $department)
                            <option value="{{ $department->id }}" {{ $employee->department_id == $department->id ? 'selected' : '' }}>
                                {{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Employee</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete_employee_{{ $employee->id }}" tabindex="-1"
    aria-labelledby="delete_employeeLabel_{{ $employee->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete_employeeLabel_{{ $employee->id }}">Delete Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete the employee "{{ $employee->name }}"?</p>
                <form action="{{ route('employees.destroy', $employee->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Employee</button>
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