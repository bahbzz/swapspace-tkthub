<?php

	
	namespace App\Http\Controllers;
	use App\category;
	use Illuminate\Http\Request;
	use App\product;
	
		
	class AddProduct extends Controller {
		

		public function showProductpg() {
			return view('addproduct', ['cat'=>category::getAllCategories()]);
		}

		public function doAddProducts(Request $request) {
			 

			 	 
			 
			 $this->validate($request,[
				'name' =>'required',
				'auth' => 'required',
				'price' => 'required|numeric',
				'bkcat' => 'required',
				'pic' => 'required'
				
				]);
			 	$rnd = uniqid(rand(0, 9), true);
			 	$imageName = $rnd . '.' .$request->file('pic')->getClientOriginalExtension();

    			$request->file('pic')->move(
        		base_path() . '/public/uploads/', $imageName
    			);

				$n_prodct = new Product();
				$n_prodct->category_id = $_REQUEST['bkcat'];
				$n_prodct->product_name = $_REQUEST['name'];
				$n_prodct->author_name = $_REQUEST['auth'];
				$n_prodct->image = $imageName;
				$n_prodct->price = $_REQUEST['price'];
				$n_prodct->save();

				

    			return view('addproduct',['cat'=>Category::getAllCategories()]);

				

			}
		
		
    	}			
		
	
