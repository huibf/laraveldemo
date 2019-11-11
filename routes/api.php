<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


  Route::get('/wx/demo/index',  'WX\Demo\DemoController@index');// 匹配 "/api/wx/demo/index" 的 URL




Route::prefix('wx')->namespace('WX')->group(function () {
    Route::prefix('demo')->namespace('Demo')->group(function () {
        Route::get('index','DemoController@index');  // 匹配 "api/wx/demo/index" 的 URL
        Route::get('edit/{id}', 'DemoController@edit');//路由参数
        Route::get('show/{id}', 'DemoController@show')->where('id', '[0-9]+');
        // Route::get('edita/{id}/{name?}', 'DemoController@edita');
        Route::get('edita/{id}/{name?}', 'DemoController@editb');// 匹配 '/api/wx/demo/edita/15/JJ?music=23r3&book=lsdkjf' 请求参数

    });
    Route::prefix('login')->namespace('Login')->group(function () {
        Route::get('index','DemoController@index');  // 匹配 "/api/wx/login/index" 的 URL
    });
});