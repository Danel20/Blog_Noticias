<?php
include "models.php";
/*VARIABLES*/
$NombreBD='Blog_Noticias';
$NombreTabla='Noticias';
$ConexionSQL = mysqli_connect('localhost','root','');

function MostrarRegistrosJSON($a1,$a2){
header("Content-Type: application/json");
echo json_encode(SacarListaDeRegistros($a1,$a2));
};

CrearConexion($ConexionSQL);
CrearBD($ConexionSQL,$NombreBD);
$ConectarseASQL = mysqli_connect('localhost','root','',$NombreBD);
CrearTabla($ConectarseASQL,$NombreTabla);
MostrarRegistrosJSON($ConectarseASQL,$NombreTabla);
DesconectarConexion($ConectarseASQL);
?>
