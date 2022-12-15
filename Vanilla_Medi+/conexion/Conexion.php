<?php
class Conexion
{

   
    private $server = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'empresa';

    public function conectar(){
        return new mysqli($this->server,$this->user,$this->pass,$this->dbname);
    }

}

