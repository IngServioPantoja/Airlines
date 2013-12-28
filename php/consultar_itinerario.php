<?php 
include 'conexion.php';
$travesia=$_POST['travesia'];
$ciudad_origen=$_POST['ciudad_de_origen'];
$ciudad_destino=$_POST['ciudad_de_destino'];
$fecha_de_salida=$_POST['fecha_de_salida'];
$fecha_de_vuelta=$_POST['fecha_de_vuelta'];
$clase=$_POST['clase'];
function array_envia($array) { 
     $tmp = serialize($array); 
     $tmp = urlencode($tmp); 
     return $tmp; 
} 
$contenido=array();
  //Si es 1 es viaje de solo de ida
    $sql="select * from itinerarios_vuelo where 
    ciudad_origen=$ciudad_origen and 
    ciudad_destino=$ciudad_destino and
    cod_clase=$clase and
    fecha='$fecha_de_salida'
    ";
  $resultado=mysql_query($sql);
  $filas=mysql_num_rows($resultado);
    if($filas>0){
      //i found a result
      $index=0;
      while($recorrido = mysql_fetch_array($resultado)) {
        $contenido['ida'.$index]=$recorrido;
        $index=$index+1;
      }
      $resultado=array_envia($contenido);
      $resultados=1;
    }
    else{
      // No se encontraron viajes
      $resultados=0;
    }

if ($travesia==2){
  //Complementamos el viaje de regreso
  $sql="select * from itinerarios_vuelo where 
    ciudad_origen=$ciudad_destino and 
    ciudad_destino=$ciudad_origen and
    cod_clase=$clase and
    fecha='$fecha_de_vuelta'
    ";
    $resultado=mysql_query($sql);
    $filas=mysql_num_rows($resultado);
    if($filas>0){
      //i found a result
      //$resultado=mysql_fetch_array($resultado);
      //$resultado=array_envia($resultado); 
      $index=0;
      while($recorrido = mysql_fetch_array($resultado)) {
        $contenido['rso'.$index]=$recorrido;
        $index=$index+1;
      }
      $resultado=array_envia($contenido);
      if($resultados==0){
        $resultados=3;
      }else{
        $resultados=2;
      }
    }
    else{
      // No se encontraron viajes
      $resultado=array_envia($contenido);
      if($resultados==0){
        $resultados=0;
      }else{
        $resultados=1;
      }
    }

}

?>
<!DOCTYPE html>
<html lagn="es">
<head>
<meta charset='utf-8'>
<title>AIRLINES Viaja Seguro </title>
	<link rel='stylesheet' type='text/css' href='styles.css' />
  <script type="text/javascript"></script>
<script>
function submitear()
    {
          document.form_cotizacion.submit();
    }
</script>
</head>
<body onLoad="javascript:submitear();">
  <form action="../cotizacion.php" name="form_cotizacion" method="POST">
        <input type="hidden" name="cotizacion" value="<?php echo $resultado ?>">
        <input type="hidden" name="travesia" value="<?php echo $travesia ?>">
        <input type="hidden" name="resultados" value="<?php echo $resultados ?>">
      </form>
</body>
</html>
