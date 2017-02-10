<?php

namespace App\Http\Controllers;
use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminLogin extends Controller {

    public function getAdminlogin() {
        return view('adminlogin');
    }

    public function postadminLogin(Request $request) {
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required'
    		]);
    	/*if(Auth::attempt(['email' => $request['email'], 'hash' => $request['password']])) {
    		return redirect()->intended(route('welcome'));

    	} else {
    		return redirect()->back()->with(['fail' => 'Username or Passwoed Incorrect']);
    	}*/
    	$admin = new admin();
    	$admin = admin::where('email', '=', $_REQUEST['email'])->first();
    		$hashed = $admin->hash;
    		$admin_id = $admin->admin_id;

    	$chk = $this->validatePassword($_REQUEST['password'], $hashed);
    	if(!$chk) {
    		return redirect()->back()->with(['fail' => 'Username or Password Incorrect']);
    		
    	} else {
    		$_SESSION['admin_id'] = $admin_id;
    		return view('welcome');
    	}
    }

    private function validatePassword($pass, $hash) {
    	return password_verify($pass, $hash);
    }
}
