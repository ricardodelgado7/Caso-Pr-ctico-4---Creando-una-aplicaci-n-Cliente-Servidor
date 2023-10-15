<?php
    $IDSitio=$_POST['id'];


    $cliente=new SoapClient(
        null,array(
            'location'=>'https://webservicesitiosturisticos.000webhostapp.com/SitiosTuristicos.php',
            'uri'=>'https://webservicesitiosturisticos.000webhostapp.com/SitiosTuristicos.php',
            'trace'=>1
        )
    );

    try {
        $respuesta=$cliente-> __soapCall("EliminarSitios",[$IDSitio]);
        
        
        if (isset($_POST["btnEliminar"])){

            if($respuesta==1){
                echo "<script> alert ('ID: $IDSitio Eliminado'); window.location ='index.php' </script>";
            }     
            else{
                echo "<script> alert ('Error no se inserto $IDSitio'); window.location ='index.php' </script>";
            }
        }
    }
    catch (SOAPFault $e) {
        echo $e->getMessage();
    }

?>