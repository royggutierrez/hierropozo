<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gracias</title>
</head>
<body>
  <?php
    echo "Tu correo es : ";
    echo $_REQUEST['email'] "\n";
    echo "Tu nombre de usuario es : ";
    echo $_REQUEST['username']"\n";
    echo "Tu contraseña es : ";
    echo $_REQUEST['password'];
?>
</body>
</html>