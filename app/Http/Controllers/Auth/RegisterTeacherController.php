<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Validator;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterTeacherController extends Controller
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
    protected $redirectTo = '/teacher';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:teachers');
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
            'name'        => 'required|string|max:255',
            'email'       => 'required|string|email|max:255|unique:teachers',
            'user_name'   => 'required|string|max:255|unique:teachers',
            'school_name' => 'required|string',
            'position'    => 'required|string',
            'password'    => 'required|string|min:6|confirmed',
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
        return Teacher::create([
            'name'          => $data['name'],
            'email'         => $data['email'],
            'user_name'     => $data['user_name'],
            'school_name'   => $data['school_name'],
            'date_of_birth' => '2017-05-10 06:59:02',
            'position'      => $data['position'],
            'password'      => bcrypt($data['password']),
        ]);
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    public function guard()
    {   
        return Auth::guard('teachers');
    }

    /**
     * Show the application registration form for the parent.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationFormTeacher()
    {
        return view('auth.register-teacher');
    }
}
