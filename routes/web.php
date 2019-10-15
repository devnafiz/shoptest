<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/dashboard','AdminController@dashboard');

Auth::routes();

//frontend route
Route::get('/','FrontendController@home');

//Route::get('/', 'HomeController@index')->name('home');

Route::match(['get','post'],'/shopper','AdminController@login');
//get page
Route::get('/page/{slug}','FrontendController@pageView');
//order form
Route::match(['get','post'],'/order-form','FrontendController@orderForm');
Route::match(['get','post'],'/contact-us','FrontendController@contactPage');
//newsletter

Route::post('/check-subcribe-email','FrontendController@checkSubscribe');

//product
Route::get('/products','FrontendController@viewProduct');


Route::group(['middleware'=>['adminLogin']],function(){
     Route::get('/admin/dashboard','AdminController@dashboard');


     //Banner  area
		Route::match(['get','post'],'/admin/add-slide','BannerController@addBanner');
		Route::get('/admin/view-slide','BannerController@viewBanner');
		Route::match(['get','post'],'/admin/edit-slide/{id}','BannerController@editBanner');
		Route::get('/admin/delete-slide/{id}','BannerController@deleteBanner');

		//category
		Route::get('/admin/view-category','CategoryController@viewCategory');
		Route::match(['get','post'],'/admin/add-category','CategoryController@addCat');
		Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@editCategory');
		Route::get('/admin/delete-category/{id}','CategoryController@deleteCategory');

		//pages

		Route::match(['get','post'],'/admin/add-page','PageController@addPage');
		Route::get('/admin/page-list','PageController@viewPage');
		Route::match(['get','post'],'/admin/edit-page/{id}','PageController@editPage');
		Route::get('/admin/delete-page/{id}','PageController@delPage');

		//edtor image

		Route::match(['get','post'],'/admin/add-image','EditorImageController@addImage');
		Route::get('/admin/image-list','EditorImageController@viewImage');
		Route::get('/admin/delete-image/{id}','EditorImageController@delImage');


		//admin \sub admin
		Route::get('/admin/view-admin','AdminController@viewAdmin');
		Route::match(['get','post'],'/admin/add-admin','AdminController@addAdmin');
		Route::match(['get','post'],'/admin/edit-admin/{id}','AdminController@EditAdmin');

		Route::get('/admin/delete-admin/{id}','AdminController@delAdmin');

		//tags
		Route::match(['get','post'],'/admin/add-tag','TagController@addtags');
		Route::match(['get','post'],'/admin/edit-tag/{id}','TagController@editTags');
		Route::get('/admin/tag-list','TagController@tagView');
		Route::get('/admin/delete-tag/{id}','TagController@delTag');
        //product

        Route::match(['get','post'],'/admin/add-product','ProductController@addProduct');


		

});
 Route::get('/admin/admin-logout','AdminController@logout');
