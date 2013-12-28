
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
                Registro de usuario
            </h1>
        </legend>
        <form action="php/agregar.php" name="cliente" method="POST">
          <input type="hidden" name="tabla" value="cliente"> 
          <input type="hidden" name="tipo_cliente" value="2">
            <table class="tabla_datos">
                <tr>
                  <th>
                    Identificación
                  </th>
                  <td>
                    <input type="text" name="iden_cliente" required="required" class="input_sesion" placeholder="Identificación">
                  </td>
                </tr>
                <tr>
                  <th>
                    Nombre
                  </th>
                  <td>
                    <input type="text" name="nom_cliente" required="required" class="input_sesion" placeholder="Nombres">
                  </td>
                </tr>
                <tr>
                  <th>
                    Apellido
                  </th>
                  <td>
                    <input type="text" name="apellido_cliente" required="required" class="input_sesion" placeholder="Apellidos">
                  </td>
                </tr>
                <tr>
                  <th>
                    Género
                  </th>
                  <td>
                    <select name="gen_cliente" required="required" class="input_sesion" placeholder="Género">
                      <option value="Masculino">Masculino</option>
                      <option value="Femenino">Femenino</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th>
                    Dirección
                  </th>
                  <td>
                    <input type="text" name="dir_cliente" required="required" class="input_sesion" placeholder="Dirección">
                  </td>
                </tr>
                <tr>
                  <th>
                    Telefono
                  </th>
                  <td>
                    <input type="tel" name="tel_cliente" required="required" class="input_sesion" placeholder="Telefono">
                  </td>
                </tr>
                <tr>
                  <th>
                    E-Mail
                  </th>
                  <td>
                    <input type="email" name="e_mail_cliente" required="required" class="input_sesion" placeholder="E-Mail">
                  </td>
                </tr>
                <tr>
                  <th>
                    Usuario
                  </th>
                  <td>
                    <input type="text" name="usuario_cliente" required="required" class="input_sesion" placeholder="Usuario">
                  </td>
                </tr>
                <tr>
                  <th>
                    Contraseña
                  </th>
                  <td>
                    <input type="password" name="password_cliente" required="required" class="input_sesion" placeholder="Contraseña">
                  </td>
                </tr>
                <tr>
                  <th>
                    Repetir contraseña
                  </th>
                  <td>
                    <input type="password" name="rpassword" required="required" class="input_sesion" placeholder="Repita contraseña">
                  </td>
                </tr>
            </table> 
          </br>
          <input type="submit" value="Registrarse" class="submit_fieldset_azul">
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
