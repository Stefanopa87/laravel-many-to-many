<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class MainController extends Controller
{
    public function home(){

    $employees = Employee::all();
    // dd($employees);

    return view('pages.home', compact('employees'));
    // RICORDA SEMPRE DI COMPATTARE LE VARIABILI
    }
}
