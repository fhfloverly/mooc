<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('admin.index.index');
});


//访问base
// Route::get("/admin",function() {
// 	return view("admin.stu.index");	//首页
// });

// Route::get("/admin",function() {
// 	return view("admin.stu.add");//添加表单
// });
Route::get('/admin',function(){
	return view('admin.user.data');
});
Route::get('admin/login','Admin\LoginController@login');

Route::post('admin/dologin','Admin\LoginController@dologin');

Route::get('admin/captcha/{tmp}','Admin\LoginController@captcha');

Route::get('kit/captcha/{tmp}', 'Admin\kitController@captcha');

//后台界面，需要登入的才能访问，使用中间件进行过滤

Route::group(['prefix'=>'admin','middleware'=>'loginCheck'],function(){
	Route::get('index','Admin\IndexController@index');

	Route::get('logout','Admin\LoginController@logout');

	Route::get('teach',function(){
		return view('admin.user.teach');
	});

	Route::get('stu',function(){
		return view('admin.user.stu');
	});

	Route::get('type',function(){
		return view('admin.type.type');
	});

	Route::get('stype',function(){
		return view('admin.type.stype');
	});

	Route::get('ustype',function(){
		return view('admin.type.ustype');
	});

	Route::get('astype',function(){
		return view('admin.type.astype');
	});

	Route::get('atype',function(){
		return view('admin.type.atype');
	});

	Route::get('utype',function(){
		return view('admin.type.utype');
	});

	Route::get('wtext',function(){
		return view('admin.text.wtext');
	});

	Route::get('text',function(){
		return view('admin.text.text');
	});
});

//前台首页
Route::get('/home/index',function(){
	return view('mooc.index.index');
});

Route::get('home/login','Home\LoginController@login');
aaaaaaaaaaaaaaaa
