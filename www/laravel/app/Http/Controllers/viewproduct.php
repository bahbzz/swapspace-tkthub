<?php

	namespace App\Http\Controllers;
	use App\category;
	use App\product;

	class ViewProduct extends Controller {

		public function getviewProduct() {

			return view('viewproduct',['prdt' => product::paginate(5)]);
		}
	}
