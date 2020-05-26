<?php
include"conectar.php";
$vCvePas=$_POST['cvePastel'];
$vNomPas=$_POST['nomPastel'];
$vNomCategoria=$_POST['nombreCategoria'];
$vBoton=$_POST['boton'];
$resConectar=conecta();
$sqlCategoria="SELECT cveCategoria FROM CATEGORIA
WHERE nomCategoria='$vNomCategoria';";
$sqlCveCategoria=mysql_query($sqlCategoria,$resConectar);
$resulCveCategoria=mysql_fetch_array($sqlCveCategoria);
$vCveCategoria=$resulCveCategoria["cveCategoria"];
if ($vBoton=="Guardar") {
$sqlAltaPas="INSERT INTO PASTEL
VALUES('$vCvePas','$vNomPas','$vCveCategoria');";
$guarda=mysql_query($sqlAltaPas,$resConectar);
if(!$guarda){
echo"<SCRIPT LANGUAGE='Javascript'TYPE='text/Javascript'>
alert('Ocurrio un error...Posible clave repetida')
Javascript:history.back(1)
</SCRIPT>";
}
else{
echo"<SCRIPT LANGUAGE='Javascript'TYPE='text/Javascript'>
alert('Pastel registrado')
window.location='C:\wamp\www\pasteleriaZarza/index.html'
</SCRIPT>";
}
}
else {
$sqlModPas="UPDATE PASTEL
SET nomPas='$vNomPas',cveCategoria='$vCveCategoria'
WHERE cvePas='$vCvePas';";
$modificar=mysql_query($sqlModPas;$resConectar);
if(!$modificar){
echo"<SCRIPT LANGUAGE='Javascript' TYPE='text/Javascript'>
alert('Ocurrio un error...No se guardo el registro')
Javascript:history.back(1)
</SCRIPT>";
}
else{
echo"<SCRIPT LANGUAGE='Javascript'TYPE='text/Javascript'>
alert('Pastel modificado')
window.location='consultaPastel.php'
</SCRIPT>";
}
}
?>