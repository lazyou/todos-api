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

    /* 操作类型 start */
    // 分组, 模块, 待办项公共部分
    const TYPE_CREATE = 1;
    const TYPE_CHANGE = 2;
    const TYPE_DELETE = 3;

    // 模块, 待办项 共有部分
    const TYPE_DISPATCH = 11;
    const TYPE_CREATE_DONE_DATE = 12;
    const TYPE_CHANGE_DONE_DATE = 13;

    // 模块, 待办项 共有部分
    const TYPE_MARK_DOING = 21;
    const TYPE_MARK_PAUSE = 22;
    const TYPE_MARK_DONE = 23;
    const TYPE_MARK_REOPEN = 24;

    // 模块 独有部分
    const TYPE_CREATE_DESCRIPTION = 31;
    const TYPE_CHANGE_DESCRIPTION = 32;
    /* 操作类型 end */

    const TYPE_ARR = [
        self::TYPE_CREATE => '创建',
        self::TYPE_CHANGE => '修改',
        self::TYPE_DELETE => '删除',

        self::TYPE_DISPATCH => '指派',
        self::TYPE_CREATE_DONE_DATE => '设置截至时间',
        self::TYPE_CHANGE_DONE_DATE => '修改截至时间',

        self::TYPE_MARK_DOING  => '进行中',
        self::TYPE_MARK_PAUSE  => '暂停',
        self::TYPE_MARK_DONE   => '完成',
        self::TYPE_MARK_REOPEN => '重新打开',

        self::TYPE_CREATE_DESCRIPTION => '创建模块描述',
        self::TYPE_CHANGE_DESCRIPTION => '修改模块描述',
    ];
}
