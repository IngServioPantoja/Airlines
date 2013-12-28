<?php
include 'conexion.php';
$_POST['password_cliente']=md5($_POST['password_cliente']);
$cantidad_post = count($_POST);
$nombres_variables = array_keys($_POST); // obtiene los nombres de las varibles
$valores_variables = array_values($_POST);// obtiene los valores de las varibles
$valores="";
$atributos="";
// crea las variables y les asigna el valor
for($i=1;$i<$cantidad_post-1;$i++)
{ 
$$nombres_variables[$i]=$valores_variables[$i]; 
if($i+1==$cantidad_post-1)
{
$valores=$valores."'".$$nombres_variables[$i]."'";
$atributos=$atributos."$nombres_variables[$i]";
}
else
{
$valores=$valores."'".$$nombres_variables[$i]."',";
$atributos=$atributos."$nombres_variables[$i],";
}
}
$actualizar="insert into $valores_variables[0] ($atributos) values($valores)";
$query = mysql_query ($actualizar)or die(mysql_error());
//Por integridad en caso de algun tipo de falla
?>
<?php
echo '<div id="div_centro_centro">
			<div id="div_centro_centro_texto">
			  <p>Usuario agregado exitosamente.</p>
			  
        </div>
			<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=../clientes.php" />
		</div>';

?>




