<HEAD>
<META HTTP-EQUIV="content-Type" CONTENT="text/html;
CHARSET=utf-8"/>
<TITLE>3. Modificar algun dato de los pasteles registrados</TITLE>
<LINK HREF="C:\wamp\www\pasteleriaZarza\estilos/estiloPastel.css"
REL="stylesheet" TYPE="text/css"/>
<SCRIPT LANGUAGE="Javascript" TYPE="text/Javascript">
function modificar()
{
if(confirm('¿Confirma los cambios?'))
document.formCambios.submit()
}
</SCRIPT>
</HEAD>
<BODY>
<?php
include"conectar.php";
$vCvePas=$_POST['cvePastel'];
$vNomPas=$_POST['nomPastel'];
$vNomCategoria=$_POST['nomCategoria'];
$resConectar=conecta();
if(isset($_POST['botonG'])=='Modificar'){
echo'<FORM ID="formCambios" NAME="formCambios"
METHOD="post" ACTION="actBase.php"
ENCTYPE="multipart/form-data">';
echo'<P CLASS="titulo"> Cambios de pasteles:</P>
<BR/><BR/>';
echo'<LABEL FOR="clave">'."Clave:".'</LABEL>';
echo'<INPUT NAME="cvePastel" TYPE="text"
ID="clavePastel" SIZE="100px" MAXLENGHT="6"
VALUE='.$vCvePas.' READONLY="readonly"><BR/>';
echo'<LABEL FOR="nombre">'."Nombre:".'</LABEL>';
echo'<INPUT NAME="nomPastel" TYPE="text"
ID="nombrePastel" SIZE="100"
MAXLENGHT="25 VALUE='.$vNomPas.'><BR/>';
echo'<LABEL FOR="categoria">'."Categoria:".'</LABEL>';
echo'<SELECT NAME="nombreCategoria" ID="nombreCategoria">';
$sqlCategorias="SELECT*FROM CATEGORIA";
$tablaCategoria=mysql_query($sqlCategorias);
$numfilasCategorias=mysql_num_rows($tablaCategoria);
for ($i=0; $i<$numfilasCategorias; $i++){
$filaCategoria=mysql_fetch_array($tablaCategoria);
if($filaCategoria['nomCategoria']==$vNomCategoria){
echo'<OPTION SELECTED="selected">'
.$filaCategoria['nomCategoria'].'</OPTION>';
}
else
echo'<OPTION>'.$filaCategoria['nomCategoria'].'</OPTION>';
}
echo'</SELECT><BR/><BR/>';
echo'<INPUT TYPE="button" NAME="boton"
ID="botonModificar" VALUE="Modificar"
ONCLICK="modificar();"/>';
echo'<INPUT TYPE="reset" NAME="botonCancelar"
ID="botonCancelar" VALUE="Cancelar"/><BR/>';
echo'</FORM>';
}
else{
$sqlElimPas="DELETE FROM PASTEL WHERE
cvePas='$vCvePas'";
$regEli=mysql_query($sqlElimPas,$resConectar);
if(!$regEli)
echo"<SCRIPT LANGUAGE='Javascript' TYPE='text/Javascript'>
alert('Error al intentar eliminar un pastel')
Javascript:history.back(1)
</SCRIPT>";
else
echo "<SCRIPT LANGUAGE='Javascript' TYPE='text/
Javascript'>
alert('Pastel borrado')
window.location='consultaPastel.php'
</SCRIPT>";
}
?>
</BODY>
</HTML>