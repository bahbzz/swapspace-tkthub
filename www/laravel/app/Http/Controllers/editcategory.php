<?php

	
	namespace App\Http\Controllers;
	use App\category;
	use Illuminate\Http\Request;


class Editcategory extends Controller {

	public function geteditCategory($id) {
		return view('editcategory', ['cat' => category::getCategory($id), 'id'=>$id]);
	}
}
