<?php
include('configuracion.php');
session_start();
if( !isset($_SESSION['consecutivo_id'])){
header('location: alkosto-cedula.php');
}
if($_POST['frase'] != '' && $_POST['fan'] != ''){

	//echo $_POST['fan'];
	//echo $_POST['frase'];

	$link = conectar();
	if ( $link ){
		if (abrirbd($link)){

			$sql = "UPDATE DATOS SET fan='alkosto', frase='hola' WHERE frase='' AND consecutivo=1";
			//$sql = "UPDATE datos SET fan='" . $_POST['fan'] . "', frase='" . $_POST['frase'] . "' WHERE consecutivo='" . $_SESSION['consecutivo_id'] . "'";
			//echo $sql;
			if($result=consulta($sql, $link)){
				//echo 'hola';
				cerrar_conexion($link);
				header('location: gracias.php');
			}else{
				echo 'error al hacer query';
			}
		}else{
			echo 'error al abrir l B.D';
		}

	}else{

		echo 'error en conexion a servidor B.D';
	}


}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta property="og:title" content="EN JUNIO EL TESORO ES PARA PAPÁ" />
<meta property="og:description" content="Regístrate y participa por el regalo para papá" />
<meta property="og:image" content="http://200.31.80.43/promocion-panasonic/imagenes/paracompartir.png" />
 <title>EN JUNIO EL TESORO ES PARA PAP&Aacute;</title>

<style type="text/css">
<!--
.roundedcorner {
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      -khtml-border-radius: 10px;
	  height:18px;
	  margin-left:auto;
	  margin-right:auto;
 }
 .historia {
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      -khtml-border-radius: 10px;
	  height:105px;
 }
body {
	font-size: 14px;
	margin: 0px;
	padding: 0px;
	background-color: #E7EBF2;
}
#contenedor {
	height: 851px;
	width: 810px;
	margin-right: auto;
	margin-left: auto;
}
#uno {
	background-image: url(imagenes/fase-2.png);
	height: 367px;
	width: 810px;
}
#dos {
	height: 322px;
	width: 810px;
	background-image: url(imagenes/frase-img.png);
}
.clear {
	clear: both;
}
#tres {
	background-image: url(imagenes/gracias3.png);
	height: 162px;
	width: 810px;
	float: left;
}
#formulario {
	height: 300px;
	width: 360px;
	margin-top: 40px;
	margin-left: 83px;
}
#compartir {
	height: 30px;
	width: 290px;
	margin-top: 150px;
	margin-left: 5px;
}
.texto {	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #FFF;
	text-decoration: none;
}
#frase {
	height: 40px;
	width: 650px;
	float: left;
	margin-left: 120px;
	color: #FFF;
	text-decoration: none;
	margin-top: 200px;
}
#twittear {
	height: 30px;
	width: 90px;
	float: left;
	margin-left: 42px;
}
.datoscedula {
	text-align: right;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight: normal;
	color: #FFF;
	font-size: 18px;
	line-height: 13px;
	padding-right:15px;
}
.vercondiciones {
	text-align: right;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight: normal;
	color: #000;
	font-size: 13px;
	line-height: 13px;
	text-decoration:underline;
}
.vercondiciones:hover {
	text-align: right;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight: normal;
	color: #FFF;
	font-size: 13px;
	line-height: 13px;
	text-decoration:underline;
}
.historia1 {      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      -khtml-border-radius: 10px;
	  height:105px;
}
.roundedcorner1 {      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      -khtml-border-radius: 10px;
}
.roundedcorner2 {      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      -khtml-border-radius: 10px;
}
.roundedcorner3 {      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      -khtml-border-radius: 10px;
	  height:18px;
	  margin-left:auto;
	  margin-right:auto;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>

<body>
<div id="contenedor">
  <div id="uno">
  </div>
  <div class="clear"></div>
  <div id="dos">
    <div id="frase">
    <form action="alkosto-frase-secreta.php" method="POST">
      <table width="600" border="0">
        <tr>
          <td class="datoscedula">Frase Secreta</td>
          <td><input name="frase" type="text" class="roundedcorner3" size="60" /></td>
          <td><input name="fan" type="hidden" class="roundedcorner3" value="alkosto" size="60" /></td>
          <td align="left"><input type="submit" value="ENVIAR FRASE"><img src="imagenes/enviar-frase.png" width="109" height="35" /></td>
        </tr>
      </table>
     </form>
    </div>
  </div>
  <div class="clear">
    <div id="tres"></div>
    <div id="cuatro"> </div> 
   
   
  </div>
</div> 
</body>
</html>
