<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model {
	
    public static function getAllProducts(){
			$prdt = Product::all();
			return $prdt;
		}

	
}
