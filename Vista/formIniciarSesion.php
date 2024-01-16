<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesion</title>
</head>
<body>
    <h2>Inicio de Sesion</h2>
    <form action="../Controlador/iniciar_sesion.php" method="post">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" required >

        <br>
        <br>

        <label for="">Contraseña: </label>
        <input type="password" name="pwd" required >

        <br>
        <br>
        
        <input type="submit"value="Iniciar Sesion">




    </form>
    
</body>
</html>