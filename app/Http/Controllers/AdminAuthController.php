<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuestModel;

class AdminAuthController extends Controller {

    public function __construct() {
        $this->middleware('guest:admin');
    }

    public function guest_user_list() {

    	$data = GuestModel::paginate(10);
    	return view('pages.guest_user_list', ['users' => $data]);
    }
}
