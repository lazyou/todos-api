<?php

namespace App\Models;

/**
 * 待办项
 * Class Todo
 * @package App\Models
 */
class Todo extends Base
{
    protected $table = 'todos';

    protected $fillable = [
        'project_id',
        'parent_id',
        'name',
        'child_count',
        'done_count',
        'type',
        'status',
        'assigned_user_id',
        'done_user_id',
        'expect_done_at',
        'actual_done_at',
        'created_user_id',
    ];

    // 待办项 类型
    const TYPE_GROUP= 1;
    const TYPE_MODULE = 2;
    const TYPE_TODO = 3;
    const TYPE_ARR = [
        self::TYPE_GROUP => '分组',
        self::TYPE_MODULE => '模块',
        self::TYPE_TODO => '待办项',
    ];

    // 待办项 状态
    const STATUS_READY = 1;
    const STATUS_DOING = 2;
    const STATUS_DONE = 3;
    const STATUS_REMOVED = 4;
    const STATUS = [
        self::STATUS_READY => '未开始',
        self::STATUS_DOING => '进行中',
        self::STATUS_DONE => '已完成',
        self::STATUS_REMOVED => '被移除',
    ];
}
