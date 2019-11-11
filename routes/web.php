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
/*
Route::get('/', function () {
    return view('welcome');
});*/


// Route::get('/admin/demo/index',  'Admin\Demo\DemoController@index');// 匹配 "/admin/demo/index" 的 URL


/*

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::prefix('article')->group(function () {
        Route::get('login','DemoController@login');  // 匹配包含 "/admin/article/login" 的 URL
        Route::get('democont',function(){
            return "Update LaravelAcademy";
        });
    });
    Route::prefix('tag')->group(function () {
        Route::get('/index', 'DemoController@index');
        Route::get('edit/{id}', 'DemoController@edit');//路由参数
         Route::get('show/{id}', 'DemoController@show')->where('id', '[0-9]+');
       // Route::get('edita/{id}/{name?}', 'DemoController@edita');
        Route::get('edita/{id}/{name?}', 'DemoController@editb');// /admin/tag/edita/15/JJ?music=23r3&book=lsdkjf  请求参数

    });
});

  Route::resource('photos', 'PhotoController');
//API 资源路由
Route::apiResources([
    'photos' => 'PhotoController',
    'posts' => 'PostController'
]);
*/


// Route::prefix('admin')->namespace('Admin')->middleware(['demoage'])->group(function () { //middleware：路由中间件
Route::prefix('admin')->namespace('Admin')->group(function () {// 没有路由中间件
    Route::prefix('demo')->namespace('Demo')->group(function () {
        Route::get('index', 'DemoController@index');  // 匹配 "/admin/demo/index" 的 URL
        Route::get('edit/{id}', 'DemoController@edit');//路由参数
        Route::get('show/{id}', 'DemoController@show')->where('id', '[0-9]+');
        // Route::get('edita/{id}/{name?}', 'DemoController@edita');
        Route::get('edita/{id}/{name?}', 'DemoController@editb');// /admin/demo/edita/15/JJ?music=23r3&book=lsdkjf  请求参数

    });
    Route::prefix('article')->namespace('Article')->group(function () {
        Route::get('index', 'DemoController@index');  // 匹配 "/admin/article/index" 的 URL
    });
});


Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::prefix('login')->namespace('Login')->group(function () {
        Route::get('index', 'LoginController@index')->name('login');  // 匹配 "/admin/login/index" 的 URL；路由命名：login
    });


    Route::prefix('login')->namespace('Login')->group(function () {
        Route::post('profile', 'LoginController@profile')->name('profile');  // 匹配 "/admin/login/profile" 的 URL；路由命名：profile
    });


    Route::prefix('help')->namespace('Help')->group(function () {
        Route::get('index', 'DemoController@index');  // 匹配 "/admin/help/index" 的 URL
    });
});

Route::middleware('auth:api', 'throttle:60,1')->group(function () {  //访问控制
    Route::get('/user', function () {
        return 'hello ';
    });
});
