<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gracias</title>
</head>
<body>
  <?php
    echo "Tu correo es : ";
    echo $_REQUEST['email'];
    <br>
    echo "Tu nombre de usuario es : ";
    echo $_REQUEST['username'];
    echo "Tu contraseña es : ";
    <br>
    echo $_REQUEST['password'];
?>
</body>
</html>