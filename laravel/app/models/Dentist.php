<?php

class Dentist extends Eloquent
{
	protected $table = 'dentist';
 
	// New entry validation
	public static $store_rules = array(
		'image'					=>	'required'
	);
 
	// Edit entry validation
	public static $update_rules = array(
		'id'					=>	'required|integer'
	);
 
	/*
	*	Get entries  
	*	
	*	$id 		->	integer or null	->	if ID, retrieve specific entry
	*	$items		->	integer	or null ->	number of items to retrieve, fallback to all 
	*/
	public static function getEntries($id = null, $items = null)
	{
		try
		{
			$entry = DB::table('dentist') 
				->select(
					'dentist.id AS id',
					'dentist.image AS image'  
				);
			
			
			if ($id != null)
			{
				// Retrieve specific entry
				$entry = $entry->where('dentist.id', '=', $id)->first();
				return array('status' => 1, 'entry' => $entry);
			}

			// Default return
			$entries = $entry; 
		  
			if ($items == null)
			{
				// Return all entries
				$entries = $entries->get();
			}
			else
			{
				// Return specific number of entries
				$entries = $entries->take($items)->get();
			}

			return array('status' => 1, 'entries' => $entries);
		}
		catch (Exception $exp)
		{
			return array('status' => 0, 'reason' => $exp->getMessage());
		}
	}


}