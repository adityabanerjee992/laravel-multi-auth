<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Child;
use Validator;
use App\Parents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterStudentController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new students as well as their
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
    protected $redirectTo = '/student';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:students');
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
            'name'         => 'required|string|max:255',
            'email'        => 'required|string|email|max:255|unique:children',
            'user_name'    => 'required|string|max:255|unique:children',
            'school_name'  => 'required|string',
            'parent_email' => 'required|email|exists:parents,email',
            'password'     => 'required|string|min:6|confirmed',
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
        return Child::create([
            'name'          => $data['name'],
            'email'         => $data['email'],
            'user_name'     => $data['user_name'],
            'school_name'   => $data['school_name'],
            'date_of_birth' => '2017-05-10 06:59:02',
            'parents_id'    => Parents::getIdFromEmail($data['parent_email']),
            'plan_id'       => 1,
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
        return Auth::guard('students');
    }


    /**
     * Show the application registration form for the parent.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationFormStudent()
    {
        return view('auth.register-student');
    }


}
