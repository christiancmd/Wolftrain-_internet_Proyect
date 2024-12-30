<?php
session_start();

echo "hola admin";

if (!isset($_SESSION['usuario'])) {
    echo
        '
            <script> 
                alert("Por favor debes iniciar sesion");
                window.location = "registrtion.php";
            </script>
        ';
    session_destroy();
    die();
}

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Hola Admin</h1>
    <h2>macarena</h2>
    <button><a href="../php/cerrar_session.php">Cerrar session</a></button>
</body>

</html>