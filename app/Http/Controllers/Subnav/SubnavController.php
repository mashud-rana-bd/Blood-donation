<?php

namespace App\Http\Controllers\Subnav;

use App\Http\Controllers\Controller;
use App\Mainmenu;
use App\Submenu;
use Illuminate\Http\Request;

class SubnavController extends Controller
{
    public function index(){
    	$mainmenus=Mainmenu::where('publication',1)->orderBy('menu_name')->get();
    	return view('Admin.Subnav.index',['mainmenus'=>$mainmenus]);
    }

    public function store(Request $request){
    	$submenu=new Submenu();
    	$submenu->menu_id=$request->main_menu_id;
    	$submenu->sub_nav=$request->sub_menu_name;
    	$submenu->save();
    	return response()->json('Sub menu Save Successfully');
    }

    public function showall(){
    	$show=Submenu::orderBy('sub_nav')->get();
    	$main=Mainmenu::where('publication',1)->orderBy('menu_name')->get();
    	return response()->json($show);
    }

    public function edite($id){
    	$submeue=Submenu::find($id);
    	return response()->json($submeue);
    }

    public function editesubmenu(Request $request){
    	$submeue=Submenu::find($request->id);
    	$submeue->menu_id=$request->main_menu_id;
    	$submeue->sub_nav=$request->update_name;
    	$submeue->save();
    	return response()->json('Sub menu Update Successfully');

    }

    public function deletesubmenu($id){
    	$submeue=Submenu::find($id);
    	$submeue->delete();
    	return response()->json('Sub menu Delete Successfully');

    }
}
