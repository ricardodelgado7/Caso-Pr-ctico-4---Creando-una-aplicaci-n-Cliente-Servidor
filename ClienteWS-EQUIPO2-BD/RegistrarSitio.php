<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Sitios</title>
    <link rel="stylesheet" href="disenoRegistrar.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>

<body>


    <form action="RegistraSitio.php" method="post">
        <div class="form">
            <h1>Registro de Sitios Turisticos</h1>
            <div class="grupo">
                <input type="text" name="centroturistico" id="" required><span class="barra"></span>
                <label>Sitio Turistico</label>
            </div>
            <div class="grupo">
                <input type="text" name="ubicacion" id="" required><span class="barra"></span>
                <label>Ubicacion</label>
            </div>
            <div class="grupo">
                <input type="text" name="telefono" id="" required><span class="barra"></span>
                <label>Telefono</label>
            </div>
            <button type="submit" name="btnRegistrar" >Guardar Registro</button>
        </div>
    </form>
</body>

</html>