<?php 
require_once "controlador.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="controlador.php">
        Usuario: <input type="text" name="user" required><br>
        Contraseña: <input type="text" name="password" required><br>
        <input type="submit">
    </form>
    
</body>
</html>

