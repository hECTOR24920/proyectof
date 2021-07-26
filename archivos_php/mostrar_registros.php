<?php
require_once("conexion.php");

$solicitud = "SELECT * FROM datos_usuarios ORDER BY Nombre ASC";
$resultado = mysqli_query($conexion, $solicitud);

$sub_titulo = "Usuarios Registrados";
echo "\t<h2>" . $sub_titulo . "</h2>\n";

echo "\t<table cellpadding='10' cellspacing='10'>
\t\t<tr>
\t\t\t<th>Nombres</th>
\t\t\t<th>Domicilio</th>
\t\t\t<th>Telefono</th>
\t\t\t<th>Nick</th>
\t\t\t<th>Password</th>
\t\t\t<th>Tipo de usuario</th>
\t\t\t<th>Acción</th>
\t\t</tr>\n";
while($usuarios_registrados = mysqli_fetch_array($resultado)){
	$usuario_nombre = $usuarios_registrados['Nombre'];
	$usuario_Domicilio = $usuarios_registrados['Domicilio'];
	$usuario_telefono = $usuarios_registrados['Telefono'];
	$usuario_nick = $usuarios_registrados['nick'];
	$usuario_password = $usuarios_registrados['Password'];
	$usuario_tipo_de_usuario = $usuarios_registrados['tipo de usuario '];
	$usuario_id = $usuarios_registrados['ID'];
	$enlace_borrar = "<a id='enlace_borrar' href='../Registro_Simple/archivos_php/borrar_registros.php?id=".$usuario_id."'>Eliminar</a>";
	
	echo "\t\t<tr>\n";
	echo "\t\t\t<td>" . $usuario_nombre . "</td>\n";
	echo "\t\t\t<td>" . $usuario_Domicilio . "</td>\n";
	echo "\t\t\t<td>" . $usuario_nick. "</td>\n";
	echo "\t\t\t<td>" . $usuario_password . "</td>\n";
	echo "\t\t\t<td>" . $usuario_tipo_de_usuario . "</td>\n";
	echo "\t\t\t<td>" . $enlace_borrar . "</td>\n";
	echo "\t\t</tr>\n";
}
echo "\t</table>\n";
?>
