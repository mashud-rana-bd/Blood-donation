<?php

namespace App\Http\Controllers\Homecontroller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homecontroller extends Controller
{
    public function index(){
    	return redirect('login');
    }
}
