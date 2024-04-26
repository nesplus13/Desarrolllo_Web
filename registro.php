
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal para Estudiantes Universitarios</title>
    
</head>
<body>
<?php


// Conexion a la base de datos
$conexion = @mysqli_connect("localhost", "root"," ","deweb");

// Verificar la conexión

insertar($conexion);

// Recibir datos del formulario
function insertar($conexion){
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['edad'];

// Preparar la consulta SQL para insertar los datos en la base de datos
$consulta = "INSERT INTO usuario (nombre, email, edad) VALUES ('$nombre', '$email', '$edad')";
mysqli_query($conexion,$consulta);
mysqli_close($conexion);

 }


?>
<script>
        setTimeout(function)
        {
            windows.location.replace("index.php");
2000;
        }
    </script>
    <a href="exito.html"> Confirmacion de Datos<a/>
</body>
</html>