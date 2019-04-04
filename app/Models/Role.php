<?php

namespace App\Models;

/**
 * 角色
 * Class Role
 * @package App\Models
 */
class Role extends Base
{
    protected $table = 'Roles';

    protected $fillable = [
        'name',
        'type',
    ];

    // 角色类型
    const TYPE_ADMIN = 1;
    const TYPE_NORMAL = 2;
    const TYPE_ARR = [
        self::TYPE_ADMIN => '管理员',
        self::TYPE_NORMAL => '普通用户',
    ];
}
