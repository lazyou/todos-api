<?php

namespace App\Http\Requests;

/**
 * 用户注册表单验证
 * Class UserRegisterRequest
 * @package App\Http\Requests
 */
class UserRegisterRequest extends BaseRequest
{
    public function rules()
    {
        $rules = [
            'name' => [
                'required',
                'min:3',
                'max:10',
                'unique:users',
            ],

            'password' => [
                'required',
                'min:6',
                'max:20',
            ]
        ];

        return $rules;
    }

    public function attributes()
    {
        return [
            'name' => '用户名',
            'password' => '密码',
        ];
    }
}