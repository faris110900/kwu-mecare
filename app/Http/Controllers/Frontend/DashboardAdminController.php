<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story;

class DashboardAdminController extends Controller
{
    
    public function __construct(){

        $this->middleware('role:admin');
    }

    public function index(){

        $stories = Story::all();
        $storiesCount = $stories->count();

        return view('admin.dashboard', compact('storiesCount'));
    }

}
