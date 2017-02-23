<?php    

    namespace App;
    namespace App\Http\Controllers;
    use App\product;

    class Shows extends Controller {

    	public function Getshows() {

    		return view('shows', ['prdt' => product::all()]);
    	}
    }
