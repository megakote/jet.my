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
    protected $redirectTo = '/';

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
            'name' => 'required|string|max:255'
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
        $user_data = [
              'role_id' => ($data["role_id"] < 5) ? $data["role_id"] : 1,
              'email' => $data["email"] ?? null,
              'password' => $data["password"] ?? null,
              'surname' => $data["surname"] ?? null,
              'name' => $data["name"] ?? null,
              'patronymic' => $data["patronymic"] ?? null,
              'tel' => $data["tel"] ?? null,
              'skype' => $data["skype"] ?? null,
              'birth' => $data["birth"] ?? null,
              'height' => $data["height"] ?? null,
              'weight' => $data["weight"] ?? null,
              'avatar' => $data["avatar"] ?? null,
              'education' => $data["education"] ?? null,
              'experience' => $data["experience"] ?? null,
              'lang_skills' => $data["lang_skills"] ?? null,
              'city' => $data["city"] ?? null,
              'id_cart' => $data["id_cart"] ?? null,
              'visa' => $data["visa"] ?? null,
              'vs' => $data["vs"] ?? null,
        ];
        return User::create($user_data);
    }
}
