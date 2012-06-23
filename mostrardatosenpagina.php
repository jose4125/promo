<html>
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
	height: 852px;
	width: 810px;
	margin-right: auto;
	margin-left: auto;
}
#uno {
	background-image: url(imagenes/gracias1.png);
	height: 367px;
	width: 810px;
}
.clear {
	clear: both;
}
#dos {
	height: 322px;
	width: 810px;
	background-image: url(imagenes/gracias2.png);
}
#tres {
	background-image: url(imagenes/gracias3.png);
	height: 162px;
	width: 810px;
	float: left;
}
#compartir {
	height: 20px;
	width: 300px;
	margin-top: 210px;
	margin-left: 450px;
}
.texto {	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #FFF;
	text-decoration: none;
}
#facebook {	height: 30px;
	width: auto;
	float: left;
	margin-left: 30px;
	color: #FFF;
	text-decoration: none;
}
#twittear {
	height: 30px;
	width: 90px;
	float: left;
	margin-left: 42px;
}
.datosregistro {
	text-align: right;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight: normal;
	color: #FFF;
	font-size: 14px;
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
	color: #F60;
	font-size: 13px;
	line-height: 13px;
	text-decoration:underline;
}
}
.vercondiciones:hover {
	text-align: right;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight: normal;
.historia1 {      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      -khtml-border-radius: 10px;
	  height:105px;
}
.roundedcorner1 {      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      -khtml-border-radius: 10px;
}
-->
</style>
 <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
 </head>
 <body>
<div id="contenedor">
  <div id="uno">
  </div>
  <div class="clear"></div>
  <div id="dos"><table width="100%" border="0">
  <tr>
    <td><div id="compartir">
  <table width="90%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="60%"><div class="texto" id="facebook"><a name="fb_share" type="button" href="http://www.facebook.com/sharer.php" share_url="http://200.31.80.43/promocion-panasonic">Compartir</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
      </div></td>
      <td width="60%"><div id="twittear"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-count="none">Twittear</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div></td>
    </tr>
    <tr>
      <td colspan="2"></td>
    </tr>
  </table>
</div></td>
  </tr>
</table>
</div>
  <div class="clear">
    <div id="tres"></div> 
    <div class="clear"></div>
  </div>
</div>
<?php 

$server ="localhost";
$database  ="usuariosalkosto";
$db_user ="root";
$db_pass = "admin";
$conexion = mysql_pconnect($server, $db_user, $db_pass) or die ("error1".mysql_error());
mysql_select_db($database, $conexion) or die ("error2".mysql_error());
$numero = mysql_num_rows($result); // obtenemos el número de filas
echo 'El número de registros de la tabla es: '.$numero.'';  // imprimos en pantalla el número generado

$cedula = $_POST['cedula'];
$nombres = $_POST['nombres'];
$email= $_POST['email'];
$ciudad= $_POST['ciudad'];
$telefono = $_POST['telefono'];
$acepta = $_POST['aceptaT'];
$ofertas = $_POST['ofertas'];


if($acepta=="on"){
 $acepto="S";
}else{
 $acepto="N";
}


if($ofertas=="on"){
 $oferta="S";
}else{
 $oferta="N";
}


mysql_query ("INSERT INTO datos (cedula,nombres,email,ciudad,telefono,aceptaT,ofertas) VALUES ('$cedula', '$nombres', '$email', '$ciudad', '$telefono','$acepto', '$oferta')");     
mysql_close($conexion);



?> 
 </body>
</html>