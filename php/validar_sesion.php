<?php
include 'conexion.php';
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$usuario=$usuario;
$password=$password;
$consulta = "select id_cliente,nom_cliente,apellido_cliente,tipo_cliente from cliente where usuario_cliente='$usuario' AND password_cliente=md5('$password') limit 1";
$query = mysql_query ($consulta);
$fila=mysql_fetch_array($query, MYSQL_ASSOC);
$Total=mysql_num_rows($query);
?>
<?php
if($Total>0){
session_start ();
$_SESSION["id"]=$fila['id_cliente'];
$_SESSION["nombre"]=$fila["nom_cliente"].$fila["apellido_cliente"];
$_SESSION["tipo"]=$fila["tipo_cliente"];
?>
<?php 
//1 para Administrador
//2 para Cliente
if($fila["tipo_cliente"]==1)
  { ?>
  <meta http-equiv='Refresh' content='2;url=../panel_administrador.php'>
     <?php
}
else if($fila["tipo_cliente"]==2)
  { ?>
  <meta http-equiv='Refresh' content='2;url=../panel_cliente.php'>
    <?php
}
else
{
?>
<meta http-equiv='Refresh' content='2;url=../usuario_incorrecto.php'>; 
<?php
}
?>
<?php
}else{
?>
<meta http-equiv='Refresh' content='2;url=../usuario_incorrecto.html'>;
<?php
}
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
   <li class='has-sub'><a href='index.html'><span>Nuestra Empresa</span></a>
      <ul>
        <li class='last'><a href='Mision.php'><span>Mision y Vision</span></a></li>
      </ul>
   </li>
   <li><a href='#'><span>Servivio en Linea</span></a></li>
   <li><a href='#'><span>Tu Guia</span></a></li>
   <li><a href='iniciar_sesion.php'><span>Iniciar sesión</span></a></li>
</ul>
</div>
<section class="section_contenido">
  <section class="article">
      <fieldset class="fieldset_azul">
        <legend>
            <h1 class="legend_titulo">
                Bienvenido
            </h1>
        </legend>
        <img src="../img/like.png">
    </fieldset>
  </section>
</section>
</body>
</html>
