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
Route::get('info', function () {
    // return view('fb.check'); //LP確認用
    return view('fb.noMatch'); //アダルト訴求 - アプリ
    
    // return view('fb.wJob'); //ギフトチャット
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //ワクワク案件LP
    // return view('fb.pp'); //パパ活訴求
    // return view('fb.newLive'); //ライブでLP利用
    
    // return view('fb.friend'); //ママ活訴求
    // return view('fb.noMatch'); //LP獲得用
});

// アダルトアプリ - OS識別x遷移
Route::get('os', 'AdController@os');

// チャトレ訴求 - OS識別x遷移
Route::get('os1', 'AdController@osd');

// LP確認用
Route::get('cccheck', function () {
    return view('fb.noMatch'); //アダルト訴求 - アプリ
    
    // return view('fb.wJob'); //ギフトチャット
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //ワクワク案件LP
    // return view('fb.pp'); //パパ活訴求
    // return view('fb.newLive'); //ライブでLP利用
    // return view('fb.friend'); //ママ活訴求
});
