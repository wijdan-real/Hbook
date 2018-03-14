<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Post;
use App\UserProfile;
use App\HotelProfile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/userprofile';

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
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
        $user = User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'role'=>request('role'),
            'password' => bcrypt($data['password'])
        ]);
if(request()->role=='simpleuser') {
    UserProfile::create([
        'user_id' => $user->id,

    ]);
}
        else
        {
           HotelProfile::create([
               'user_id' => $user->id,
           ]);
        }
       // Post::create([
        // 'user_id' => $user->id,
     // ]);


         return $user;

    }
    public function redirectPath()
    {
        if (Auth::user()->role=='hottler') {
            return '/hotelprofile';
        }


        return '/userprofile';
    }

}
