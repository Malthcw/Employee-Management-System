<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function pieChart(){

        $result = DB::select("SELECT COUNT(employees.name) as emp_name,departments.name FROM employees LEFT JOIN departments ON departments.id = employees.department_id GROUP BY employees.department_id; ");
        
        $chartData = [];
        foreach ($result as $val) {
            $chartData[] = ['name' => $val->name, 'emp_name' => $val->emp_name];
        }

        return $chartData;
    }
}
