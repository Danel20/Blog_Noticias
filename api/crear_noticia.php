<?php
include "../php/models.php";
/*VARIABLES*/
$NombreBD='Blog_Noticias';
$NombreTabla='Noticias';
$ConexionSQL = mysqli_connect('localhost','root','');

CrearConexion($ConexionSQL);
CrearBD($ConexionSQL,$NombreBD);
$ConectarseASQL = mysqli_connect('localhost','root','',$NombreBD);
CrearTabla($ConectarseASQL,$NombreTabla,'(title VARCHAR(65) NOT NULL,body TEXT(3000) NOT NULL)');
InsertarRegistro($ConectarseASQL,$NombreTabla,$_POST['title'],$_POST['body']);
DesconectarConexion($ConectarseASQL);
?>