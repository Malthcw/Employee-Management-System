<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;




class HomeController extends Controller
{   
    public function index()
    {
        $employeeCount = Employee::count();
        $departmentCount = Department::count();

        $chartData = app(ChartController::class)->pieChart();

        return view('index', compact('employeeCount', 'departmentCount','chartData'));
    }

  
    public function create_emp(){

        $departments = Department::all();
        return view('create-employee',compact( 'departments'));
    }
    public function manage_emp(){
        $departments = Department::all();
        $employee = Employee::all();
        return view('manage-employee',compact( 'employee','departments'));
    }

    public function manage_department(){
        $departments = Department::all();
        return view('manage-department', compact('departments'));
    }
    public function create_department(){
        return view('create-department');
    }
}
