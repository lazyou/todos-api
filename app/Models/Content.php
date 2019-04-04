<?php

namespace App\Models;

/**
 * 内容 | 评论 | 模块描述
 * Class Content
 * @package App\Models
 */
class Content extends Base
{
    protected $table = 'contents';

    protected $fillable = [
        'source_id',
        'type',
        'content',
    ];
}
