<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;

class UserController extends Controller
{
    public function __construct()
    {
        //
    }

    public function register(UserRegisterRequest $request)
    {
        $input = $request->only([
            'name',
            'email',
            'gender',
            'password',
        ]);

        dd($input);
    }
}
