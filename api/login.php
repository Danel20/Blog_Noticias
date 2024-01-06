<?php
include "../php/models.php";
/*VARIABLES*/
$NombreBD='Blog_Noticias';
$NombreTabla='Users';
$ConexionSQL = mysqli_connect('localhost','root','');

CrearConexion($ConexionSQL);
$ConectarseASQL = mysqli_connect('localhost','root','',$NombreBD);
ComprobarLoginUsernamePass($_POST['username'],$_POST['password']);
DesconectarConexion($ConectarseASQL);
?>
