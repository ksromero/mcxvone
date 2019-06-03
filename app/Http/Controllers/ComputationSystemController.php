<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputationSystemController extends Controller
{
    public function index(){
    	return view('admin.general.computationSystem');
    }
}
