<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
   

   public function viewCategory(Request $request){
   	$categoryList=Category::get();
   	return view('backend.categories.view_category')->with(compact('categoryList'));
   }


   //add category

   public function addCat(Request $request){
   	if($request->isMethod('post')){
   		$data=$request->all();

   		//echo "<pre>";print_r($data);die;
   		$categories= new Category;

   		$categories->parent_id =$data['parent_id'];
   		$categories->name =$data['name'];
   		$categories->description =$data['description'];
   		$categories->url =$data['url'];
   		if(empty($data['status'])){
          $status=0;

   		}else{
   			$status=1;
   		}

   		$categories->status =$status; 

       $categories->save();
       return redirect()->back()->with('flash_message','Successfully Add Category');

   	}
   	$levels=Category::where(['parent_id'=>0])->get();
   	return view('backend.categories.add_category')->with(compact('levels'));
   }


   public function editCategory(Request $request,$id = null){

   	if($request->isMethod('post')){

   		$data=$request->all();
   		//echo "<pre>";print_r($data);die;
   		if(empty($data['status'])){
   			$status=0;
   		}else{
   			$status=1;
   		}
      // Category::where(['id'=>$id])->update($data);
   		Category::where(['id'=>$id])->update(['name'=>$data['name'],'parent_id'=>$data['parent_id'],'description'=>$data['description'],'url'=>$data['url'],'status'=>$status]);
   		return redirect('/admin/view-category')->with('flash_message','Successfully edit');

   	}
   	 $categoryDetails=Category::where(['id'=>$id])->first();
   	 $levels=Category::where(['parent_id'=>0])->get();
   	 return view('backend.categories.edit_category')->with(compact('categoryDetails','levels'));

   }
}
