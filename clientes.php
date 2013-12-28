<?php
include 'php/conexion.php';
$sql="select * from cliente where tipo_cliente=2";
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
<script>
function confirmar()
{
  if(confirm('¿Esta seguro de que desea eliminar este registro?'))
  {
    return true;
  }
  else
  {
    return false;
  } 
}
</script>
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
   <li class='has-sub'><a href='index.html'><span>Nuestra Empresa</span></a>
      <ul>
        <li class='last'><a href='Mision.php'><span>Mision y Vision</span></a></li>
      </ul>
   </li>
   <li><a href='#'><span>Servivio en Linea</span></a></li>
   <li><a href='#'><span>Tu Guia</span></a></li>
   <li><a href='inicio.php'><span>Cerrar Sesión</span></a></li>
</ul>
</div>
<section class="section_contenido">
  <section class="article">
      <fieldset class="fieldset_azul">
        <legend>
            <h1 class="legend_titulo">
                Usuarios
            </h1>
        </legend>
            <table class="table_fieldset">
                <tr>
                  <th>
                    Identificación
                  </th>
                  <th>
                    Nombres
                  </th>
                  <th>
                    Apellidos
                  </th>
                  <th colspan="3">
                    Acciones
                  </th>
                </tr>
                <?php
                  for($fila=0;$fila<$n;$fila++)
                  {
                    ?>
                    <tr>
                      <td>
                        <?php
                        echo mysql_result($r,$fila,1);
                        ?>
                      </td>
                      <td>
                        <?php
                        echo mysql_result($r,$fila,2);
                        ?>
                      </td>
                      <td>
                        <?php
                        echo mysql_result($r,$fila,3);
                        ?>
                      </td>
                      <td>
                         <form method="POST" action="usuarios_consultar.php">
                          <input type="hidden" name ="id_cliente" value="<?php echo mysql_result($r,$fila,0);?>">
                          <input type="submit" class="button_consultar" value=' '>
                         </form> 
                      </td>
                      <td>
                        <form method="POST" action="usuarios_editar.php">
                          <input type="hidden" name ="id_cliente" value="<?php echo mysql_result($r,$fila,0);?>">
                          <input type="submit" class="button_editar" value=' '>
                         </form> 
                      </td>
                      <td>
                        <form method="POST" action="php/eliminar.php" name="cliente">
                          <input type="hidden" name ="id_cliente" value="<?php echo mysql_result($r,$fila,0);?>">
                          <input type="submit" class="button_eliminar" value=' ' onClick="return confirmar()">
                         </form> 
                      </td>
                    </tr>
                    <?php
                  }
                ?>
                <tr>
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                </tr>
            </table>  
    </fieldset>
  </section>
  <section class="section_subcontenido">
    <img src='img/usuarios.png' widht="200px" height="200px">
  </section>
</section>
</body>
</html>
