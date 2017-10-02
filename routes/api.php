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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::get('/user', function () {
//    return 'Hello World';
//    return [
//        '0'=>[
//            'name'=>'Rubel Khan',
//            'city'=>'Dhaka',
//            'country'=>'Country'
//        ],
//        '1'=>[
//            'name'=>'Rahid Hasan',
//            'city'=>'Khulna',
//            'country'=>'UK'
//        ]
//    ];
    return response()->json([
        'user'=>[
            'first_name' => 'HAbibur',
            'last_name' => 'Rahman'
        ]
    ]);
});

Route::get('all-users', 'UserController@getAllUserInfo');






