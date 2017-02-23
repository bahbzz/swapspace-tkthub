<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model {
	protected $primaryKey = 'show_id';
	
    public static function getAllProducts(){
			$prdt = Product::all();
			return $prdt;
		}

	public static function getProduct($id) {
			$prody = Product::where("show_id", '=', $id)->first();
			return $prody;
		}
	
}
