<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Category;
use App\NewsLetter;

use App\Pages;
use Validator;
use App\Products;


class FrontendController extends Controller
{
    public function home(Request $request){

    	$categories=Category::with('categories')->where(['parent_id'=>0])->get();
    	$categories=json_decode(json_encode($categories));
    	foreach ($categories as $cat) {
    		# code...
    	}
    	//echo "<pre>";print_r($categories);die;
         $sub_category=Category::where(['parent_id'=>$cat->id])->get();   


       $slider=Banner::get();
    	return view('frontend.index')->with(compact('slider','categories','sub_category'));
    }

    //page view

    public function pageView($slug){

        $categories=Category::with('categories')->where(['parent_id'=>0])->get();
        $categories=json_decode(json_encode($categories));
        foreach ($categories as $cat) {
            # code...
        }
        //echo "<pre>";print_r($categories);die;
         $sub_category=Category::where(['parent_id'=>$cat->id])->get(); 

        $pageDetails=Pages::where(['slug'=>$slug])->first();
        return view('frontend.page')->with(compact('pageDetails','categories','sub_category'));
    }
    //Order form
    public  function orderForm(Request $request){

        if($request->isMethod('post')){
            $data=$request->all();
            echo "<pre>";print_r($data);die;


        }
        $categories=Category::with('categories')->where(['parent_id'=>0])->get();
        $categories=json_decode(json_encode($categories));
        foreach ($categories as $cat) {
            # code...
        }
        //echo "<pre>";print_r($categories);die;
         $sub_category=Category::where(['parent_id'=>$cat->id])->get(); 
        return view('frontend.order_form')->with(compact('categories','sub_category'));
    }

    //contact page 
    public function contactPage(Request $request){
         $categories=Category::with('categories')->where(['parent_id'=>0])->get();
        $categories=json_decode(json_encode($categories));
        foreach ($categories as $cat) {
            # code...
        }
        //echo "<pre>";print_r($categories);die;
         $sub_category=Category::where(['parent_id'=>$cat->id])->get(); 

        return view('frontend.contact_us')->with(compact('categories','sub_category'));
    }

    //product 
    public function viewProduct(Request $request){
           $categories=Category::with('categories')->where(['parent_id'=>0])->get();
        $categories=json_decode(json_encode($categories));
        foreach ($categories as $cat) {
            # code...
        }
        //echo "<pre>";print_r($categories);die;
         $sub_category=Category::where(['parent_id'=>$cat->id])->get(); 

           $productDetails=Products::get();

        return view('frontend.product.view_product')->with(compact('productDetails','categories','sub_category'));
    }

    public function productDetails(Request $request,$id){

       $productDtails=Products::where('id',$id)->first();

       
    }

    //check subscribe

    public function checkSubscribe(Request $request){

          if($request->ajax()){

           $data=$request->all();
          // echo "<pre>";print_r($data);die;
           $newsLetter=NewsLetter::where('email',$data['email'])->count();
           if($newsLetter>0){

            echo "Exists";
           }else{
                    $validator = Validator::make($request->all(), [

                    'email' => 'required|email',

                   ]);
                    if($validator->passes()){

                    $newsLetter= new NewsLetter;
                    $newsLetter->email=$request->email;
                    $newsLetter->save();

                    }else{
                         echo "Error";

                    }

            
              }

          }

    }

    
}
