<?php
include("connection.php");
$con = connection();
$ID = $_GET['ID'];
$sql = "SELECT * FROM usuarios WHERE ID='$ID'";
$query = mysqli_query($con,$sql);
$fila = mysqli_fetch_array($query);
//var_dump($fila);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!DOCTYPE html>
<html>
<head>
  <title>Formulario de Registro de Clientes</title>
  <link rel="stylesheet" type="text/css" href="styles1.css">
</head>
<body>   
    <div class="Form">
        <form action="editar.php" method="post">
            <h2>Editar Registro de Clientes</h2>
            <input type="hidden" name="ID" value="<?php echo $fila['ID'] ?>">

            <label for="RUC">RUC:</label>
            <input type="number" placeholder="Ingrese el RUC" id="RUC" name="RUC" value="<?php echo $fila['RUC'] ?>" >

            <label for="nombre">Nombre:</label>
            <input type="text" placeholder="Ingrese el nombre" id="nombre" name="nombre" value="<?php echo $fila['Nombre'] ?>">

            <label for="apellido_paterno">Apellido Paterno:</label>
            <input type="text" placeholder="Ingrese el apellido paterno" id="apellido_paterno" name="apellido_paterno" value="<?php echo $fila['Ap_pat'] ?>">

            <label for="apellido_materno">Apellido Materno:</label>
            <input type="text" placeholder="Ingrese el apellido materno" id="apellido_materno" name="apellido_materno" value="<?php echo $fila['Ap_mat'] ?>">

            <label for="correo">Correo Electrónico:</label>
            <input type="email" placeholder="Ingrese el email" id="correo" name="correo" value="<?php echo $fila['Correo'] ?>">

            <label for="pass">Contraseña:</label>
            <input type="password" placeholder="Ingrese la Contraseña" id="pass" name="pass" value="<?php echo $fila['Pass'] ?>">

            <label for="numero_celular">Número de Celular:</label>
            <input type="number" placeholder="Ingrese el numero de celular" id="numero_celular" name="numero_celular" value="<?php echo $fila['Celular'] ?>">
                
            <input type="submit" value="Actualizar Usuario">
        </form>
    </div>