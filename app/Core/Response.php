<?php
namespace Core;

class Response
{
    public function __construct() {
    }
    
    private  function json(mixed $data, int $status = 200) : never
    {
        header('Content-Type: application/json');
        http_response_code($status);
        echo json_encode($data);
        exit();
    }

    public  function error(mixed $message, int $status = 400) : never
    {
        $this->json(['error' => $message], $status);
        exit();
    }

    public  function success(mixed $data = null, int $status = 200) : never
    {
        $this->json(['data' => $data], $status);
        exit();
    }

    public  function custom(mixed $data = array(), int $status = 200) : never{
        $this->json($data, $status);
        exit();
    }
    

    public  function notFound() : never
    {
        $this->error('Not Found', 404);
        exit();
    }
}