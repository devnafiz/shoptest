<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Route;

use Closure;
use Session;
use App\Admin;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(empty(Session::has('adminSession'))){
            return redirect('/shopper');
        }else{

            $adminDetails=Admin::where('username',Session::get('adminSession'))->first();
            $adminDetails=json_decode(json_encode($adminDetails),true);

            if($adminDetails['type']=="Admin"){
                      $adminDetails['page_access']=1;
                      $adminDetails['categories_access']=1;
                      $adminDetails['products_access']=1;
                      $adminDetails['users_access']=1;

                //Session::get('adminDetails');
            }
            Session::put('adminDetails',$adminDetails);

            $currentPath= Route::getFacadeRoot()->current()->uri();
              if($currentPath=="admin/view-category" && Session::get('adminDetails')['categories_access']==0){
                return redirect('admin/dashboard')->with('flash_message','You have not access this menu');

              }
              if($currentPath=="admin/view-product" && Session::get('adminDetails')['products_access']==0){
                return redirect('admin/dashboard')->with('flash_message','You have not access this menu');

              }
              if($currentPath=="/admin/add-page" && Session::get('adminDetails')['page_access']==0){
                return redirect('admin/dashboard')->with('flash_message','You have not access this menu');

              }
              if($currentPath=="admin/view-admin" && Session::get('adminDetails')['users_access']==0){
                return redirect('admin/dashboard')->with('flash_message','You have not access this menu');

              }


            //echo "<pre>";print_r($adminDetails);die;
              //  echo Session::get('adminSession','username');die;


        }
        return $next($request);
    }
}
