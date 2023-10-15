<?php
    $IDSitio=$_POST['id'];
    $sitiosturistico=$_POST['centroturistico'];
    $ubicacion=$_POST['ubicacion'];
    $telefono=$_POST['telefono'];

    $cliente=new SoapClient(
        null,array(
            'location'=>'https://webservicesitiosturisticos.000webhostapp.com/SitiosTuristicos.php',
            'uri'=>'https://webservicesitiosturisticos.000webhostapp.com/SitiosTuristicos.php',
            'trace'=>1
        )
    );
    try {
        $respuesta=$cliente-> __soapCall("ModificarSitios",[$IDSitio,$sitiosturistico,$ubicacion,$telefono]);
        
        if (isset($_POST["btnActualizar"])){

            if($respuesta==1){
                echo "<script> alert ('Registro: $sitiosturistico Actualizado Correctamente'); window.location ='index.php' </script>";
            }     
            else{
                echo "<script> alert ('Error no se actualizo: $sitiosturistico'); window.location ='index.php' </script>";
            }
        }

    } catch (SOAPFault $e) {
        echo $e->getMessage();
    }

?>