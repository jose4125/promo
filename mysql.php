<?php
function conectar($server=IPSERVIDORBD, $puerto=PUERTO, $usuario=USUARIOBD, $clave=CLAVEBD, $tipo_conexion="N")
{
	switch($tipo_conexion)
	{
		case "N": //N = conexion no persistente
			$link = mysql_connect($server . ":" . $puerto, $usuario, $clave);
			break;
		
		case "P": // establecer una conexion persistente
			$link = mysql_pconnect($server . ":" . $puerto, $usuario, $clave);
			break;
		
		default:
			$link = mysql_connect($server . ":" . $puerto, $usuario, $clave);
	}
	return($link);
}

function abrirbd($id_conexion, $basedatos=BD)
{
	return mysql_select_db($basedatos, $id_conexion);
}

function consulta($query, $id_conexion)
{
	return(mysql_query($query, $id_conexion));
}

function num_filas($id_resultado)
{
	return(mysql_num_rows($id_resultado));
}

function trae_fila($id_resultado, $tipo_indice="A")
{
	switch($tipo_indice)
	{
		case "A": //indice asociativio para el vector de datos
			$fila = mysql_fetch_array($id_resultado, MYSQL_ASSOC);
			break;
		case "N": //Indice nùmerico para el vector de datos
			$fila = mysql_fetch_array($id_resultado, MYSQL_NUM);
			break;
		default: // indice numerico y asociativo para el vector de datos
			$fila = mysql_fetch_array($id_resultado);
			break;

	}
	return($fila);
}
function cerrar_conexion($id_conexion)
{
	return(mysql_close($id_conexion));
}

?>