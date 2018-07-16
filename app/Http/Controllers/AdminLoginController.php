<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    /**
     * Gaurd Middlware for Admin
     */
    public function __construct()
    {
    	$this->middleware('guest:admin');
    }

    /**
     * Show Login Form For Admin
     *
     * @return void
     *
     */
    public function showLoginForm()
    {
    	return view('auth.admin-login');
    }

    /**
     * Authenticate Admin For Login
     *
     * @param $request from Illuminate\Http\Request;
     * @return void
     *
     */
    public function login(Request $request)
    {
    	$this->validate($request,[
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);
    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    		return redirect()->intended('/admin');
    	}
    	return redirect()->back()->withInput($request->only('email','remember'));
    }


}
