<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gracias</title>
</head>
<body>
  <a href="index.html">Volver a inicio</a>
  <?php


echo "Tu correo es ";
echo $_REQUEST['email'];
echo "Tu Nombre de usuario es ";
echo $_REQUEST['username'];
echo "Tu Contraseña es ";
echo $_REQUEST['password'];
  /*
    $conexion  = mysqli_conect("localhost", "root", "gutierrez") or die ("Problemas en la conexion");
    mysqli_query($conexion, "insert into alumnos(email, username, password) values ('$_REQUEST[email]', '$_REQUEST[username]', '$_REQUEST[password]')")
    or die ("Problemas en el SELECT" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "El alumno ha sido registrado con exito"*/
  ?>
</body>
</html>