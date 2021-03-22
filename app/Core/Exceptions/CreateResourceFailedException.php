<?php


namespace App\Core\Exceptions;


use App\Core\Parents\Exceptions\Exception;

class CreateResourceFailedException extends Exception
{
    public $httpStatusCode = 417;

    public $message = 'Failed to create Resource.';
}
