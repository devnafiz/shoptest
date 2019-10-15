<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Tags;
use Image;

class ProductController extends Controller
{
    public function addProduct(Request $request){

    	if($request->isMethod('post')){



    		$data=$request->all();



              if(!empty($data['status'])){
              	$status=1;
              }else{
              	$status=0;
              }

    		//echo "<pre>";print_r($data);die;

    		$products =new Products;
    		$products->product_name=$data['product_name'];
    		$products->on_price=$data['on_price'];
    		$products->off_price=$data['off_price'];
    		$products->qty=$data['qty'];
    		$products->description=$data['description'];
    		$products->quick_overview=$data['quick_overview'];
    		$products->status=$status;
    		$products->save();
            $products->tags()->sync($request->tags,false);
            return redirect()->back()->with('flash_message','Product has been Added');


    	}
    	$tags=Tags::get();
    	return view('backend.products.add_product')->withTags($tags);
    }

}
