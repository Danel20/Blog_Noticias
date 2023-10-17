<?php
/*CREAR CONEXIÓN*/
function CrearConexion($a1){
/*Comprobar Conexión...
if($a1) {
	echo 'Conexión Creada<br>';
} else {
	echo 'Error Conectando...<br>';
};
*/
};

/* CREAR BASE DE DATOS */
function CrearBD($a1,$a2){
$Operacion='CREATE DATABASE IF NOT EXISTS '.$a2;
/*Comprobar Conexión...
if(mysqli_query($a1, $Operacion)) {
	echo 'Base de Datos: -'.$a2.'- Creada.<br>';
} else {
	echo 'Error Creando Base de Datos...<br>';
};
*/
};

/* CREAR TABLA */
function CrearTabla($a1,$a2){
$Operacion='CREATE TABLE IF NOT EXISTS '.$a2.'(
title VARCHAR(65) NOT NULL,
body TEXT(3000) NOT NULL)';
/*Comprobar Operacion...
if(mysqli_query($a1, $Operacion)) {
	echo 'Tabla -'.$a2.'- Creada<br>';
} else {
	echo 'Error Creando Tabla...<br>';
};
*/
};

/*MOSTRAR REGISTROS*/
function MostrarRegistros($a1,$a2){
$Operacion='SELECT * FROM '.$a2;
$Resultado=mysqli_query($a1,$Operacion);
while($Recorrido = mysqli_fetch_array($Resultado)){
	echo $Recorrido[0].'<br>'.$Recorrido[1].'<br><br>';
};
};


/*MOSTRAR REGISTROS JSON*/
function MostrarRegistrosJSON($a1, $a2) {
    $Operacion = 'SELECT * FROM ' . $a2;
    $Resultado = mysqli_query($a1, $Operacion);

    $Registros = [];

    while ($Recorrido = mysqli_fetch_assoc($Resultado)) {
        $Registros[] = $Recorrido;
    }

    header("Content-Type: application/json");
    echo json_encode($Registros);

    mysqli_free_result($Resultado);
}


/* DESCONEXIÓN */
function DesconectarConexion($a1){
$DesconectarseASQL = mysqli_close($a1);
/*Comprobar Desconexión...
if($a1) {
	echo 'Desconexión realizada<br>';
} else {
	echo 'Error Desconectando...<br>';
};
*/
};
?>