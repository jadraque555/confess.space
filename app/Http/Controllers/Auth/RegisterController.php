<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            // 'email' => 'required|string|email|max:255|unique:users',
            // 'username' => 'required|string|max:255|unique:users',
            // 'password' => 'required|string|min:6|confirmed',
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
        $username = '';
        $password = $this->gen_pin(6);
        $count = 0;

        for (;;) {
            $count++;

            $username = $this->gen_uid(8);

            if($this->usernameIfExist($username) == false) {
                break;
            }
        }

        return User::create([
            'name' => $data['name'],
            'username'   => $username,
            'secret_key' => $password,
            'password'   => bcrypt($password),
        ]);
    }

    public function gen_uid($l=10){
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, $l);
    }

    public function gen_pin($l=10){
        return substr(str_shuffle("0123456789"), 0, $l);
    }

    public function usernameIfExist($username) {

        $user = User::where('username', '=', $username)->first();

        return $user ? true : false;
    }
    // public function getRandomWord($len = 10) {
    //     $word = array_merge(range('a', 'z'), range('A', 'Z'));
    //     shuffle($word);
    //     return substr(implode($word), 0, $len);
    // }
}
