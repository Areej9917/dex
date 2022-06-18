<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Customer;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function __construct(){
        View::share([
            'mainContentHeading' => 'Dashboard'
        ]);
    }

    public function index(){
    
        return view('dashboard');
    }
    public function awb_entry(){
    
        return view('awb.awb_entry');
    }



}
