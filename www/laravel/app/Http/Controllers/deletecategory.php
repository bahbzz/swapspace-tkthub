<?php

	
	namespace App\Http\Controllers;
	use App\category;
	use App\product;
	use Illuminate\Http\Request;

	class Deletecategory extends Controller {
		
		public function doDeleteCategory($id){
			
			$cat = Category::getCategory($id);
			
			$cat->delete();

			return view('viewcategory', ['cat' => category::getAllCategories()]);

		}
	}
