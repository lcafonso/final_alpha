<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $string = $user->name;
        $first_name = explode(' ', trim($string))[0];
        $last_name_start = strrpos($string, ' ') + 1;
        $last_name = substr($string, $last_name_start);

        $user->profile()->create([
            'name'  => $first_name,
            'surname'  => $last_name,
            'body' => 'novo registro',
            'file'  => 'img/users/default-user.jpg',
            'local' => 'Nao definido',
            'country' => 'Nao definido',
            'birth' => '1999-01-01',
            'genre' => 'MALE',
            'social1' => 'Nao definido',
            'social2' => 'Nao definido' ,
            'social3' => 'Nao definido',
            'web' => 'Nao definido',
            'phone' => 'Nao definido',
            'role_id' => 3,
        ])->make();

        return $user;
    }
}
