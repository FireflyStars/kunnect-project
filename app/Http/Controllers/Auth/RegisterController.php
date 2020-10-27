<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\State;
use App\City;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required', 'integer'],
            'plan' => ['required', 'integer'],
            'city' => ['required', 'integer'],
            'state' => ['required', 'integer'],
            'country' => ['required', 'integer'],
            'dob' => ['required', 'string']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd("perfect");
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'city' => $data['city'],
            'state' => $data['state'],
            'country' => $data['country'],
            'dob' => $data['dob'],
            'gender' => $data['gender'],
            'role' => 0,
            'plan' => $data['plan'],
            'password' => Hash::make($data['password']),
        ]);
    }
    
    public function sendStatesByCountry($id){
        $states = State::where('country_id', $id)->select(['name', 'id'])->get();
        return response()->json(['states'=> $states]);
    }

    public function sendCitiesByState($id){
        $cities = City::where('state_id', $id)->select(['name', 'id'])->get();
        return response()->json(['cities'=> $cities]);
    }

    /**
     * check username 
     * @param username
     * 
     * @return  TRUE|False 
     */
    public function checkUsername($username){
        if(User::where('username', $username)->count())
            return response()->json(['exist'=> true]);
        else
            return response()->json(['exist'=> false]);
    }
}
