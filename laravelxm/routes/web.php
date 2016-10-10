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
    return view('welcome');
});
/* Route::resource('/stu','StuController');
Route::post('/aa',function(){
	//return "hell post";
});
Route::put('/bb',function(){
	return "hell put";
});
Route::delete('/',function(){
	return "hell */ //delete";
//});
//Route::match(['get','post'],'/aa',function(){
	//return "two";
//});
//Route::get('/stu',function(){
	//return "学生信息";
//});

//Route::get('/test/{id}',function($did){
	//return "hell post".$did;
//});
//Route::get('/test/{id?}',function($did=null){
	//return "hell post".$did;
//});
//Route::get('/test/{id}',function($did){
	//return "hell post".$did;
//})->where("id","[0-9]+");
/* Route::get('/fangzhu', function () {
    return view('demo');
});
Route::get('/dd','DemoController@add'); */
//后台页面
Route::get('/admin', function () {
    return view('admin.base.base');
});
// Route::get('/admin/student', function () {
//     return view('admin.user.student');
// });
Route::group(["prefix"=>"admin"],function(){
	Route::get('student',function(){
		return view('admin.user.student');
	});

	Route::get('teacher',function(){
		return view('admin.user.teacher');
	});

	Route::get('wmovie',function(){
		return view('admin.movie.wmovie');
	});

	Route::get('movie',function(){
		return view('admin.movie.movie');
	});

	Route::get('suggest',function(){
		return view('admin.suggest.suggest');
	});

	Route::get('talk',function(){
		return view('admin.suggest.talk');
	});

	Route::get('tell',function(){
		return view('admin.tell.tell');
	});


	Route::get('atell',function(){
		return view('admin.tell.atell');
	});

	Route::get('config',function(){
		return view('admin.config.config');
	});

});