<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Client;
use App\Models\Bill;

class DashboardController extends Controller
{
    
    
    
    //crear el constructor
    public function __Construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function getDashboard(){
        return view ('admin.dashboard');
    }
}
