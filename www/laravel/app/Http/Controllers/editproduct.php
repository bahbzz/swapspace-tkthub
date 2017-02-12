<?php

	
	namespace App\Http\Controllers;
	use App\category;
	use App\product;
	use Illuminate\Http\Request;


	class Editproduct extends Controller {

		public function showEditProductpage($id) {
			return view('editproduct', ['cat'=>Category::getAllCategories(), 'prody'=>product::getProduct($id), 'id'=>$id]);
			
		}

		public function doEditProduct(Request $request, $id) {
			 $this->validate($request,[
				'name' =>'required',
				'auth' => 'required',
				'price' => 'required|numeric',
				'bkcat' => 'required'
				
				]);

			$n_prodct = product::getProduct($id);
			$n_prodct->category_id = $_REQUEST['bkcat'];
			$n_prodct->product_name = $_REQUEST['name'];
			$n_prodct->author_name = $_REQUEST['auth'];
			$n_prodct->price = $_REQUEST['price'];
			
			$n_prodct->save();

			return view('viewproduct', ['prdt' => product::all(), 'cat' => category::getAllCategories()]);
		}
	}
