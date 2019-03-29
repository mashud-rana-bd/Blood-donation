<?php

namespace App\Http\Controllers\NavController;

use App\Http\Controllers\Controller;
use App\Mainmenu;
use Illuminate\Http\Request;

class Homercontroller extends Controller
{
    public function index(){
    	return view('Admin.Nav.index');
    }

    public function menustore(Request $request){
    	if ($request->truepublication==1) {
    		$menu=new Mainmenu();
    		$menu->menu_name=$request->menuname;
    		$menu->publication=$request->truepublication;
    		$menu->save();
    		return response()->json('Main Menu Save Successfully');
    	}else{
    		$menu=new Mainmenu();
    		$menu->menu_name=$request->menuname;
    		$menu->publication=$request->falsepublication;
    		$menu->save();
    		return response()->json('Main Menu Save Successfully');
    	}

    }

    public function showallmenue(){
        $showAllmenue=Mainmenu::orderBy('menu_name')->get();
        return response()->json($showAllmenue);
    }


    public function publicationupdate($id){
        $publication=Mainmenu::find($id);
        if ($publication->publication==1) {
            $publication->publication=0;
            $publication->save();
            return response()->json('Mani menu Unpublished Successfully');
        }else{
            $publication->publication=1;
            $publication->save();
            return response()->json('Mani menu Published Successfully');
        }
    }

    public function editemenushow($id){
        $publication=Mainmenu::find($id);
        return response()->json($publication);
    }

    public function upagemenu(Request $request){
        $menu=Mainmenu::find($request->id);
        $menu->menu_name=$request->updatemenuname;
        $menu->save();
        return response()->json('Menu Update Successfully');
    }

    public function deletemenu($id){
        $menu=Mainmenu::find($id);
        $menu->delete();
        return response()->json('Menu Delete Successfully');
    }

}
