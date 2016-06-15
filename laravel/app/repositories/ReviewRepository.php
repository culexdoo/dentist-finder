<?php 

/*
*	ReviewRepository 
*
*	Handles backend functions
*/



class ReviewRepository {
 
    public function __construct(){

    }
 
 

	/**
	 * Store a newly created review(s) in storage.
	 *
	 * @return Response
	 */
	public function store($title, $permalink, $intro, $content, $status, $image = null)
	{ 
		try {
 
			$entry = new Review;
			$entry->title 	= $title;
			$entry->permalink = $permalink;
			$entry->intro 	= $intro;
			$entry->content = $content;
			$entry->status 	= $status;

			if ($image != null)
			{
				// Image data
				$largeImagePath = public_path() . "/uploads/frontend/review/";
				$thumbImagePath = public_path() . "/uploads/frontend/review/thumbs/";

				// Image name is the same in thumbs and full size image
				$extension = $image->getClientOriginalExtension(); // getting image extension
				$imagename = $permalink . '-' . (substr(md5(rand(1, 9)), 0, 5)) . '-' . date("Y-m-d.") . $extension; // renaming image

				$uploadSuccess = Image::make($image->getRealPath())
					->orientate()
					->fit(768, 1024)
					->save($largeImagePath . $imagename) // original
					->crop(768, 768)
					->resize(500, 500)
					->save($thumbImagePath . $imagename) // thumb
					->destroy();

				if ($uploadSuccess)
				{
					$entry->image = $imagename;
				}
			} 

			$entry->save();

			return array('status' => 1);
	 	} 

		catch (Exception $exp)
		{
			return array('status' => 0, 'reason' => $exp->getMessage());
		}   
	}
 
	/**
	 * Update the specified review(s) in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, $title, $permalink, $intro, $content, $status, $image = null)
	{
    	try {
 
			$entry = Review::find($id);
			$entry->title 		= $title;
			$entry->permalink 	= $permalink;
			$entry->intro 		= $intro;
			$entry->content 	= $content;
			$entry->status 		= $status;
 			$oldImage = $entry->image;

			if ($image != null)
			{
				// Image data
				$largeImagePath = public_path() . "/uploads/frontend/review/";
				$thumbImagePath = public_path() . "/uploads/frontend/review/thumbs/";

				// Image name is the same in thumbs and full size image
				$extension = $image->getClientOriginalExtension(); // getting image extension
				$imagename = $permalink . '-' . (substr(md5(rand(1, 9)), 0, 5)) . '-' . date("Y-m-d.") . $extension; // renaming image

				$uploadSuccess = Image::make($image->getRealPath())
					->orientate()
					->fit(768, 1024)
					->save($largeImagePath . $imagename) // original
					->crop(768, 768)
					->resize(500, 500)
					->save($thumbImagePath . $imagename) // thumb
					->destroy();

				if ($uploadSuccess)
				{
					$largeOldImagePath = public_path() . "/uploads/frontend/review/" . $oldImage;
					$thumbOldImagePath = public_path() . "/uploads/frontend/review/"  . $oldImage;

					if (File::exists($largeOldImagePath))
					{
						File::delete($largeOldImagePath);
					}
					if (File::exists($thumbOldImagePath))
					{
						File::delete($thumbOldImagePath);
					}

					$entry->image = $imagename;
				}
			}

			$entry->save();

			return array('status' => 1);
		} 

		catch (Exception $exp)
		{
			return array('status' => 0, 'reason' => $exp->getMessage());
		} 	
	}


	/**
	 * Remove the specified review(s) from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try
		{
			$entry = Review::find($id);

			$entry->delete();

			$largeOldImagePath = public_path() . "/uploads/frontend/review/" . $entry->image;

			$thumbOldImagePath = public_path() . "/uploads/frontend/review/thumbs/"  . $entry->image;

			if (File::exists($largeOldImagePath))
			{
				File::delete($largeOldImagePath);
			}

			if (File::exists($thumbOldImagePath))
			{
				File::delete($thumbOldImagePath);
			}

			return array('status' => 1);
		}
		catch (Exception $exp)
		{
			return array('status' => 0, 'reason' => $exp->getMessage());
		}
	}

}
