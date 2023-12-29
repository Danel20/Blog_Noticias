<?php
include "../php/models.php";
/*VARIABLES*/
$NombreBD='Blog_Noticias';
$NombreTabla='Users';
$ConexionSQL = mysqli_connect('localhost','root','');

CrearConexion($ConexionSQL);
CrearBD($ConexionSQL,$NombreBD);
$ConectarseASQL = mysqli_connect('localhost','root','',$NombreBD);
CrearTabla($ConectarseASQL,$NombreTabla,'(name CHAR(25) NOT NULL,username CHAR(25) NOT NULL,password CHAR(200) NOT NULL,token CHAR(200) NOT NULL)');

ComprobarLoginUsernamePass($_POST['username'],$_POST['password']);

DesconectarConexion($ConectarseASQL);
?>
