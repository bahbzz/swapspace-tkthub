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
				'artist' => 'required',
				'price' => 'required|numeric',
				'date' => 'required',
				'time' => 'required',
				'pic' => 'required'
				
				]);
			 	$rnd = uniqid(rand(0, 9), true);
			 	$imageName = $rnd . '.' .$request->file('pic')->getClientOriginalExtension();

    			$request->file('pic')->move(
        		base_path() . '/public/uploads/', $imageName
    			);

				$n_prodct = new Product();
				$n_prodct->date = $_REQUEST['date'];
				$n_prodct->show_name = $_REQUEST['name'];
				$n_prodct->artist_name = $_REQUEST['artist'];
				$n_prodct->image = $imageName;
				$n_prodct->price = $_REQUEST['price'];
				$n_prodct->time = $_REQUEST['time'];
				$n_prodct->description = $_REQUEST['desc'];
				$n_prodct->save();
						

    			return view('addproduct');

				

			}
		
		
    	}			
		
	
