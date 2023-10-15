<?php

    class Conexion extends PDO{
        private $hostDB ='localhost';
        private $nombreDB ='sitiosturisticos';
        private $usuarioDB ='root';
        private $passDB ='';

        public function __construct(){

            try {
                parent::__construct('mysql:host='.$this->hostDB.';dbname='.
                $this->nombreDB.';charset=UTF8',$this->usuarioDB,
                $this->passDB,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            }catch (Exception $th) {
                echo 'error:'.$th->getMessage();
                exit;
            }
           
        } 
    }

?>