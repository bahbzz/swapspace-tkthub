<?php

namespace App\Http\Controllers;
use App\admin;
use Illuminate\Http\Request;

class AdminRegister extends Controller {

    public function getadminRegister() {
        return view('adminregister');
    }

    public function postAdminregister(Request $request) {

        $this->validate($request, [
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email',
            'password' => 'required',
            'pword' => 'same:password'
        ]);

        $admin = new admin();
        $admin->firstname = $request['firstname'];
        $admin->lastname = $request['lastname'];
        $admin->email = $request['email'];
        $admin->hash = bcrypt($request['pword']);
        $admin->save();

        return view('adminlogin');
    }
}
