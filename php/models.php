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
mysqli_query($a1, $Operacion);
/*Comprobar Conexión...
if(mysqli_query($a1, $Operacion)) {
	echo 'Base de Datos: -'.$a2.'- Creada.<br>';
} else {
	echo 'Error Creando Base de Datos...<br>';
};
*/
};

/* CREAR TABLA */
function CrearTabla($a1,$a2,$a3){
$Operacion='CREATE TABLE IF NOT EXISTS '.$a2.$a3;
mysqli_query($a1, $Operacion);
/*Comprobar Operacion...
if(mysqli_query($a1, $Operacion)) {
	echo 'Tabla -'.$a2.'- Creada<br>';
} else {
	echo 'Error Creando Tabla...<br>';
};
*/
};

/*INSERTAR REGISTRO*/
function InsertarRegistro($a1,$a2,$a3,$a4){
$Operacion='INSERT INTO '.$a2.' (title, body) VALUES ("'.$a3.'", "'.$a4.'")';
if(isset($a3) && isset($a4)){
mysqli_query($a1, $Operacion);
};
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
function MostrarRegistrosJSON($a1,$a2){
header("Content-Type: application/json");
echo json_encode(SacarListaDeRegistros($a1,$a2));
};

/*SACAR LISTA DE REGISTROS*/
function SacarListaDeRegistros($a1, $a2){
    $Operacion = 'SELECT * FROM ' . $a2;
    $Resultado = mysqli_query($a1, $Operacion);

    $Registros = [];

    while ($Recorrido = mysqli_fetch_assoc($Resultado)) {
        $Registros[] = $Recorrido;
    };
    return $Registros;
    mysqli_free_result($Resultado);
};

/*COMPROBAR SI EL USERNAME Y PASSWORD SON CORRECTOS/
function ComprobarLoginUsernamePass($a1,$a2){
	$ConectarseASQL = mysqli_connect('localhost','root','','Blog_noticias');

	$BuscarUsername = 'SELECT username FROM Users WHERE username="'.$a1.'"';
	$Username = mysqli_fetch_array(mysqli_query($ConectarseASQL,$BuscarUsername));
	/*Si existe el Username...*/
	if($Username){
		$BuscarToken = 'SELECT token FROM Users WHERE username="'.$a1.'"';
		$ElToken = mysqli_fetch_array(mysqli_query($ConectarseASQL,$BuscarToken))[0];
		
			$BuscarPass = 'SELECT password FROM Users WHERE username="'.$a1.'"';
			$Pass = mysqli_fetch_array(mysqli_query($ConectarseASQL,$BuscarPass))[0];
			/*Si la contraseña es correcta...*/
			if($a2 === $Pass){
				$Token='Token'.$a1.rand(100,999);
				$Operacion = 'UPDATE users SET token ="'.$Token.'" WHERE username="'.$a1.'"';
				mysqli_query($ConectarseASQL,$Operacion);
				$BuscarTodo = 'SELECT * FROM Users WHERE username="'.$a1.'"';
				$Todo = mysqli_fetch_array(mysqli_query($ConectarseASQL,$BuscarTodo));

				$TodoCompleto='TODO: '.$Todo['name'].' '.$Todo['username'].' '.$Todo['password'].' '.$Todo['token'];
				header("Content-Type: application/json");
				echo json_encode(['Token'=>$Token]);
			} else {
				echo 'Contraseña incorrecta';
				};
	} else {
			echo 'No se encontró el Username '.$a1;
		};
};

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
