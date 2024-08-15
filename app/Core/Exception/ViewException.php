<?php
namespace Core\Exception;

use Core\Views;
use Exception;
use Throwable;

class ViewException extends Exception
{
    public function __construct(string $message = "404 PAGE NOT FOUND", int $code = 404, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        Views::setTitle("404");
        Views::setMessage($message);
        Views::errorPage();
    }
}