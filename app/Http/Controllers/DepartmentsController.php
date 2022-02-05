<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentsController extends Controller
{
    public function index()
    {
        $departments = DB::select('select department_id, department_name from departments order by substring(department_id, 2)');
        return view('departments.index', ['departments' => $departments]);
    }
}
