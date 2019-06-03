<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerListModuleController extends Controller
{
    public function index()
    {
    	return view('admin.general.customerListModule');
    }
}
