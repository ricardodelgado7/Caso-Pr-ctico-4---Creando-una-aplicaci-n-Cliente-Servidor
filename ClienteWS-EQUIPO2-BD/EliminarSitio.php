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


    <form action="eliminaSitio.php" method="post">
        <div class="form">
            <h1>Eliminar Sitios Turisticos</h1>
            <div class="grupo">
                <input type="text" name="id" id="" required><span class="barra"></span>
                <label>ID del Sitio</label>
            </div>
            <button type="submit" name ="btnEliminar">Eliminar Registro</button>
        </div>
    </form>
</body>

</html>