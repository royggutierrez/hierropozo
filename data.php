<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gracias</title>
</head>
<body>
  <a href="index.html">Volver a inicio</a>
  <div>
  <?php
    $conexion  = mysqli_conect("localhost", "root") or die ("Problemas en la conexion");
    mysqli_query($conexion, "insert into alumnos(email, username, password) values ('$_REQUEST[email]', '$_REQUEST[username]', '$_REQUEST[password]')")
    or die ("Problemas en el SELECT" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "El alumno ha sido registrado con exito"
  ?>
  </div>
</body>
</html>