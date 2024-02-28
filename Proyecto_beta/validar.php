<?php


include('db.php');  // Incluye el archivo de conexión

$USUARIO=$_POST['txtsername'];
$PASSWORD=$_POST['txtpassword'];

$consulta = "SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if ($filas) {
    // Las credenciales son válidas, puedes redirigir al usuario a la página principal.
    header("location:/PRINCIPAL/index.html");
} else {
    // Las credenciales son incorrectas, redirige de nuevo al formulario de inicio de sesión con un mensaje de error.
    include("error.html")    
    
    
    
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>
