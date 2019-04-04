<?php

namespace App\Models;

/**
 * 项目(参与)用户
 * Class ProjectUser
 * @package App\Models
 */
class ProjectUser extends Base
{
    protected $table = 'project_users';

    protected $fillable = [
        'project_id',
        'user_id',
        'status',
    ];

    // 用户项目状态
    const STATUS_ENABLE = 1;
    const STATUS_DISABLE = 2;
    const STATUS_READ_ONLY = 3;
    const STATUS_ARR = [
        self::STATUS_ENABLE => '激活',
        self::STATUS_DISABLE => '禁用',
        self::STATUS_READ_ONLY => '只读',
    ];
}
