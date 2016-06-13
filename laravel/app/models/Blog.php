<?php

class Blog extends Eloquent
{
	protected $table = 'blog';
 
	// New entry validation
	public static $create_rules = array(
		'title'					=>	'required'
	);
 
	// Edit entry validation
	public static $store_rules = array(
		'id'				=>	'required|integer',
 		'title'				=>	'required|integer'
	);
 
}