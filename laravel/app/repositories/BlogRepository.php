<?php

/*
*	BlogRepository 
*
*	Handles backend functions
*/



class BlogRepository {
 
    public function __construct(){

    }
 
 

	/**
	 * Store a newly created blog post(s) in storage.
	 *
	 * @return Response
	 */
	public function store($title)
	{
		try {

			$entry = new Blog;
			$entry->title = $title;
			$entry->save();

			return array('status' => 1);
		}

		catch (Exception $exp)
		{
			return array('status' => 0, 'reason' => $exp->getMessage());
		}
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
