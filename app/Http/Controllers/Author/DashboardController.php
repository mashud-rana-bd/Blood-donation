<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Mainmenu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    	$mainnavs=Mainmenu::where('publication',1)->get();
    	return view('Author.index',['mainnavs'=>$mainnavs]);
    }
}
