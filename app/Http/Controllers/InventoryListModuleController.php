<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryListModuleController extends Controller
{
    public function index(){
    	return view('admin.general.inventoryListModule');
    }
}
