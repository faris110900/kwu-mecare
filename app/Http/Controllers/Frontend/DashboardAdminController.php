<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardAdminController extends Controller
{
    
    public function __construct(){

        $this->middleware('role:admin');
    }

    public function index(){

        return view('admin.dashboard');
    }

}
