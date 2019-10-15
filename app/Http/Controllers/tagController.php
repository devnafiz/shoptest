<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tags;

class tagController extends Controller
{
    public function addtags(Request $request){

    	if($request->isMethod('post')){

    		$data=$request->all();
    		//echo "<pre>";print_r($data);die;
    		$tags=new Tags;

    		$tags->name=$data['name'];
    		$tags->save();
    		return  redirect()->back()->with('flash_message','Successfully tags has been added');

    	}

    	return view('backend.tags.add_tag');
    }

    public function editTags(Request $request,$id=null){

            if($request->isMethod('post')){
            	$data=$request->all();
            	Tags::where('id',$id)->update(['name'=>$data['name']]);
            	return redirect()->back()->with('flash_message','Successfully update');
            }

    	$tagDetails=Tags::where('id',$id)->first();

    	return view('backend.tags.edit_tag')->with(compact('tagDetails'));
    }

    public function tagView(Request $request){

    	$tagDetails=Tags::get();

    	return view('backend.tags.view_tag')->with(compact('tagDetails'));
    }


    public function delTag($id){

    	Tags::where('id',$id)->delete();
    	return redirect()->back()->with('flash_message','Delete Successfully');
    }
}
