<?php
/*
*	Core controller
*   
*	Extends Base controller, controlls main frontend layout
*/


class CoreController extends BaseController

{

	// Enviroment variables
	protected $layout;
	protected $repo;

	// Constructing default values
	public function __construct() {

		$this->layout = "frontend";
		$this->repo = new CoreRepository;

    }




	// Test function for various
	public function getTest()
	{
		return Redirect::route('getHome')->with('info_message', 'This is a test.');
	}


	/*
	 *	External pages (Example)
	 */

	// Show  Example page
	public function getExamplePage()
	{


		$this->layout->css_files = array(
 			'css/core/screen.css',
			'css/core/font-awesome.css'
		);

 		$this->layout->js_header_files = array(
			'js/vendor/scrollReveal.min.js',
			'js/core/home.js',
			'js/core/contact.js',
			'js/core/api.js'

		);

		$this->layout->content = View::make('core.examplepage');

	}

	public function adminsignin() {

		$this->layout->description = 'Dentist finder je aplikacija za povezivanje pacijenata i zubara';

		$this->layout->keywords = 'Dentist finder, dentist, zubari, pacijenti, pregled zuba';

		$this->layout->bodyclass = 'login-page';

		$this->layout->title = 'Prijava | Dentist finder';

		$this->layout->css_files = array( 
		);

		$this->layout->js_footer_files = array( 
		); 

		$this->layout->content = View::make('frontend.adminsignin', array('postRoute' => 'AdminLogIn'));
	}



	// Post sign in
	public function adminlogin()
	{
		Input::merge(array_map('trim', Input::all()));

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
			$user_language = 'en';

			Session::put('lang', $user_language);

			App::setLocale($user_language);

			return Redirect::route('getDashboard')->with('success_message', Lang::get('messages.sign_in_success'));

		}
		else
		{
			return Redirect::back()->with('error_message', Lang::get('messages.sign_in_error'))->withInput();
		}
	}


	// Do the sign out
	public function signout()
	{
		if (Auth::check())
		{
			Auth::logout();
			Session::flush();

			return Redirect::route('getHome')->with('info_message', Lang::get('messages.sign_out_success'));

		}

		else
		{
			return Redirect::route('getSignIn')->with('info_message', Lang::get('messages.sign_out_resign'));
		}

	}

  
}
