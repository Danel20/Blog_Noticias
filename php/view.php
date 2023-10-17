<?php
include "models.php";
/*VARIABLES*/
$NombreBD='Blog_Noticias';
$NombreTabla='Noticias';
$ConexionSQL = mysqli_connect('localhost','root','');

CrearConexion($ConexionSQL);
CrearBD($ConexionSQL,$NombreBD);
$ConectarseASQL = mysqli_connect('localhost','root','',$NombreBD);
CrearTabla($ConectarseASQL,$NombreTabla);
MostrarRegistros($ConectarseASQL,$NombreTabla);
DesconectarConexion($ConectarseASQL);
?>