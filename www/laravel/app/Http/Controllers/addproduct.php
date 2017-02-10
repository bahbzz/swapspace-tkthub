<?php

	
	namespace App\Http\Controllers;
	use App\category;
	use Illuminate\Http\Request;
	use\libs\fileupload as Uploader;
	use App\product;
	
		
	class AddProduct extends Controller {
		

		public function showProductpg() {
			return view('addproduct', ['cat'=>Category::getAllCategories()]);
		}

		public function doAddProducts(Request $request) {
			 
			 $this->validate($request,[
				'name' =>'required|!numeric',
				'auth' => 'required|!numeric',
				'price' => 'required|numeric',
				'bkcat' => 'nulltype'
				
				]);

			$fp = new Uploader(['image/jpg','image/jpeg', 'image/png'], 2097152, $_ENV['HOUSE'].'/www/uploads/', $_FILES['pic'], '/uploads/');
				$res = $fp->doUpload();

			if($res[0] == FALSE) {
				$error['pic'] = $res[1];
			}
			//dump($error);
			//exit();

			if(empty($error)){
			
				$n_prodct = new Product();
				$n_prodct->category_id = $_REQUEST['bkcat'];
				$n_prodct->product_name = $_REQUEST['name'];
				$n_prodct->author_name = $_REQUEST['auth'];
				$n_prodct->image = $res[1];
				$n_prodct->price = $_REQUEST['price'];
				$n_prodct->save();
				

				header("Location: /addproducts");

			} else {
				
				echo $this->blade->render('addproducts', ["errors"=>$error, 'cat'=>Category::getAllCategories()]);
			}
		}


		
	}
