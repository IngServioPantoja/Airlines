<?php 
$hoy = date('Y-m-d');
include 'php/conexion.php';
$sql="select * from ciudades";
$resultado=mysql_query($sql);
$columnas=mysql_num_fields($resultado);
$filas=mysql_num_rows($resultado);
$sqlc="select cod_clase,descripcion_clase from clase";
$resultadoc=mysql_query($sqlc);
$columnasc=mysql_num_fields($resultadoc);
$filasc=mysql_num_rows($resultadoc);
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
   <li class='has-sub'><a href=''><span>Registros</span></a>
      <ul>
        <li class='last'><a href='usuarios.php'><span>Usuarios</span></a></li>
        <li class='last'><a href='clientes.php'><span>Clientes</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='panel_administrador.php'><span>Nuestra Empresa</span></a>
      <ul>
        <li class='last'><a href='Mision.php'><span>Mision y Vision</span></a></li>
      </ul>
   </li>
   <li><a href='#'><span>Servivio en Linea</span></a></li>
   <li><a href='tu_guia.php'><span>Tu Guia</span></a></li>
   <li><a href='inicio.php'><span>Cerrar Sesión</span></a></li>
</ul>
</div>
<section class="section_contenido">
  <section class="article">
    <fieldset class="fieldset_itinerario">
      <legend>Itinerario de vuelos</legend>
      <form action="php/consultar_itinerario.php" method="POST">
        <table>
          <tr>
            <td colspan="2">
              <input type = "radio"
                   name = "travesia"
                   value = "1" 
                   checked="checked"/>
            <label for = "sizeMed">Viaje de ida</label>
   
            <input type = "radio"
                   name = "travesia"
                   value = "2" />
            <label for = "sizeLarge">Viaje de ida y vuelta</label>
            </td>
          </tr>
          <tr>
            <td>
              Ciudad de origen
            </td>
            <td>
              Ciudad de destino
            </td>
          </tr>
          <tr>
            <td>
              <select name="ciudad_de_origen" required="required" class="input_sesion" placeholder="Género">
              <?php 
                for($rfilas=0;$rfilas<$filas;$rfilas++){
              ?>
                  <option value="<?php echo mysql_result($resultado,$rfilas,0) ?>"><?php echo mysql_result($resultado,$rfilas,1) ?></option>
              <?php
                }
              ?>
              </select>
            </td>
            <td>
              <select name="ciudad_de_destino" required="required" class="input_sesion" placeholder="Género">
              <?php 
                for($rfilas=0;$rfilas<$filas;$rfilas++){
              ?>
                  <option value="<?php echo mysql_result($resultado,$rfilas,0) ?>"><?php echo mysql_result($resultado,$rfilas,1) ?></option>
              <?php
                }
              ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              Fecha de salida
            </td>
            <td>
              Fecha de vuelta
            </td>
          </tr>
          <tr>
            <td>
              <input type="date" min="<?php echo $hoy; ?>" name="fecha_de_salida" required="required">
            </td>
            <td>
              <input type="date" min="<?php echo $hoy; ?>" name="fecha_de_vuelta" required="required">
            </td>
          </tr>
          <tr>
            <td colspan="2">
              Clase
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <select name="clase" required="required" class="input_sesion" placeholder="Clase">
              <?php 
                for($rfilas=0;$rfilas<$filasc;$rfilas++){
              ?>
                  <option value="<?php echo mysql_result($resultadoc,$rfilas,0) ?>"><?php echo mysql_result($resultadoc,$rfilas,1) ?></option>
              <?php
                }
              ?>
            </td>
          </tr>
        </table>
        </br>
        <input type="submit" value="Consultar" class="submit_fieldset_azul">
        </br>
      </form>
    </fieldset> 
  </section>
</section>
</body>
</html>
