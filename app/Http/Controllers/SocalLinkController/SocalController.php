<?php

namespace App\Http\Controllers\SocalLinkController;

use App\Http\Controllers\Controller;
use App\SocalLink;
use Illuminate\Http\Request;

class SocalController extends Controller
{
    public function index(){
    	return view('Admin.SocalLink.index');
    }

    public function store(Request $request){
    	$socallink=new SocalLink();
    	$socallink->facebook=$request->facebook;
    	$socallink->twitter=$request->twitter;
    	$socallink->google=$request->google;
    	$socallink->in=$request->in_link;
    	$socallink->save();
    	return response()->json('Socal link Save Successfully');
    }

    public function showall(){
        $showall=SocalLink::orderBy('updated_at','DESC')->get();
        return response()->json($showall);
    }

    public function edite($id){
        $singlesocal=SocalLink::find($id);
        return response()->json($singlesocal);
    }

    public function update(Request $request){
        $socal_link=SocalLink::find($request->id);
        
        $socal_link->facebook=$request->facebook;
        $socal_link->twitter=$request->twitter;
        $socal_link->google=$request->google;
        $socal_link->in=$request->in_link;
        $socal_link->save();
        return response()->json('Socal link Update Successfully');
    }
}
