<?php

	
	namespace App\Http\Controllers;
	use App\category;
	use Illuminate\Http\Request;


class Editcategory extends Controller {

	public function geteditCategory($id) {
		return view('editcategory', ['cat' => category::getCategory($id), 'id'=>$id]);
	}

	public function doEditCategory(Request $request, $id) {

		$this->validate($request,[
		'cname' => 'required|alpha dash|alpha'
		]);

		$cat = category::getCategory($id);
		$cat->category_name = $_REQUEST['cname'];
		$cat->save();

		

		return view('viewcategory', ['cat' => category::getAllCategories()]);
	}
}
