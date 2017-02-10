<?php

	namespace App\Http\Controllers;
	use App\category;

	class ViewCategory extends Controller {

		
		public function getviewCategory () {
			
			return view('viewcategory',['cat' => category::getAllCategories()]);	
		}


	}
