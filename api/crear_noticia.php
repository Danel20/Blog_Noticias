<?php
include "../php/models.php";
/*VARIABLES*/
$NombreBD='Blog_Noticias';
$NombreTabla='Noticias';
$ConexionSQL = mysqli_connect('localhost','root','');

CrearConexion($ConexionSQL);
CrearBD($ConexionSQL,$NombreBD);
$ConectarseASQL = mysqli_connect('localhost','root','',$NombreBD);
CrearTabla($ConectarseASQL,$NombreTabla);
InsertarRegistro($ConectarseASQL,$NombreTabla,$_POST['title'],$_POST['body']);
DesconectarConexion($ConectarseASQL);
?>