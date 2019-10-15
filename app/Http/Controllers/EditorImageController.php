<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\EditorImage;
use Image;

class EditorImageController extends Controller
{
    public function addImage(Request $request){


    	if($request->isMethod('post')){

    		$data=$request->all();

    		$images= new EditorImage;

    		$images->name =$data['name'];
    		$images->size =$data['size'];

    		if($request->hasFile('image')){

    			$image_tmp=Input::file('image');
    			if($image_tmp->isValid()){
    				$extension =$image_tmp->getClientOriginalExtension();
    				$filename=rand(111,99999).'.'.$extension;
    				$large_image_path='images/backend_image/editor/'.$filename;
    				Image::make($image_tmp)->save($large_image_path);

    				$images->image=$filename;

    			}
    		}

    		
    		if(!empty($data['status'])){
    			$status=1;
    		}else{
    			$status=0;
    		}
    		$images->status=$status;
    		$images->save();
    		return redirect()->back()->with('flash_message','file uploaded');
    		//echo "<pre>";print_r($data);die;
    	}



    	return view('backend.Image.add_image');
    }

    //view  image
    public function viewImage(Request $request){

    	$images=EditorImage::paginate(10);

    	return view('backend.image.image_list')->with(compact('images'));
    }



    public function delImage($id){

    	EditorImage::where(['id'=>$id])->delete();

    	return redirect()->back()->with('flash_message','Successfully deleted');
    }
}
