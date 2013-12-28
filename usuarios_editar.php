<?php
include 'php/conexion.php';
$id_cliente=$_POST['id_cliente'];
$id_cliente=$id_cliente;
$sql = "select * from cliente where id_cliente='$id_cliente' limit 1";
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
	<link rel='stylesheet' type='text/css' href='styles.css' />
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
</head>
<body background="titulo.jpg" style='background-repeat:no-repeat;' /> 

<br/><br/><br/><br/><br/><br/><br/><br/>

<div id='cssmenu'> 
<ul>
   <li class='has-sub'><a href='panel_administrador.php'><span>Registros</span></a>
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
                Modificar usuario
            </h1>
        </legend>
        <form action="php/editar.php" name="cliente" method="POST">
          <input type="hidden" name="tabla" value="cliente"> 
            <table class="tabla_datos">
                <tr>
                  <th>
                    Identificación
                  </th>
                  <td>
                    <input type="text" name="iden_cliente" required="required" class="input_sesion" placeholder="Identificación" value="<?php echo mysql_result($r,0,1); ?>">
                  </td>
                </tr>
                <tr>
                  <th>
                    Nombre
                  </th>
                  <td>
                    <input type="text" name="nom_cliente" required="required" class="input_sesion" placeholder="Nombres" value="<?php echo mysql_result($r,0,2); ?>">
                  </td>
                </tr>
                <tr>
                  <th>
                    Apellido
                  </th>
                  <td>
                    <input type="text" name="apellido_cliente" required="required" class="input_sesion" placeholder="Apellidos" value="<?php echo mysql_result($r,0,3); ?>">
                  </td>
                </tr>
                <tr>
                  <th>
                    Género
                  </th>
                  <td>
                    <input type="text" name="gen_cliente" required="required" class="input_sesion" placeholder="Género" value="<?php echo mysql_result($r,0,4); ?>">
                  </td>
                </tr>
                <tr>
                  <th>
                    Dirección
                  </th>
                  <td>
                    <input type="text" name="dir_cliente" required="required" class="input_sesion" placeholder="Dirección" value="<?php echo mysql_result($r,0,5); ?>">
                  </td>
                </tr>
                <tr>
                  <th>
                    Telefono
                  </th>
                  <td>
                    <input type="text" name="tel_cliente" required="required" class="input_sesion" placeholder="Telefono" value="<?php echo mysql_result($r,0,6); ?>">
                  </td>
                </tr>
                <tr>
                  <th>
                    E-Mail
                  </th>
                  <td>
                    <input type="text" name="e_mail_cliente" required="required" class="input_sesion" placeholder="E-Mail" value="<?php echo mysql_result($r,0,7); ?>">
                  </td>
                </tr>
                <tr>
                  <th>
                    Usuario
                  </th>
                  <td>
                    <input type="text" name="usuario_cliente" required="required" class="input_sesion" placeholder="Usuario" value="<?php echo mysql_result($r,0,8); ?>">
                  </td>
                </tr>
            </table> 
          </br>
          <input type="submit" value="Guardar cambios" class="submit_fieldset_azul">
          </br> 
        </form>
    </fieldset>
  </section>
  <section class="section_subcontenido">
    <img src='img/usuarios.png' widht="200px" height="200px">
  </section>
</section>
</body>
</html>
