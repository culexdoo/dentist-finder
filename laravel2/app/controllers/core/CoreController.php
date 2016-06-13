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
  
}
