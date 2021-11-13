<?php

namespace App\Controllers;

use Database\DBConncection;

abstract class Controller{

    protected $db;

    public function __construct(DBConncection $db){

        $this->db = $db;
    }

    protected function view(string $path, array $params = null){
       ob_start();
       $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
       require VIEWS . $path . '.php';
       $content = ob_get_clean();
       require VIEWS . 'layout.php';
    }


    protected function getDB(){
        return $this->db;
    }
}
 