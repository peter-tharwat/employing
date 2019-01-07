<?php
 



 Route::middleware(['RINA'])->group(function () {
  

 

Route::get('/client','ClientController@index');
Route::get('/client/create','ClientController@create');
Route::get('/client/{id}/edit','ClientController@edit');
Route::get('/client/show/{id}','ClientController@show');
Route::get('/client/search{search?}','ClientController@search')->where('search', '.*');
Route::POST('/client','ClientController@store');
Route::POST('/client/update/{id}','ClientController@update');
Route::POST('/client/destroy','ClientController@destroy');


Route::get('/emp','EmpController@index');
Route::get('/emp/create','EmpController@create');
Route::get('/emp/{id}/edit','EmpController@edit');
Route::get('/emp/show/{id}','EmpController@show');
Route::get('/emp/search{search?}','EmpController@search')->where('search', '.*');
Route::POST('/emp','EmpController@store');
Route::POST('/emp/update/{id}','EmpController@update');
Route::POST('/emp/destroy','EmpController@destroy');



Route::get('/deal','DealController@index');
Route::get('/deal/create','DealController@create');
Route::get('/deal/{id}/edit','DealController@edit');
Route::get('/deal/show/{id}','DealController@show');
Route::get('/deal/search{search?}','DealController@search')->where('search', '.*');
Route::get('/track', function(){return 0;})->name('track');
Route::POST('/deal','DealController@store');
Route::POST('/deal/update/{id}','DealController@update');
Route::POST('/deal/destroy','DealController@destroy');


/*Route::POST('/getclients','DealController@getclientsfordeal');
*/

 
Route::get('/message','MessageController@index');
Route::get('/message/create','MessageController@create');
Route::get('/message/show/{id}','MessageController@show');
Route::get('/message/search{search?}','MessageController@search')->where('search', '.*');
Route::POST('/message','MessageController@store');
Route::POST('/sendmessage','MessageController@send_message');
Route::POST('/message/destroy','MessageController@destroy');

Route::GET('/test','NotificationController@send_pending_whatsapp');


 
Route::get('/', function () {
    return view('welcome');
});




}); 

 



Auth::routes();

Route::get('/register', function(){
	return redirect('/login');
});
Route::POST('/register', function(){
	return redirect('/login');
});
 

/*
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/