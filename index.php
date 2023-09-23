<?php
include("connection.php");
$con = connection();
$sql = "SELECT * FROM usuarios ";
$query = mysqli_query($con,$sql);
//var_dump($query);
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
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>   
    <div class="Form">
        <form action="insert.php" method="post">
            <h2>Formulario de Registro de Clientes</h2>

            <label for="RUC">RUC:</label>
            <input type="number" placeholder="Ingrese el RUC" id="RUC" name="RUC" required>

            <label for="nombre">Nombre:</label>
            <input type="text" placeholder="Ingrese el nombre" id="nombre" name="nombre" required>

            <label for="apellido_paterno">Apellido Paterno:</label>
            <input type="text" placeholder="Ingrese el apellido paterno" id="apellido_paterno" name="apellido_paterno" required>

            <label for="apellido_materno">Apellido Materno:</label>
            <input type="text" placeholder="Ingrese el apellido materno" id="apellido_materno" name="apellido_materno" required>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" placeholder="Ingrese el email" id="correo" name="correo" required>

            <label for="pass">Contraseña:</label>
            <input type="password" placeholder="Ingrese la Contraseña" id="pass" name="pass" required>

            <label for="numero_celular">Número de Celular:</label>
            <input type="number" placeholder="Ingrese el numero de celular" id="numero_celular" name="numero_celular" required>
                
            <input type="submit" value="Registrar Usuario">
        </form>
    </div>
    <div class="table">
        <h3>Lista de Usuarios</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>RUC</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Celular</th>
                </tr>
            </thead>
            <tbody>
                <?php while($fila = mysqli_fetch_array($query)): ?>
                <tr>
                    <th><?=$fila['ID']?></th>
                    <th><?=$fila['RUC']?></th>
                    <th><?=$fila['Nombre']?></th>
                    <th><?=$fila['Ap_pat']?></th>
                    <th><?=$fila['Ap_mat']?></th>
                    <th><?=$fila['Correo']?></th>
                    <th><?=$fila['Pass']?></th>
                    <th><?=$fila['Celular']?></th>
                    <th><a href="update.php?ID=<?php echo $fila['ID']?>">Editar</a></th>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
 

</body>