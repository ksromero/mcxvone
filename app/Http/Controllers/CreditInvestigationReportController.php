<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditInvestigationReportController extends Controller
{
    public function index()
    {
    	return view('admin.general.creditInvestigationReport');
    }
}
