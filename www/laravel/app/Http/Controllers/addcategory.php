<?php

	namespace App\Http\Controllers;
	use App\category;
	use Illuminate\Http\Request;


	class AddCategory extends Controller{
		

		public function getaddCategory() {
			
			return view('addcategory');
		}


		public function doAdd(Request $request) {

			 $this->validate($request, [
              'cname' => 'required|alpha'
        	]);
			
			$cat = new category();
			$cat->category_name = $_REQUEST['cname'];
			$cat->save();
			return view('addcategory');

		}

		
					

	}
