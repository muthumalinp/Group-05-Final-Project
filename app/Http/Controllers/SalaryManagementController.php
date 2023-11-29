<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class SalaryManagementController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('project.owner.salary-management.index', compact('employees'));
    }
}
