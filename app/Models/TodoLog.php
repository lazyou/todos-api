<?php

namespace App\Models;

/**
 * 待办项 操作日志
 * Class TodoLog
 * @package App\Models
 */
class TodoLog extends Base
{
    protected $table = 'todo_logs';

    protected $fillable = [
        'type',
        'from_user_id',
        'to_user_id',
    ];

    // TODO: 待办项操作类型, 太多了, 待定
}
