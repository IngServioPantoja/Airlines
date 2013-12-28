<?php
include 'conexion.php';
$id_cliente=$_POST["id_cliente"];
$delete="delete from cliente where id_cliente='$id_cliente'";
$query = mysql_query ($delete)or die(mysql_error());
//Por integridad en caso de algun tipo de falla
?>
<?php
echo '<div id="div_centro_centro">
			<div id="div_centro_centro_texto">
			  <p>Usuario eleiminado exitosamente.</p>
			  
        </div>
			<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=../clientes.php" />
		</div>';

?>



