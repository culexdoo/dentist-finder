<?php

/*
*	BlogController
*
*	Handles backend functions
*/


class BlogController extends \BaseController {

	// Enviroment variables
	protected $repo;
	protected $moduleInfo;



	// Constructing default values
	public function __construct()
	{
		// Call CoreController constructor to get Layout and other variables
		parent::__construct();

		// Make module variables
		$this->repo = new BlogRepository;
 
	}

	/**
	 * Display a listing of the blog post(s).
	 *
	 * @return Response
	 */
	public function index()
	{
		/*

		$user = User::getUserInfos(Auth::user()->id); 

		if ($user['status'] == 0)
		{
			return Redirect::route('getSignIn')->with('error_message', Lang::get('messages.not_logged_in'));
		}
 
		// - AUTHORITY CHECK STARTS HERE - //
		$hasAuthority = false;

		switch ($user['user']->user_group)
		{ 
			case 'admin':
			// Admins should also have authority
			$hasAuthority = true;
			break; 

			default:
			return Redirect::route('getDashboard')->with('error_message', Lang::get('core.unauthorized_access'));
		}

		if ($hasAuthority == false) 
		{
			return Redirect::route('regionLanding')->with('error_message', Lang::get('core.unauthorized_access'));
		}
		// - AUTHORITY CHECK ENDS HERE - //

		*/
		$this->layout->title = 'Blog | Dentist finder';

		$this->layout->css_files = array(

		);

		$this->layout->js_footer_files = array(
			'js/backend/datatables.js',
		);

		$this->layout->content = View::make('backend.blog.index');
	}


	/**
	 * Show the form for creating a new blog post(s).
	 *
	 * @return Response
	 */
	public function create()
	{
		/*

		$user = User::getUserInfos(Auth::user()->id); 

		if ($user['status'] == 0)
		{
			return Redirect::route('getSignIn')->with('error_message', Lang::get('messages.not_logged_in'));
		}
 
		// - AUTHORITY CHECK STARTS HERE - //
		$hasAuthority = false;

		switch ($user['user']->user_group)
		{ 
			case 'admin':
			// Admins should also have authority
			$hasAuthority = true;
			break; 

			default:
			return Redirect::route('getDashboard')->with('error_message', Lang::get('core.unauthorized_access'));
		}

		if ($hasAuthority == false) 
		{
			return Redirect::route('regionLanding')->with('error_message', Lang::get('core.unauthorized_access'));
		}
		// - AUTHORITY CHECK ENDS HERE - //

		*/
		$this->layout->title = 'Blog | Dentist finder';

		$this->layout->css_files = array(

		);

		$this->layout->js_footer_files = array(
			'js/backend/datatables.js',
		);

		$this->layout->content = View::make('backend.blog.create');
	}


	/**
	 * Store a newly created blog post(s) in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified blog post(s).
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		/*

		$user = User::getUserInfos(Auth::user()->id); 

		if ($user['status'] == 0)
		{
			return Redirect::route('getSignIn')->with('error_message', Lang::get('messages.not_logged_in'));
		}
 
		// - AUTHORITY CHECK STARTS HERE - //
		$hasAuthority = false;

		switch ($user['user']->user_group)
		{ 
			case 'admin':
			// Admins should also have authority
			$hasAuthority = true;
			break; 

			default:
			return Redirect::route('getDashboard')->with('error_message', Lang::get('core.unauthorized_access'));
		}

		if ($hasAuthority == false) 
		{
			return Redirect::route('regionLanding')->with('error_message', Lang::get('core.unauthorized_access'));
		}
		// - AUTHORITY CHECK ENDS HERE - //

		*/
		$this->layout->title = 'Blog | Dentist finder';

		$this->layout->css_files = array(

		);

		$this->layout->js_footer_files = array(
			'js/backend/datatables.js',
		);

		$this->layout->content = View::make('backend.blog.view');
	}


	/**
	 * Show the form for editing the specified blog post(s).
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		/*

		$user = User::getUserInfos(Auth::user()->id); 

		if ($user['status'] == 0)
		{
			return Redirect::route('getSignIn')->with('error_message', Lang::get('messages.not_logged_in'));
		}
 
		// - AUTHORITY CHECK STARTS HERE - //
		$hasAuthority = false;

		switch ($user['user']->user_group)
		{ 
			case 'admin':
			// Admins should also have authority
			$hasAuthority = true;
			break; 

			default:
			return Redirect::route('getDashboard')->with('error_message', Lang::get('core.unauthorized_access'));
		}

		if ($hasAuthority == false) 
		{
			return Redirect::route('regionLanding')->with('error_message', Lang::get('core.unauthorized_access'));
		}
		// - AUTHORITY CHECK ENDS HERE - //

		*/
		$this->layout->title = 'Blog | Dentist finder';

		$this->layout->css_files = array(

		);

		$this->layout->js_footer_files = array(
			'js/backend/datatables.js',
		);

		$this->layout->content = View::make('backend.blog.edit');
	}


	/**
	 * Update the specified blog post(s) in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified blog post(s) from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
