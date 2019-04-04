<?php

namespace App\Models;

/**
 * 项目
 * Class Project
 * @package App\Models
 */
class Project extends Base
{
    protected $table = 'projects';

    protected $fillable = [
        'name',
        'description',
        'created_user_id',
    ];
}
