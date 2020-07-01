<?php
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cedula = $_POST['cedula'];
$correo= $_POST['correo'];
$cargos= $_POST['cargos'];
$telefono = $_POST ['telefono'];
$direccion = $_POST ['direccion'];
$genero = $_POST['sexo'];
echo "El Personal:<br><br>"; 
echo "Nombres: $nombres <br>";
echo "Apellidos: $apellidos <br>";
echo "Cargo: $cargos <br>";
echo "Cedula: $cedula <br>";
echo "Telefono:$telefono <br>";
echo "Correo Electronico:$correo <br>";
echo "Dirección: $direccion <br>";
echo "Genero:$genero <br><br>";
echo "Ha sido registrado existosamente" ;

?>
