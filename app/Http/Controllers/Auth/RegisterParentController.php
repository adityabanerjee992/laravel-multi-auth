<?php

namespace App\Http\Controllers\Auth;

use App\Parents;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterParentController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new parent as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/parent';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:parents');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:parents',
            'user_name' => 'required|string|max:255',
            'work_place' => 'required|string',
            'position' => 'required|string',
            'children' => 'required|numeric',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Parents
     */
    protected function create(array $data)
    {
        return Parents::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'user_name' => $data['user_name'],
            'work_place' => $data['user_name'],
            'date_of_birth' => '2017-05-10 06:59:02',
            'position' => $data['position'],
            'children' => $data['children'],
            'payment_type_id' => 1,
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    public function guard()
    {   
        return Auth::guard('parents');
    }

    /**
     * Show the application registration form for the parent.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationFormParent()
    {
        return view('auth.register-parent');
    }


}
