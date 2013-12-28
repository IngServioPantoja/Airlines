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
   <li class='has-sub'><a href='index.html'><span>Nuestra Empresa</span></a>
      <ul>
        <li class='last'><a href='Mision.php'><span>Mision y Vision</span></a></li>
      </ul>
   </li>
   <li><a href='servicio.php'><span>Servivio en Linea</span></a></li>
   <li><a href='#'><span>Tu Guia</span></a></li>
   <li><a href='iniciar_sesion.php'><span>Iniciar sesión</span></a></li>
</ul>
</div>
<section class="section_contenido">
  <section class="article">
      <fieldset class="fieldset_azul">
        <legend>
            <h1 class="legend_titulo">
                Bienvenidos
            </h1>
        </legend>
        <form action="php/validar_sesion.php" name="cliente" method="POST">
            <table class="table_fieldset">
                <tr>
                    <td width="10%">

                    </td>
                    <td widht="90%">
                        <span class="span_titulo">Sistema de reservación de vuelos</span>
                    </br></br>
                        Si aun no estas registrado oprime
                    </br></br>
                    <a href='registro_inicial.php'><span class="span_primer_registro">Registrarse por primera vez</span></a>
                    </br></br>
                    Para acceder a todos los servicios ofrecidos
                    </td></td>
                </tr>
                <tr>
                  <table>
                    <tr>
                      <td>
                         <input type="text" name="usuario" required="required" class="input_sesion" placeholder="Usuario">
                    </td>
                    <td>
                         <input type="password" name="password" required="required" class="input_sesion" placeholder="Contraseña">
                    </td>
                    </tr>
                  </table>  
                </tr>
            </table>  
            </br>
            <input type="submit" value="Registrarse" class="submit_fieldset_azul">
          </br>
        </form>
    </fieldset>
  </section>
  <section class="section_subcontenido">
    <img src='img/sol_avion.jpg' class="img_right">
  </section>
</section>
</body>
</html>
