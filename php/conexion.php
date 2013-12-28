<?php
  $servidor="localhost";
  $usuario="root";
  $bd="airlines";
  $password="";
  $conexion = mysql_connect($servidor, $usuario,$password)or die("Problemas en la conexión con el servidor");
  mysql_select_db ($bd, $conexion)or die("Problemas en la seleccion  de la Base de Datos");
?> 