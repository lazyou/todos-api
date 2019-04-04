<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 模型基类
 * Class Base
 * @package App\Models
 */
class Base extends Model
{
    use SoftDeletes;
}
