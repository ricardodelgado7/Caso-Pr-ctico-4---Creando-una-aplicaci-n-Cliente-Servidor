<?php
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
        $respuesta=$cliente-> __soapCall("InsertarSitios",[$sitiosturistico,$ubicacion,$telefono]);
       
        if (isset($_POST["btnRegistrar"])){

            if($respuesta==1){
                echo "<script> alert ('Registro: $sitiosturistico creado Correctamente'); window.location ='index.php' </script>";
            }     
            else{
                echo "<script> alert ('Error no se inserto $sitiosturistico'); window.location ='index.php' </script>";
            }
        }

    } catch (SOAPFault $e) {
        echo $e->getMessage();
    }

?>