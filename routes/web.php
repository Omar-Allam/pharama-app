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


Route::group(['middleware' => 'auth'], function () {
    Route::resource('medicine','MedicineController');

    Route::get('/', function () {
        $medicines = \App\Medicine::paginate(50);
        return view('index',compact('medicines'));
    });


    Route::get('get-types',function(){
        $types = \App\Type::all();
        return ["types"=>$types];
    });

    Route::get('get-companies',function(){
        $companies = \App\Company::all();
        return ["companies"=>$companies];
    });

    Route::get('get-medicines',function(){
        $medicines = \App\Medicine::all();
        return ["medicines"=>$medicines];
    });


    Route::get('/home', 'HomeController@index')->name('home');
});
Auth::routes();

Route::get('register',function (){
   return redirect()->route('login');
})->name('register');