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
// LP獲得用
Route::get('job', function () {
    // return view('fb.check'); //LP確認用
    return view('fb.friend'); //暇つぶし→ママ活訴求
    
    // return view('fb.noMatch'); //LP獲得用
});

// 男性向け訴求 - OS識別x遷移
Route::get('os', 'AdController@os');

// LP確認用
Route::get('cccheck', function () {
    return view('fb.friend'); //暇つぶし→ママ活訴求
    
    // return view('fb.noMatch');
});
