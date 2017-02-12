<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model {
	protected $primaryKey = 'category_id';
	
    public static function getAllCategories(){
		$cat = category::all();
		return $cat;
	}

	public static function getCategory($id) {
		$caty = category::where("category_id", '=', $id)->first();
		return $caty;
		}
}
