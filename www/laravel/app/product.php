<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model {
	protected $primaryKey = 'product_id';
	
    public static function getAllProducts(){
			$prdt = Product::all();
			return $prdt;
		}

	public static function getProduct($id) {
			$prody = Product::where("product_id", '=', $id)->first();
			return $prody;
		}
	
}
