<?php
session_start();
if(isset($_SESSION["usuario"])){

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
</head>
<body>
    <h2><?php echo "<h4>Bienvenido - ".$_SESSION['usuario']."</h4>";?></h2>

    <li><a href="#">Inicio</a></li>
    <li><a href="salir.php">Cerrar Sesion</a></li>
</body>
</html>

<?php
}else{
    header("location:login.php");
}
?>