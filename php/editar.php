<?php
include 'conexion.php';
$cantidad_post = count($_POST);
$nombres_variables = array_keys($_POST); // obtiene los nombres de las varibles
$valores_variables = array_values($_POST);// obtiene los valores de las varibles
$atributos="";
// crea las variables y les asigna el valor
for($i=1;$i<$cantidad_post;$i++)
{ 
$$nombres_variables[$i]=$valores_variables[$i]; 
if($i+1==$cantidad_post)
{
$atributos=$atributos."$nombres_variables[$i]='$valores_variables[$i]' where $nombres_variables[$i]='$valores_variables[$i]'";
}
else
{
$atributos=$atributos."$nombres_variables[$i]='$valores_variables[$i]',";
}
}
$actualizar="update $valores_variables[0] set $atributos";
$query = mysql_query ($actualizar)or die(mysql_error());
//Por integridad en caso de algun tipo de falla
?>
<meta HTTP-EQUIV="Refresh" CONTENT="2; URL=../usuarios.php" />
<?php
$sql="select * from cliente where tipo_cliente=1";
$sql;
$r=mysql_query("$sql");
$n=mysql_num_rows($r);
$m=mysql_num_fields($r);
?>
<!DOCTYPE html>
<html lagn="es">
<head>
<meta charset='utf-8'>
<title>AIRLINES Viaja Seguro </title>
	<link rel='stylesheet' type='text/css' href='../styles.css' />
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
</head>
<body background="../titulo.jpg" style='background-repeat:no-repeat;' /> 

<br/><br/><br/><br/><br/><br/><br/><br/>

<div id='cssmenu'> 
<ul>
   <li class='has-sub'><a href=''><span>Registros</span></a>
      <ul>
        <li class='last'><a href='usuarios.php'><span>Usuarios</span></a></li>
        <li class='last'><a href='clientes.php'><span>Clientes</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='index.html'><span>Nuestra Empresa</span></a>
      <ul>
        <li class='last'><a href='Mision.php'><span>Mision y Vision</span></a></li>
      </ul>
   </li>
   <li><a href='#'><span>Servivio en Linea</span></a></li>
   <li><a href='#'><span>Tu Guia</span></a></li>
   <li><a href='#'><span>Cerrar Sesión</span></a></li>
</ul>
</div>
<section class="section_contenido">
  <section class="article">
      <fieldset class="fieldset_azul">
        <legend>
            <h1 class="legend_titulo">
                Usuario modificado exitosamente
            </h1>
        </legend>
            <table class="table_fieldset">
                <tr>
                  <td>
                    <img src='../img/like.png' widht="300px" height="300px">
                  </td>
                </tr>
            </table>  
    </fieldset>
  </section>
</section>
</body>
</html>