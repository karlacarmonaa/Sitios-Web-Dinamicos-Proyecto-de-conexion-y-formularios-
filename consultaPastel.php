<HEAD>
<META HTTP-EQUIV="content-Type" CONTENT="text/html;
CHARSET=utf-8"/>
<TITLE> 2. Consultar los pasteles disponibles en tienda en linea</TITLE>
<LINK HREF="C:\wamp\www\pasteleriaZarza\estilos/estiloPastel.css"
REL="stylesheet" TYPE="text/css"/>
</HEAD>
<BODY>
<FORM ID="form1" NAME="form1" METHOD="post"
ACTION="gestionPastel.php">
<P CLASS="titulo"> Selecciona pastel</P>
<BR/><BR/>
<LABEL FOR="clave">Clave:</LABEL>
<SELECT NAME="cvePast" ID="cvePastel">
<?php
include"conectar.php";
$resConectar=conecta();
$sqlPast="SELECT*FROM PASTEL";
$tablaPast=mysql_query($sqlPast);
$numfilasPast=mysql_num_rows($tablaPast);
for ($i=0; $i<$numfilasPast; $i++){
$filaPast=mysql_fetch_array($tablaPast);
echo'<option>'.$filaPast['cvePas'].'</option>';
}
?>
</SELECT><BR/><BR/>
<INPUT TYPE="submit" NAME="btnConsultar"
ID="botonConsultar" VALUE="Consultar"/><BR/><BR/>
</FORM>
<a href="C:\wamp\www/index.html">
</BODY>