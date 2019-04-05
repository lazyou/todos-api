<?php

namespace App\Http\Requests;

use App\Exceptions\ApiValidationException;
use Illuminate\Http\Request;

/**
 * 表单验证基类: 在构造器完成表单验证, 达到注入运行的效果
 * Class BaseRequest
 * @package App\Http\Requests
 */
class BaseRequest
{
    public $request;

    public $validator;

    public function __construct()
    {
        $this->request = app('request');
        $this->validator = app('validator');

        $validator = $this->validator->make(
            $this->request->all(),
            $this->rules(),
            $this->messages(),
            $this->attributes()
        );

        if ($validator->fails()) {
            throw new ApiValidationException($validator);
        }
    }

    // 为了方便表单验证后能继续调用 Request 类里的方法，估计会不支持某些方法
    public function __call($name, $args)
    {
        $args = isset($args[0]) ? $args[0] :$args;

        return call_user_func([$this->request, $name], $args);
    }

    /**
     * 验证规则
     * @return array
     */
    protected function rules()
    {
        return [];
    }

    /**
     * 错误字段别名设置
     * @return array
     */
    protected function messages()
    {
        return [
//            'password' => '密码',
        ];
    }

    /**
     * 错误消息覆盖
     * @return array
     */
    protected function attributes()
    {
        return [
//            'password.required' => '密码至少x位字符串, 且不能超过y位字符串',
        ];
    }
}