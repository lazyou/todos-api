<?php

namespace App\Models;

/**
 * 代办操作日志消息记录
 * Class TodoUserLog
 * @package App\Models
 */
class TodoUserLog extends Base
{
    protected $table = 'TodoUserLog';

    protected $fillable = [
        'todo_log_id',
        'status',
    ];

    // 阅读状态
    const STATUS_READ = 1;
    const STATUS_UNREAD = 2;
    const STATUS_ARR = [
        self::STATUS_READ => '已读',
        self::STATUS_UNREAD => '未读',
    ];
}
