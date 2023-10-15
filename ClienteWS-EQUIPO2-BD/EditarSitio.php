<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Sitios</title>
    <link rel="stylesheet" href="disenoRegistrar.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>
<body>
    <br>
    <br>
    <br>
<form action="EditaSitio.php" method="post">
            <h1>Actualizar Sitios Turisticos</h1>
            <div class="form">
            <div class="grupo">
                <input type="text" name="id" id="" required><span class="barra"></span>
                <label>Id</label>
            </div>
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
            <button type="submit"  name="btnActualizar" >Actualizar Registro</button>
        </div>
    </form>
    
</body>
</html>