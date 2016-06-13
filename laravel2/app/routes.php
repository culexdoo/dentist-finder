<?php

/*
 *	Dentist finder core routes
 */



// Test route
Route::get('test', array('as' => 'getTest', 'uses' => 'CoreController@getTest'));
 

Route::get('/updateapp', function()
{
	\Artisan::call('dump-autoload');
	echo 'dump-autoload complete';
});



 /* 	 
 * 	Backend routes
 */
Route::group(array('prefix' => 'admin'), function()
{

	/*
	 *	Dashboard
	 *
	 *	- available only to logged in users
	 *	- Controller handles the type and file loading depending on user role
	 */ 

	Route::get('/', array('before' => 'guest', 'as' => 'getDashboard', 'uses' => 'DashboardController@index'));
 
	// Dentist accounts, create, save, edit, update, destroy
	Route::group(array('prefix' => 'dentist'), function()
	{
		Route::get('/', array('as' => 'DentistIndex', 'uses' => 'DentistController@index'));
 
		Route::get('create', array('as' => 'DentistCreate', 'uses' => 'DentistController@create'));

		Route::post('store', array('as' => 'DentistStore', 'uses' => 'DentistController@store'));

		Route::get('edit/{id}', array('as' => 'DentistEdit', 'uses' => 'DentistController@edit'));

		Route::post('update', array('as' => 'DentistUpdate', 'uses' => 'DentistController@update'));

		Route::get('destroy/{id}', array('as' => 'DentistDestroy', 'uses' => 'DentistController@destroy'));

	});

	// Patient accounts, create, save, edit, update, destroy
	Route::group(array('prefix' => 'patient'), function()
	{
		Route::get('/', array('as' => 'PatientIndex', 'uses' => 'PatientController@index'));
 
		Route::get('create', array('as' => 'PatientCreate', 'uses' => 'PatientController@create'));

		Route::post('store', array('as' => 'PatientStore', 'uses' => 'PatientController@store'));

		Route::get('edit/{id}', array('as' => 'PatientEdit', 'uses' => 'PatientController@edit'));

		Route::post('update', array('as' => 'PatientUpdate', 'uses' => 'PatientController@update'));

		Route::get('destroy/{id}', array('as' => 'PatientDestroy', 'uses' => 'PatientController@destroy'));

	});

	// Blog posts, create, save, edit, update, destroy
	Route::group(array('prefix' => 'blog'), function()
	{
		Route::get('/', array('as' => 'BlogIndex', 'uses' => 'BlogController@index'));
 
		Route::get('create', array('as' => 'BlogCreate', 'uses' => 'BlogController@create'));

		Route::post('store', array('as' => 'BlogStore', 'uses' => 'BlogController@store'));

		Route::get('edit/{id}', array('as' => 'BlogEdit', 'uses' => 'BlogController@edit'));

		Route::post('update', array('as' => 'BlogUpdate', 'uses' => 'BlogController@update'));

		Route::get('destroy/{id}', array('as' => 'BlogDestroy', 'uses' => 'BlogController@destroy'));

	});

	// Quote, create, save, edit, update, destroy
	Route::group(array('prefix' => 'quote'), function()
	{
		Route::get('/', array('as' => 'QuoteIndex', 'uses' => 'QuoteController@index'));
 
		Route::get('create', array('as' => 'QuoteCreate', 'uses' => 'QuoteController@create'));

		Route::post('store', array('as' => 'QuoteStore', 'uses' => 'QuoteController@store'));

		Route::get('edit/{id}', array('as' => 'QuoteEdit', 'uses' => 'QuoteController@edit'));

		Route::post('update', array('as' => 'QuoteUpdate', 'uses' => 'QuoteController@update'));

		Route::get('destroy/{id}', array('as' => 'QuoteDestroy', 'uses' => 'QuoteController@destroy'));

	});
 
	// Quote, create, save, edit, update, destroy
	Route::group(array('prefix' => 'review'), function()
	{
		Route::get('/', array('as' => 'ReviewIndex', 'uses' => 'ReviewController@index'));
 
		Route::get('create', array('as' => 'ReviewCreate', 'uses' => 'ReviewController@create'));

		Route::post('store', array('as' => 'ReviewStore', 'uses' => 'ReviewController@store'));

		Route::get('edit/{id}', array('as' => 'ReviewEdit', 'uses' => 'ReviewController@edit'));

		Route::post('update', array('as' => 'ReviewUpdate', 'uses' => 'ReviewController@update'));

		Route::get('destroy/{id}', array('as' => 'ReviewDestroy', 'uses' => 'ReviewController@destroy'));

	});

});



/*
 *	 Frontend routes
 */

 
// Home / landing
Route::get('/', array('as' => 'getFrontendLanding', 'uses' => 'FrontendController@getLanding')); 

// Sign in page
Route::get('sign-in', array('before' => 'guest', 'as' => 'getSignIn', 'uses' => 'FrontendController@getSignIn'));
  
// Register page
Route::get('register', array('before' => 'guest', 'as' => 'getRegister', 'uses' => 'FrontendController@getRegister'));
 
// Post register page
Route::post('register-user', array('before' => 'csrf', 'as' => 'postRegister', 'uses' => 'FrontendController@postRegister'));

// Forgot password page
Route::get('forgot-password', array('as' => 'getForgotPassword', 'uses' => 'FrontendController@getForgotPassword'));
 
// Sign in processing --- 'before' => 'guest|csrf', 
Route::post('sign-me-in', array('before' => 'guest', 'as' => 'postSignIn', 'uses' => 'FrontendController@postSignIn'));

// Change language route (with redirect to Dashboard)
Route::get('change-language/{id}', array('as' => 'changeLang', 'uses' => 'CoreController@getChangeLanguage'));

// Change language route (with redirect back())
Route::get('switch-language/{id}', array('as' => 'switchLang', 'uses' => 'CoreController@getSwitchLanguage'));

// Sign out
Route::get('sign-out', array('before' => 'auth', 'as' => 'getSignOut', 'uses' => 'CoreController@getSignOut'));

// Update password when creating new user via social networks
Route::get('set-password', array('before' => 'auth', 'as' => 'getUpdatePassword', 'uses' => 'CoreController@getUpdatePassword'));

// Post update 
Route::post('update-informations', array('before' => 'auth', 'as' => 'postUpdatePassword', 'uses' => 'CoreController@postUpdatePassword'));

// Forgot password processing
Route::post('refresh-password', array('before' => 'csrf', 'as' => 'postForgotPassword', 'uses' => 'CoreController@postForgotPassword'));

// Reset password page
Route::get('reset-password/{token}', array('as' => 'getResetPassword', 'uses' => 'CoreController@getResetPassword'));;

// Post reset password
Route::post('new-password', array('before' => 'csrf', 'as' => 'postResetPassword', 'uses' => 'CoreController@postResetPassword'));

// Get verify e-mail
Route::get('verify-email', array('as' => 'getVerifyEmail', 'uses' => 'CoreController@getVerifyEmail'));

// Profile page
Route::get('profile', array('before' => 'auth', 'as' => 'getProfile', 'uses' => 'CoreController@getProfile'));

// Save profile changes
Route::post('save-profile', array('before' => 'csrf', 'as' => 'postProfile', 'uses' => 'CoreController@postProfile'));


  
