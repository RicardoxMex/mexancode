<?php
namespace Core;
use Exception;

class Template
{
    private string $content;
    public function __construct(string $path, array $data = [])
    {
        if(isset($data[0])){
            /** @psalm-suppress MixedArgument */
            extract($data[0]);
        }else{
            extract($data);
        }
        ob_start();
        try {
           /** @psalm-suppress MixedArgument */
           if(file_exists($path)){
              
                include($path);
           }else{
             
           }
          
        } catch (Exception $th) {
            echo $th->getMessage();
        }
        $this->content = ob_get_clean();
        //$this->content = $this->minifyHtml($this->content);
    }

    public function __toString()
    {
        return $this->content;
    }

    private function minifyHtml(string $html): string
    {
        // Remover espacios en blanco y comentarios para minificar
        $html = preg_replace('/\s+/', ' ', $html);
        $html = preg_replace('/<!--.*?-->/', '', $html);

        return $html;
    }
}
