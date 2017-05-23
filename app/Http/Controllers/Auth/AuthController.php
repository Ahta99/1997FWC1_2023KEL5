<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\pelanggan;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
	protected $username = 'username';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'username' => 'required|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
			
        ]);
		return Validator::make($data1, [
            'nama' => 'required|max:50',
            'alamat' => 'required',
			'No_KTP' => 'required',
			'Nomor_Telepon' => 'required',
			
        ]);
		
		
		
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
			'level' => "User",
        ]);
		
		return pelanggan::create([
            'nama' => $data1['nama'],
            'alamat' => $data1['alamat'],
			'No_KTP' => $data1['No_KTP'],
			'Nomor_Telepon' => $data1['Nomor_Telepon'],
			'id_pengguna' => User()->id,
        ]);
		
    }
}
