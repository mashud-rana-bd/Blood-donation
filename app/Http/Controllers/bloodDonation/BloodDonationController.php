<?php

namespace App\Http\Controllers\bloodDonation;

use App\BloodDoner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class BloodDonationController extends Controller
{
    public function index(){
    	return view('Admin.bloodDonation.index');
    }

    public function store(Request $request){

    	
    		$image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('admin/BloodDonation/');
            //$image->move($destinationPath, $name);
            // image interventation
            Image::make($image)->resize(370,210)->save($destinationPath.$name);
            $blood=new BloodDoner();
            $blood->name=$request->name;
            $blood->address=$request->address;
            $blood->email=$request->email;
            $blood->contactNumber=$request->contactNumber;
            $blood->home_district=$request->home_district;
            $blood->about=$request->about;
            $blood->image=$name;
            $blood->publication=1;
            $blood->save();
            return response()->json('Blood Donaion Information save successfully');

    }

    function showall(){
    	$showallblood=BloodDoner::orderBy('id','DESC')->get();
    	return response()->json($showallblood);
    }

    function updatepublication($id){
    	$blood=BloodDoner::find($id);

    	if ($blood->publication==1) {
    		$blood->publication=0;
    		$blood->save();
    		return response()->json('Blood Donation Unpublished Successfully');
    	}else{
    		$blood->publication=1;
    		$blood->save();
    		return response()->json('Blood Donation Unpublished Successfully');
    	}
    	
    }

   function showsingleblood($id){
   		$blood=BloodDoner::find($id);
   		return response()->json($blood);
   }

   function updateblood(Request $request){

   		$blood=BloodDoner::find($request->id);

   		if ($request->hasFile('image')) {

			$image = $request->file('image');
	        $name = time().'.'.$image->getClientOriginalExtension();
	        $destinationPath = public_path('admin/BloodDonation/');
	        //$image->move($destinationPath, $name);
	        // image interventation
	        Image::make($image)->resize(370,210)->save($destinationPath.$name);

   			$blood->name=$request->name;
   			$blood->address=$request->address;
   			$blood->email=$request->email;
   			$blood->contactNumber=$request->contact;
   			$blood->home_district=$request->home_district;
   			$blood->about=$request->about;
   			$blood->image=$name;
   			$blood->save();
   			return response()->json("Blood Information Update Successfully");
   		}else{
   			$blood->name=$request->name;
   			$blood->address=$request->address;
   			$blood->email=$request->email;
   			$blood->contactNumber=$request->contact;
   			$blood->home_district=$request->home_district;
   			$blood->about=$request->about;
   			$blood->save();
   			return response()->json("Blood Information Update Successfully");
   		}

   		
   }

   function deleteblood($id){
   	$blood=BloodDoner::find($id);
   	$blood->delete();
   	return response()->json("Blood Donation Information Delete Successfully");
   }

}
