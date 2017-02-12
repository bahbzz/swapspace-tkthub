<?php

	
	namespace App\Http\Controllers;
	use App\category;
	use App\product;
	use Illuminate\Http\Request;

	class Deleteproduct extends Controller {


		public function DoDeleteproduct($id) {

			$prody = Product::getProduct($id);
			$prody->delete();

			return view('viewproduct', ['prdt' => product::all(), 'cat' => category::getAllCategories()]);
		}
	}
