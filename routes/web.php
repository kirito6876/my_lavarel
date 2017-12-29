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

Route::get('/', function () {
    // session(['key' => '1234']); //写入session,必须要有web中间件
    return view('welcome');
});
// Route::get('/test',function() {
//     echo session('key');  //取出并输出session
//     return 'test页面';
// });


Route::get('test','TestController@index');
Route::get('database','DatabaseController@index');


//视图路由
// Route::get('/view',function() {
//     return view('my_lavarel');
// });

Route::get('view','View\ViewController@index');
Route::get('article','View\articleController@index');




//第一个部分是跟在index.php后面的部分
// Route::get('admin/login','Admin\IndexController@login');
// Route::get('admin/index','Admin\IndexController@index');

//可以把上面两部分的前缀都拆出来group
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['web', 'admin.login']], function () {
  //Route::get('login','IndexController@login');
  Route::get('index','IndexController@index');

});

//载入中间件和数组一样，用逗号分开
Route::group(['middleware' => ['web']],function() {
  Route::get('admin/login','Admin\IndexController@login');

  Route::get('/', function () {
      session(['key' => '1234']); //写入session,必须要有web中间件
      return view('welcome');
  });
});
