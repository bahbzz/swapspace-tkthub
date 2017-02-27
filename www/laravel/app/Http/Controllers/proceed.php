<?php    

    namespace App;
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\product;
    use App\customers;

    class Proceed extends Controller {

    	public function GetProceed($id) {
    		return view('proceed', ['prody'=>product::getProduct($id), 'id'=>$id]);
    	}

    	public function postProceed(Request $request, $id) {

    		$this->validate($request, [
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email',
            'confirm_email' => 'same:email'
        ]);
    		$prody = product::getProduct($id);
    		$ticket = $prody->show_name;

    		$customer = new customers();
    		$customer->firstname = $request['firstname'];
    		$customer->lastname = $request['lastname'];
    		$customer->email = $request['email'];
    		$customer->ticket_bought = $ticket;

    		$customer->save();

    		return redirect()->route('welcome');
    	}
    }
