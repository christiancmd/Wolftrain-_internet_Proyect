<?php

session_start();

include 'conection_db.php';

$email = $_POST['Email'];
$email = strtolower(string: $email);
$password = $_POST['Password'];
$password = hash(algo: 'sha512', data: $password);

$validar_login = mysqli_query(mysql: $conexion, query: "SELECT * FROM usuarios 
        WHERE Email = '$email' and Password = '$password'");

if (mysqli_num_rows(result: $validar_login) > 0) {
    $_SESSION['usuario'] = $email;
    header(header: "location: ../pages/home.php");
    exit;
} else {
    echo
        '
            <script>
                alert("Usuario no existe, por favor verificar los datos");
                window.location = "/src/pages/registration.php";
            </script>
        ';
    exit;
}

?>