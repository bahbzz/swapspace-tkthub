<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model {
	
    public static function getAllCategories(){
			$cat = category::all();
			return $cat;
	}
}
