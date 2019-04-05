<?php

namespace App\Exceptions;

use Exception;

/**
 * Api 表单验证异常
 * Class ApiValidationException
 * @package App\Exceptions
 */
class ApiValidationException extends Exception
{
    public $validator;

    public function __construct($validator)
    {
        parent::__construct('The request data validation error.');

        $this->validator = $validator;
    }
}
