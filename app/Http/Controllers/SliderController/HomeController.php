<?php

namespace App\Http\Controllers\SliderController;

use App\Http\Controllers\Controller;
use App\Slider;
use Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('Admin.slider.index');
    }

    public function imagestore(Request $request){
    	if($request->truepubliction==1){
	    	$image = $request->file('image');
	        $name = time().'.'.$image->getClientOriginalExtension();
	        $destinationPath = public_path('admin/Sliderimage/');
	        Image::make($image)->resize(1920,800)->save($destinationPath.$name);
	        $slider=new Slider();
	        $slider->slider_image=$name;
	        $slider->publication=$request->truepubliction;
	        $slider->save();
	        return response()->json('Slider Image Save Successfully');
    	}else{
			$image = $request->file('image');
		    $name = time().'.'.$image->getClientOriginalExtension();
		    $destinationPath = public_path('admin/Sliderimage/');
		    Image::make($image)->resize(1920,800)->save($destinationPath.$name);
		    $slider=new Slider();
		    $slider->slider_image=$name;
		    $slider->publication=$request->falsepubliction;
		    $slider->save();
		    return response()->json('Slider Image Save Successfully');
    	}	
    }

    public function showall(){
    	$slider=Slider::orderBy('updated_at','DESC')->get();
        return response()->json($slider);
    }

    public function publication($id){
    	$publication=Slider::find($id);
    	if ($publication->publication==1) {
    		$publication->publication=0;
    		$publication->save();
    		return response()->json('Slider Image Unpublisher Successfully');
    	}else{
    		$publication->publication=1;
    		$publication->save();
    		return response()->json('Slider Image Publisher Successfully');
    	}
    }

    public function editesliderimage($id){
        $findslider=Slider::find($id);
        return response()->json($findslider);
    }

    public function updatesliderimage(Request $request){
        

            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('admin/Sliderimage/');
            Image::make($image)->resize(1920,800)->save($destinationPath.$name);
            $slider=Slider::find($request->id);
            $slider->slider_image=$name;
            $slider->save();
            return response()->json('Slider Image Update Successfully');
    }

    public function deletesliderimage($id){
        $sliderid=Slider::find($id);
        $sliderid->delete();
        return response()->json('Slider Image Delete Successfully');
    }
}
