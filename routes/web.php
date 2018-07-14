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
Route::get('/login', function () {
    return '这是一个登录测试！！！';
});
Route::get('/anothertest', [
    'as'=>'uu',
        'uses'=>function(){
        echo '这是一个苦逼的事情';
        echo route('uu');//route是一个函数，通过路由的别名来创建完整的url
        }
    ]
);
//这是一个POST测试
Route::post('/insert',function (){
    echo '这是一个post的测试';
});
Route::get('/form',function (){
    return view('form');
});
Route::get('/put',function (){
    return view('put');
});
Route::put('/update',function (){
    echo '这是一个put测试';
});
Route::get('/usn/user/index',[
    'as'=>'ulist',
    'uses'=>function(){
        echo route('ulist');
        echo '这是路由别名';
    }
]);
    Route::get('/article/{id}',function ($ids){
        echo '传过来的参数'.$ids;
        Config::
    }

);