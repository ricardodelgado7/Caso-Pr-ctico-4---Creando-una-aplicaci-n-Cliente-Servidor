<?php
    class Sitios{
        public function InsertarSitios($centroturistico,$ubicacion,$telefono){
            //CREATE SITIOS
            include 'Conexion.php';
            $conectar=new Conexion();
            $consulta = $conectar->prepare("INSERT INTO sitios
            (CentroTuristico,Ubicacion,Telefono)Values(:centroturistico,:ubicacion,:telefono)");
            $consulta->bindParam(":centroturistico",$centroturistico,PDO::PARAM_STR);
            $consulta->bindParam(":ubicacion",$ubicacion,PDO::PARAM_STR);
            $consulta->bindParam(":telefono",$telefono,PDO::PARAM_STR);
            $consulta->execute();
            return 1;
        }

        //READ SITIOS
        public function ObtenerSitios(){
            include 'Conexion.php';
            $conectar=new Conexion();
            $consulta = $conectar->prepare("SELECT * FROM sitios");
            $consulta-> execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();
        }

        //UPDATE SITIOS
        public function ModificarSitios($id,$centroturistico,$ubicacion,$telefono){
            include 'Conexion.php';
            $conectar=new Conexion();
            $consulta = $conectar->prepare("UPDATE sitios SET CentroTuristico=:centroturistico,
            Ubicacion=:ubicacion,Telefono=:telefono WHERE ID=:id");
            $consulta->bindParam(":centroturistico",$centroturistico,PDO::PARAM_STR);
            $consulta->bindParam(":ubicacion",$ubicacion,PDO::PARAM_STR);
            $consulta->bindParam(":telefono",$telefono,PDO::PARAM_STR);
            $consulta->bindParam(":id",$id,PDO::PARAM_STR);
            $consulta->execute();
            return 1;
        }

        //DELETE SITIOS
        public function EliminarSitios($id){
            include 'Conexion.php';
            $conectar = new Conexion();
            $consulta = $conectar->prepare("DELETE FROM sitios WHERE ID=:id");
            $consulta->bindParam(":id",$id,PDO::PARAM_STR);
            $consulta->execute();
            return 1;
        }
        
    }

    try {
        $server=new SoapServer(
            null,
            ['uri'=>'http://localhost/WEBSERVICEBD/SitiosTuristicos.php',]           
        );
        $server->setClass('Sitios');
        $server->handle();
    } catch (SOAPFault $e) {
        echo 'Error: '.$e->getMessage();
        exit;
    }
?>