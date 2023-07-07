<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function Index()
    {
        return view('patients/Patient_Index_Page');
    }
}
