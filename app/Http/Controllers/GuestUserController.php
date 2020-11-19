<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuestModel;

class GuestUserController extends Controller {
    
    public function __construct() {
        
    }

    public function add_guest_user() {
    	return view('pages.add_user');
    }

    public function save_guest_user(Request $request) {
        $this->validate($request, [
            'full_name' => 'required',
            'email'     => 'required|email|unique:guest_user',
            'phone'     => 'required|numeric|digits:10|unique:guest_user',
        ]);

        $data = new GuestModel;

        $data->full_name = $request->full_name;
        $data->email 	 = $request->email;
        $data->phone     = $request->phone;

        $data->save();

        return redirect()->back()->with('msg', 'User Created Succesfully');
    }
}
