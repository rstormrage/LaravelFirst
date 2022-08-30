<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\home\HomeController;

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

// Route::get('/home', function () {
//     return 'welcome to /home';
// });

// Route::any('/test1', function () {
//     return 'welcome to /test1';
// });

// Route::match(['get', 'post'], '/test2', function () {
//     return 'welcome to /test2';
// });

// //必选参数传递
// Route::any('/test3/{id}', function ($id = 1) {
//     return 'User id is '.$id;
// });

// //可选参数传递
// Route::any('/test4/{id?}', function ($id = '') {
//     return 'User id is '.$id;
// });

// //通过?传递参数
// Route::any('/test5', function() {
//     return 'User id is '.$_GET['id'];
// });

// //route group
// Route::group(['prefix' => 'admin'], function(){
//     Route::get('/test1', function(){
//         //match "admin/test1" URL
//     });
// });

// //route by controller
// Route::get('/home/test/test1', [TestController::class, 'test1']);

// Route::get('/home/test/test2', [TestController::class, 'test2']);

// Route::group(['prefix' => 'home/test'],function(){
//     Route::get('add', [TestController::class, 'add']);
//     Route::get('addone', [TestController::class, 'addone']);
//     Route::get('delete', [TestController::class, 'delete']);
//     Route::get('update', [TestController::class, 'update']);
//     Route::get('select', [TestController::class, 'select']);

//     Route::get('test3', [TestController::class, 'test3']);
// });

// Route::get('/home/test/test4', [TestController::class, 'test4']);
// Route::get('/home/test/test5', [TestController::class, 'test5']);


Route::any('/contact', [HomeController::class, 'create']);
Route::any('/post', [HomeController::class, 'store']);



Route::group(['prefix' => 'admin'], function () {

    Route::get('/', [AdminController::class, 'index']);
    Route::get('/show/{id}', [AdminController::class, 'findbyid']);
    Route::get('/all', [AdminController::class, 'findall']);
    Route::any('/update', [AdminController::class, 'updatebyid']);
    Route::any('/delete', [AdminController::class, 'deletebyid']);
});

// Route::get('contact/index', [ContactController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [AdminController::class, 'findall'],function(){
    return view('dashboard');
})->middleware(['auth', 'admin']);

Route::get('/vipm/dashboard', function(){
    return view('dashboard');
})->middleware(['auth', 'vip']);
