<?php 
include 'php/conexion.php';
//Resultados de la busqueda con los arrays par amostrar la informacion
$cotizacion=$_POST['cotizacion'];
$travesia=$_POST['travesia'];
//Busqueda da por ida y vuelta
$resultados=$_POST['resultados'];//Cantidad de resultados encontrado
//1 para ida y 2 para ida y vuelta
function array_recibe($url_array) { 
     $tmp = stripslashes($url_array); 
     $tmp = urldecode($tmp); 
     $tmp = unserialize($tmp); 
    return $tmp; 
} 
if($resultados==1 || $resultados==2 || $resultados==3){
  $cotizacion=array_recibe($cotizacion);
} 
$cfilas=count($cotizacion);
$sql="select * from ciudades";
$result=mysql_query("$sql");
$result2=mysql_query("$sql");
$n=mysql_num_rows($result);
$m=mysql_num_fields($result);
$ciudades=array();
$recorrido=0;
while($fila = mysql_fetch_array($result)){
$ciudades[$recorrido]['id']=$fila['id'];
$ciudades[$recorrido]['nombre']=$fila['nombre'];
$recorrido=$recorrido+1;
}
$cciudades=count($ciudades);
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
    <form>
      <table class="tb_itinerario">
        <tr>
          <td colspan="4">
            <table class="tb_itinerario_titulo">
              <tr>
                <th rowspan="2">
                  Origen
                </th>
                <th rowspan="2">
                  Destino
                </th>
                <th colspan="2">
                  Clase
                </th>
              </tr>
              <tr>
                <td>
                  Ejecutiva
                </td>
                <td>
                  Turista
                </td>
              </tr>
            </table>
          </td>
          <td colspan="4">
            <table class="tb_itinerario_titulo">
              <tr>
                <th colspan="2">
                  Origen
                </th>
                <th rowspan="2">
                  Horario
                </th>
                <th rowspan="2"> 
                  Costo
                </th>
              </tr>
              <tr>
                <td>
                  Ida
                </td>
                <td>
                  Regreso
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td colspan="8">
            <?php if($resultados>0){echo "Cotizaciones de ida";}else{echo "No se encontraron vuelos";}?>
          </td>
        </tr>
        <?php if($resultados==1 || $resultados==2){
          for($filasr=0;$filasr<$cfilas;$filasr++){
            if(isset($cotizacion['ida'.$filasr])){
            ?>
            <tr>
              <td>
                
                <?php
                  for($rciudades=0;$rciudades<$cciudades;$rciudades++){
                    if($cotizacion['ida'.$filasr]['ciudad_origen']==$ciudades[$rciudades]['id']) echo $ciudades[$rciudades]['nombre'];
                  }
                ?>
              </td>
              <td>
                <?php
                  for($rciudades=0;$rciudades<$cciudades;$rciudades++){
                    if($cotizacion['ida'.$filasr]['ciudad_destino']==$ciudades[$rciudades]['id']) echo $ciudades[$rciudades]['nombre'];
                  }
                ?>
              </td>
              <?php
                if($cotizacion['ida'.$filasr]['cod_clase']==12){
              ?>
              <td>
                X
              </td>
              <td>
              </td>
              <?php
                }else{
              ?>
              <td>
              </td>
              <td>
                X
              </td>
              <?php
                }
              ?>
              <td>
              <?php
              echo $cotizacion['ida'.$filasr]['fecha'];
              ?>
              </td>
              <td>
              </td>
              <td>
                <?php
              echo $cotizacion['ida'.$filasr]['horario'];
              ?>
              </td>
              <td>
                <?php
              echo $cotizacion['ida'.$filasr]['costo'];
              ?>
              </td>
            </tr>
            <?php
            }
          }
        }
        ?>
        <tr>
          
            <?php
            if(($resultados==0 || $resultados==1) && $travesia==2) {
            ?>
            <td colspan="8">
            <?php
              echo "No se encontraron viajes de regreso";
            ?>
            </td>
            <?php
            }else if(($resultados==3 || $resultados==2) && $travesia==2){
            ?>
            <td colspan="8">
            <?php
              echo "Cotizaciones de regreso";
              ?>
            </td>
            <?php
            }else{

            }
            ?>
          </td>
        </tr>
        <?php 
        if($resultados==3 || $resultados==2){
          for($filasr=0;$filasr<$cfilas;$filasr++){
            if(isset($cotizacion['rso'.$filasr])){
        ?>
        <tr>
          <td>
            <?php
                  for($rciudades=0;$rciudades<$cciudades;$rciudades++){
                    if($cotizacion['rso'.$filasr]['ciudad_origen']==$ciudades[$rciudades]['id']) {
                      echo $ciudades[$rciudades]['nombre'];}
                  }
            //aqui hay que ver como lo arego..    
            ?>
          </td>
          <td>
            <?php
              for($rciudades=0;$rciudades<$cciudades;$rciudades++){
                if($cotizacion['rso'.$filasr]['ciudad_destino']==$ciudades[$rciudades]['id']) echo $ciudades[$rciudades]['nombre'];
              }
            ?>
          </td>
          <?php
                if($cotizacion['rso'.$filasr]['cod_clase']==12){
              ?>
              <td>
                X
              </td>
              <td>
              </td>
              <?php
                }else{
              ?>
              <td>
              </td>
              <td>
                X
              </td>
              <?php
                }
              ?>
          <td>
          </td>
          <td>
          <?php
            echo $cotizacion['rso'.$filasr]['fecha'];
          ?>
          </td>
          <td>
            <?php
            echo $cotizacion['rso'.$filasr]['horario'];
          ?>
          </td>
          <td>
            <?php
            echo $cotizacion['rso'.$filasr]['costo'];
          ?>
          </td>
        </tr>  
        <?php
            }
          }
        }
        ?>
      </table>
    </form>
  </section>
</section>
</body>
</html>
