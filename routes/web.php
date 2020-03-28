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
    return view('welcome');
});

Route::get('/posts', function () {

    $data=[
        [
            'id'=>1,
             'title'=>'title2',
             'created_at'=>'3-4-2018'    

        ],
        [
                'id'=>2,
             'title'=>'title2',
             'created_at'=>'3-4-2018'    

        ]
        
        
    ];
    
// dd($data);

    return view('posts',[
        'posts'=>$data,

    ]);


});

