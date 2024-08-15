<?php 
namespace Core\Traits;
trait Response
{
    public function success(mixed $data = array(), int $status = 200) : never{
        $response = new \Core\Response();
        $response->success($data, $status);
        exit();
    }

    public function error(mixed $data = "ERROR", int $status = 500) : never{
        $response = new \Core\Response();
        $response->error($data, $status);
        exit();
    }
    public function response(mixed $data = null, int $status =200) : never{
        $response = new \Core\Response();
        $response->custom($data, $status);
        exit();
    }
}
