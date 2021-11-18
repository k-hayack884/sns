<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    // add
    public function index()
    {
        $employees = DB::table('employees')->get();

        return view('employees.index', ['employees' => $employees]);
    }
}
