<?php

use Illuminate\Support\Facades\Route;

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
    $greeting = 'Hello';
    $name = 'um';

    // 뷰에 데이터를 바인딩하는 여러 방법

    // 1. 메소드
    // return view('index')->with([
    //     'greeting' => $greeting,
    //     'name'     => $name
    // ]);

    // 2. 인자로 넘기기
    // return view('index', [
    //     'greeting' => $greeting,
    //     'name'     => $name
    // ]);

    // 3. 인자로 넘기기(compact 메소드)
    // return view('index', 
    //     compact('greeting', 'name')
    // );

    // 4. view Property를 이용하기
    $view = View('index');
    $view->greeting = 'Hi';
    $view->name = 'UmJunSik';
    $view->items = ['UmJunSik', 'gajae', 'jaesuk'];

    // return $view;

    $user = DB::connection('stu_khs')->table('test')->get();
    return $user;
});
