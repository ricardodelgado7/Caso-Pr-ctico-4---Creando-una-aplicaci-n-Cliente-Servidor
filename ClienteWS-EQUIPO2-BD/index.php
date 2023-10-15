<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitios Turisticos</title>
    <link rel="stylesheet" href="disenoIndex.css">

</head>
<body>


    <h1 align="center"> WEB SERVICE DE SITIOS TURISTICOS </h1>
    
    <?php
        $cliente=new SoapClient(
            null,array(
                'location'=>'https://webservicesitiosturisticos.000webhostapp.com/SitiosTuristicos.php',
                'uri'=>'https://webservicesitiosturisticos.000webhostapp.com/SitiosTuristicos.php',
                'trace'=>1
            )
        );
        try {
            $respuesta=$cliente-> __soapCall("ObtenerSitios",[]);
            $result=json_encode($respuesta,true);
            $datos=json_decode($result,true);
            echo '<table>';
            foreach ($datos as $item){
                echo '<tr>';
                echo '<td>'.$item['ID'].'</td>';
                echo '<td>'.$item['CentroTuristico'].'</td>';
   		        echo '<td>'.$item['Ubicacion'].'</td>';
		        echo '<td>'.$item['Telefono'].'</td>';
                echo '</tr>';
            }
            echo '</table>';

        } catch (\Throwable $th) {
            //throw $th;
        }
    ?>
    <br>   
    <section>
      <div>
        <strong><a class="otro" href="RegistrarSitio.php"> Insertar Sitio Turistico</a></strong> 
     </div>
    </section>
    <br>   
    <section>
      <div>
        <strong><a class="otro" href="EditarSitio.php"> Modificar Sitio Turistico</a></strong> 
     </div>
    </section>
     <br>   
    <section>
      <div>
        <strong><a class="otro" href="EliminarSitio.php"> Eliminar Sitio Turistico</a></strong> 
     </div>
    </section>

    <br>
    <br>
    <br>
    
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Servicios Web</h4>
                <strong><p>Universidad Autonoma de Chiapas</p></strong>
            </div>
            
        </div>
        <h2 class="titulo-final">&copy; Diseñado Por El  Equipo 2</h2>
    </footer>

</body>
</html>