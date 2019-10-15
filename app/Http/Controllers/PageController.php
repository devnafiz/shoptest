<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\EditorImage;

class PageController extends Controller
{
    public function addPage(Request $request){

    	if($request->isMethod('post')){

    		$data=$request->all();
    		//echo "<pre>";print_r($data);die;

    		$pages= new Pages;

    	    $pages->name =$data['name'];
    	    $pages->slug =$data['slug'];
    	    $pages->content =$data['content'];

    	    if(!empty($data['status'])){
    	    	$status=1;
    	    }else{
    	    	$status=0;
    	    }
            $pages->status=$status;
            $pages->save();
            return redirect()->back()->with('flash_message','Page has been added');


    	}
        $images=EditorImage::get();

    	return view('backend.page.add_page')->with(compact('images'));
    }

    // view page 
    public function viewPage(Request $request){

    	$pages=Pages::paginate(10);
    	return view('backend.page.page_list')->with(compact('pages'));
    }

    //edit page
    public function editPage(Request $request,$id=null){

    	if($request->isMethod('post')){
    		$data=$request->all();
    		//echo "<pre>";print_r($data);die;

    		if(!empty($data['status'])){
    			$status=1;

    		}else{
    			$status=0;
    		}
    		pages::where(['id'=>$id])->update(['name'=>$data['name'],'slug'=>$data['slug'],'content'=>$data['content'],'status'=>$status]);
    		return redirect()->back()->with('flash_message','Page has been updated');

    	}

    	$pageDetails=Pages::where(['id'=>$id])->first();

    	return view('backend.page.edit_page')->with(compact('pageDetails'));
    }
    // Delete page

    public function delPage($id){
    	Pages::where(['id'=>$id])->delete();

    	return redirect()->back()->with('flash_message','Successfully page has been  deleted');
    }

}
