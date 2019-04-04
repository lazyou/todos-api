<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Base implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    // 性别
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;
    const GENDER_UNKNOWN = 3;
    const GENDER_ARR = [
        self::GENDER_MALE => '男',
        self::GENDER_FEMALE => '女',
        self::GENDER_UNKNOWN => '未知',
    ];
}
