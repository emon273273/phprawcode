<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){

    return view(("welcome"));
});

Route::get("/emon",function(){

    return "emonsab";
});
Route::post('/say',function(Request $request){

    $newname=$request->post("name");
    $gretting=$request->post("gre");
   print("hello {$newname} and {$gretting}");

   $all=$request->all();

   print_r($all);
});