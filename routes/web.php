<?php
 
 
Route::get('/', 'ApplicantController@index');




Route::middleware(['RINU'])->group(function () {
  

	Route::get('/profile1', function () { return view('profile1'); })->name('profile1');
	Route::get('/profile2', function () { return view('profile2'); })->name('profile2');
	Route::get('/profile3', function () { return view('profile3'); })->name('profile3');
	Route::get('/profile4', function () { return view('profile4'); })->name('profile4');

	Route::get('/myjobs', function () { return view('myjobs'); })->name('myjobs');
	Route::get('/favourite', function () { return view('favourite'); })->name('favourite');



	Route::post('/profile1','ApplicantController@profile1')->name('post_profile1');
	Route::post('/profile2','ApplicantController@profile2')->name('post_profile2');
	Route::post('/profile3','ApplicantController@profile3')->name('post_profile3');
	Route::post('/profile4','ApplicantController@profile4')->name('post_profile4');
	Route::post('/updatelove','ApplicantController@updatelove')->name('post_updatelove');
	Route::post('/appling','ApplicantController@appling')->name('post_appling');





	/*dashboard*/
	Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
	/*end dashboard*/



	/*applicants*/
	Route::get('/dashboard/applicants','AdminController@applicants')->name('applicants');
	/*end applicants*/



	/*admin user*/
	Route::get('/dashboard/user','AdminController@userIndex')->name('users');
	Route::get('/dashboard/user/search{search?}','AdminController@search')->where('search', '.*');

	Route::get('/dashboard/user/{id}/show','AdminController@userShow');
	Route::get('/dashboard/user/update','AdminController@update');
	/*end admin user*/



	/*job*/
	Route::get('/dashboard/job/create','AdminController@createJob');
	Route::post('/dashboard/job/create','AdminController@createJobStore');
	Route::get('/dashboard/job','AdminController@indexJob');
	/*end job*/


	/*job option*/
	Route::get('/dashboard/joboption','AdminController@indexJobOption');
	Route::get('/dashboard/joboption/create','AdminController@createJobOption');
	Route::post('/dashboard/joboption/create','AdminController@createJobOptionStore');
	/*end job option*/

	 
}); 


 


 
Auth::routes();

/*Route::get('/register', function(){
	return redirect('/login');
});
Route::POST('/register', function(){
	return redirect('/login');
});*/

 


 