<?php

namespace App\Models;

/**
 * 标签
 * Class Tag
 * @package App\Models
 */
class Tag extends Base
{
    protected $table = 'tags';

    protected $fillable = [
        'name',
        'created_user_id',
    ];
}
