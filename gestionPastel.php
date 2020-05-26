<TITLE> Formulario de gestion de pasteles</TITLE>
<LINK HREF="C:\wamp\www\pasteleriaZarza\estilos/estilosPastel.css"
REL="stylesheet" TYPE="text/css"/>
<SCRIPT LANGUAGE="Javascript" TYPE="text/Javascript">
function eliminar()
{
if(confirm('¿Confirma la baja?'))
document.formGestionPas.submit()
}
</SCRIPT>
</HEAD>
<BODY>
<FORM ID ="formGestionPas" NAME="formGestionPas"
METHOD="post"
ACTION="gestionBase.php" ENCTYPE="multipart/
form_data">
<P CLASS="titulo">Gestion de Pasteles</P>
<BR/><BR/>
<?php
include"conectar.php";
$vCvePas=$_POST['cvePast'];
$resConectar=conecta();
$sqlPast="SELECT cvePas, nomPas, nomCategoria
FROM PASTEL, CATEGORIA
WHERE cvePas='$vCvePas'
AND PASTEL.cveCategoria=CATEGORIA.cveCategoria;";
$tablaPast=mysql_query($sqlPast);
$numfilasPast=mysql_num_rows($tablaPast);
if($numfilasPast>0){
$filaPast=mysql_fetch_array($tablaPast);
echo'<LABEL FOR="clave">'."Clave:".'</LABEL>';
echo'<INPUT NAME="cvePastel" TYPE="text"
ID="clavePastel" READONLY="readonly"
VALUE='.$filaPast['cvePas'].'><BR/>';
echo'<LABEL FOR="nombre">'."Nombre:".'</LABEL>';
echo'<INPUT NAME="nomPastel" TYPE="text"
ID="nombrePastel" READONLY="readonly"
VALUE='.$filaPast['cvePas'].'><BR/>';
echo'<LABEL FOR="nombre">'."Nombre:".'</LABEL>';
echo'<INPUT NAME="nomPastel" TYPE="text"
ID="nombrePastel" READONLY="readonly"
VALUE='.$filaPast['nomPas'].'><BR/>';
echo'<LABEL FOR="categoria">'."Categoria:".'</LABEL>';
echo'<INPUT NAME="nomCategoria" TYPE="text"
ID="nombreCategoria" READONLY="readonly"
VALUE='$filaPast['nomCategoria'].'><BR/>';
}
echo'<INPUT TYPE="button" NAME="botonG"
ID="botonG" VALUE="Eliminar" ONCLICK="eliminar();"/>';
echo'<INPUT TYPE="submit" NAME="botonG"
ID="botonModificar" VALUE="Modificar"/><BR/>';
?>
</FORM>
<BR/>
</BODY>
</HTML>