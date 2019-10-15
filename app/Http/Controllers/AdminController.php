<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use App\User;
use App\Admin;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
    	 return  view('backend.dashboard');
    }

    public function login(Request $request)
    {
    	if($request->isMethod('post')){
    		$data=$request->input();
            $adminCount=Admin::where(['username'=>$data['username'],'password'=>md5($data['password']),'status'=>1])->count();

            //echo "<pre>";print_r($adminCount);die;
            if($adminCount>0){

                Session::put('adminSession',$data['username']);
                return redirect('/admin/dashboard');

            }else{
                return redirect('/shopper')->with('flash_message','Invalid Username or Password');
            }
    		// if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
    		// 	//echo "succesfull" ; die;
    		// 	//Session::put('adminSession',$data['email']);
    		// 	return redirect('/admin/dashboard');
    		// }else{
    		// 	//echo "failed" ;die;
    		// 	return redirect('/admin')->with('flash_message','Invalid Username or Password');
    		// }
    	}
         return view('backend.admin_login');
    	}

        //view Admin And Sub Admin
        public function viewAdmin(Request $request){

            $adminDetails=Admin::get();
            return view('backend.admins.view_admin')->with(compact('adminDetails'));
        }
        //logout

        public function logout(){

            Session::flush();
            return redirect('/shopper')->with('flash_message','Succesfully logout');
        }


        //Add admin sub Admin

        public function addAdmin(Request $request){

            if($request->isMethod('post')){

                $data=$request->all();
                //echo "<pre>";print_r($data);die;

                $usernameCheck=Admin::where('username',$data['username'])->count();
                if($usernameCheck>0){

                    return redirect()->back()->with('flash_message','Username Already Exists!!');
                }else{

                    if(empty($data['status'])){
                      $data['status']=0;
                    }

                    if($data['type']=="Admin"){

                        $admin=new Admin;
                          $admin->type=$data['type'];
                          $admin->username=$data['username'];
                          $admin->password=md5($data['password']);
                          $admin->status=$data['status'];
                          $admin->save();
                          return redirect()->back()->with('flash_message','Username add Successfully');
                    }else if($data['type']=="Sub Admin"){

                        if(empty($data['categories_access'])){
                            $data['categories_access']=0;
                        }
                        if(empty($data['page_access'])){
                            $data['page_access']=0;
                        }
                        if(empty($data['products_access'])){
                            $data['products_access']=0;
                        }
                        if(empty($data['users_access'])){
                            $data['users_access']=0;
                        }

                        $admin=new Admin;
                          $admin->type=$data['type'];
                          $admin->username=$data['username'];
                          $admin->password=md5($data['password']);

                           $admin->categories_access=$data['categories_access'];
                           $admin->page_access=$data['page_access'];
                           $admin->products_access=$data['products_access'];
                           $admin->users_access=$data['users_access'];
                          $admin->status=$data['status'];
                          $admin->save();
                           return redirect()->back()->with('flash_message','Username add Successfully');


                    }


                   

                }
            }

             return view('backend.admins.add_admin');
        }

          //edit Admin
        public function EditAdmin(Request $request,$id=null){
            if($request->isMethod('post')){

               $data=$request->all();
              // echo "<pre>";print_r($data);die;
               if(empty($data['status'])){

                $data['status']=0;
               } 
               if($data['type']=="Admin"){

                Admin::where('username',$data['Username'])->update(['password'=>md5($data['username']),'status'=>$data['status']]);
                return redirect()->back()->with('flash_message','Admin Updated Successfully');
               }else if($data['type']=="Sub Admin"){

                  if(empty($data['categories_access'])){
                    $data['categories_access']=0;
                  }
                   if(empty($data['page_access'])){
                    $data['page_access']=0;
                  }
                   if(empty($data['products_access'])){
                    $data['products_access']=0;
                  }
                   if(empty($data['users_access'])){
                    $data['users_access']=0;
                  }

                  Admin::where('username',$data['username'])->update(['password'=>md5($data['password']),'status'=>$data['status'],'categories_access'=>$data['categories_access'],'page_access'=>$data['page_access'],'products_access'=>$data['products_access'],'users_access'=>$data['users_access']]);
                  return redirect()->back()->with('flash_message','Sub Admin updated Successfully');
               }


            }

            $adminDetails=Admin::where('id',$id)->first();

            return view('backend.admins.edit_admin')->with(compact('adminDetails'));

        }

        //delete admin

        public function delAdmin($id){

            $adminDetails=Admin::where('id',$id)->first();
            //$adminDetails=json_decode(json_encode($adminDetails));
            //echo $adminDetails->type; die;
            if($adminDetails->type=="Sub Admin"){

                Admin::where('id',$id)->delete();
                return redirect()->back()->with('flash_message','Successfully Sub Admin Deleted');
            }else{
                return redirect()->back()->with('flash_message','Admin delete not Possible'); 
            }

            //echo "<pre>";print_r($adminDetails);die;
        }



}
