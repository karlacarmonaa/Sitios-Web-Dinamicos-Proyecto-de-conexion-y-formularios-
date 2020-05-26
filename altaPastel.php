<HTML XMLNS="http://www.w3.org/1999/xhtml">
<HEAD>
<META HTTP-EQUIV="content-Type"CONTENT="text/html;
CHARSET=utf-8"/>
<TITLE> Formulario de ingreso de un pastel </TITLE>
<LINK HREF="C:\wamp\www\pasteleriaZarza/estilos/estiloPastel.css"
REL="stylesheet" TYPE="text/css" />
</HEAD>
<BODY>
<FORM ID="form1"NAME="form1" METHOD="post"
ACTION="actBase.php">
<P CLASS="titulo">1. Ingresar un pastel que no se encuentra disponible en tienda en linea</P>
</BR> </BR>
<LABEL FOR="clave">Clave:</LABEL>
<INPUT NAME="cvePastel" TYPE="text"
ID="clavePastel" SIZE="100px"
MAXLENGTH="6"/><BR/>
<LABEL FOR="nombre"> Nombre:</LABEL>
<INPUT NAME="nomPastel" TYPE="text"
ID="nombrePastel" SIZE="100"
MAXLENGTH="25/> <BR/>
<LABEL FOR="categoria">Categoria:</LABEL>
<SELECT NAME="nombreCategoria" ID="nombreCategoria">
<?php
include"conectar.php";
$resConectar=conecta();
$sqlCategorias="SELECT*FROM CATEGORIA";
$tablaCategoria=mysql_query($sqlCategorias);
$numfilasCategorias=mysql_num_rows($tablaCategoria);
for ($i=0; $i<$numfilasCategorias; $i++){
$filaCategoria=mysql_fetch_array($tablaCategoria);
echo'<OPTION>'.$filaCategoria['nomCategoria'].'</OPTION>';
}
?>
</SELECT><BR/><BR/>
<INPUT TYPE="submit" NAME="boton"
ID="botonGuardar" VALUE="Guardar"/>
<INPUT TYPE="reset" NAME="botonNuevo"
ID="botonNuevo" VALUE="Nuevo"/> <BR/>
</FORM>
</BODY>
</HTML>