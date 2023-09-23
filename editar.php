<?php
include("connection.php");
$con = connection();

$ID = $_POST['ID'];
$RUC = $_POST['RUC'];
$Nombre = $_POST['nombre'];
$Ap_pat = $_POST['apellido_paterno'];
$Ap_mat = $_POST['apellido_materno'];
$Correo = $_POST['correo'];
$Pass = $_POST['pass'];
$Celular = $_POST['numero_celular'];

$sql = "UPDATE usuarios SET RUC='$RUC',Nombre='$Nombre',Ap_pat='$Ap_pat',Ap_mat='$Ap_mat',Correo='$Correo',Pass='$Pass',Celular='$Celular' WHERE ID='$ID'" ;

$query = mysqli_query($con,$sql);

if($query) {
    header("Location: index.php");
};

?>