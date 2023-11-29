<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::truncate();

      
        Employee::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'position' => 'Developer',
            'department_id' => 1, 
        ]);

        Employee::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'position' => 'Manager',
            'department_id' => 2, 
        ]);
        Employee::create([
            'name' => 'Jane Doe',
            'email' => 'jane456@example.com',
            'position' => 'Designer',
            'department_id' => 1, 
        ]);
        Employee::create([
            'name' => 'Jane Doe',
            'email' => 'jane123@example.com',
            'position' => 'Intern',
            'department_id' => 2, 
        ]);
    }
}
