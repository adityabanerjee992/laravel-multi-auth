<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeachersLoginController extends Controller
{
     /**
	 * middleware 
	 */
    public function __construct()
	{
		$this->middleware('guest:teachers');
	}


	/**
	 * display the login form for the parent.
	 * @return view
	 */
    public function showLoginForm()
    {
    	return view('auth.forms.login.teacher-login-form');
    }


    /**
     * authenticate the parent 
     * @param  Request $request 
     * @return view
     */
    public function login(Request $request)
    {
    	$validator = $this->validate($request, [
    		'email'    => 'required|string|email|max:255',
    		'password' => 'required|string|min:6'
    	]);
		
		return $this->attemptLogin($request);	
	}


    /**
     * attempt login
     * @param  $request 
     * @return view
     */
    public function attemptLogin($request)
    {
    	$credentials = $this->createCredentials($request);

    	if (Auth::guard('teachers')->attempt($credentials)) {
    		return redirect()->route('home.teacher');
		}else{
			return redirect()->back();
		}
    }


    /**
     * create credentials array
     * @param  $request
     * @return array
    */
    public function createCredentials($request)
    {
    	$data = $request->except('_token');
    	$email = $data['email'];
    	$password = $data['password'];
    	return $data;
    }
}
