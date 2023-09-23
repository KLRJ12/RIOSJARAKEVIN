<?php
include("connection.php");
$con = connection();

$ID = null;
$RUC = $_POST['RUC'];
$Nombre = $_POST['nombre'];
$Ap_pat = $_POST['apellido_paterno'];
$Ap_mat = $_POST['apellido_materno'];
$Correo = $_POST['correo'];
$Pass = $_POST['pass'];
$Celular = $_POST['numero_celular'];
$sql = "INSERT INTO usuarios VALUES ('$ID','$RUC','$Nombre','$Ap_pat','$Ap_mat','$Correo','$Pass','$Celular')";
$query = mysqli_query($con,$sql);

if($query){
    Header('Location: index.php');

};

?>