<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="validar.php" method="POST" class="loguear">

        <h1>INGRESA TUS DATOS</h1>
        <div>
            <label>Nombre</label><br>
            <input type="text" name ="usuario" placeholder="Escribe tu nombre">
        </div>

        <div>
            <label>Contraseña</label><br>
            <input type="password" name ="contraseña" placeholder="Escribe tu contraseña">
        </div>
        
        <button class="botoncito" type="submite">Ingresar</button>
    </form>

</body>
</html>