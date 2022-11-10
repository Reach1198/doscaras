<?php 

include "conexion.php";

$nombrecompleto = $_POST['nombrecompleto'];
$curp = $_POST['curp'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];



//echo $nombrecompleto.'<br>'; 
//echo $curp.'<br>';
//echo $telefono.'<br>';
//echo $direccion.'<br>';
//echo $contrasenia.'<br>';
//echo $correo.'<br>';



$insertar ="INSERT INTO usuarios(nombre_completo , curp , telefono , direccion , contrasenia , correo ) VALUES ('$nombrecompleto','$curp','$telefono','$direccion','$contrasenia','$correo')";

$query = mysqli_query($conectar, $insertar);


if($query){
  echo "<script>
  
          alert('Si se guardaron los datos con exito');
          location.href='login/login.php';
  </script>";
}


?>