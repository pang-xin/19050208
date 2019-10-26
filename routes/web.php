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
    return view('welcome');
});

//客户信息
Route::prefix('/client')->group(function () {
    Route::get('/create', 'Index\ClientController@create');
    Route::post('/store', 'Index\ClientController@store');
    Route::post('/name_do', 'Index\ClientController@name_do');
    Route::get('/index', 'Index\ClientController@index');
    Route::get('/edit/{id}', 'Index\ClientController@edit');
    Route::post('/update/{id}', 'Index\ClientController@update');
    Route::get('/destroy/{id}', 'Index\ClientController@destroy');
});


//服务信息
Route::prefix('/service')->group(function () {
    Route::get('create', 'Index\ServiceController@create');//添加页面
    Route::post('create_do', 'Index\ServiceController@create_do');//添加执行
    Route::get('list', 'Index\ServiceController@list');//列表展示
    Route::get('delete/{id}', 'Index\ServiceController@delete');//删除
    Route::get('update/{id}', 'Index\ServiceController@update');//修改页面
    Route::post('update_do/{id}', 'Index\ServiceController@update_do');//修改页面
});



Route::get('/create', 'index\HereController@create');
Route::post('/createDo', 'index\HereController@createDo');
Route::get('index/list', 'index\HereController@list');

Route::prefix('/synthesize')->group(function () {
    Route::get('index','Index\IndexController@index');
    Route::get('client', 'Index\IndexController@client');//添加页面
    Route::get('service', 'Index\IndexController@service');//添加执行
    Route::get('here', 'Index\IndexController@here');//列表展示
});

