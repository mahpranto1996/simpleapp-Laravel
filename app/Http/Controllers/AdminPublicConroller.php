<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminPublicConroller extends Controller {
    
    public function __construct() {
        
    }

    public function login() {
    	return view('pages.login');
    }

    public function auth(Request $request) {

        $this->validate($request, [
            'phone'    => 'required|numeric|digits:10',
            'password' => 'required|min:5'
        ]);

        if (Auth::guard('admin')->attempt(['phone' => $request->phone, 'password' => $request->password, 'is_active' => 1])) {
            return redirect()->intended('/guestUsers');
        }

        return back()->withInput($request->only('phone'))->with('msg', 'Wrong Username or Password!');
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
