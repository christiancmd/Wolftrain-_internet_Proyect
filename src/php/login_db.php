<?php

session_start();

include 'conection_db.php';

$email = $_POST['Email'];
$email = strtolower(string: $email);
$password = $_POST['Password'];

$password = $password != 'admin' ? hash(algo: 'sha512', data: $password) : $password;

$validar_login = mysqli_query(mysql: $conexion, query: "SELECT * FROM usuarios 
        WHERE Email = '$email' and Password = '$password'");

if (mysqli_num_rows(result: $validar_login) > 0) {
    $_SESSION['usuario'] = $email;

    $conn = $conexion;

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM usuarios where Email = '$email' and Password = '$password'";
    $result = $conn->query(query: $sql);


    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            file_put_contents(filename: 'arrayData.json', data: json_encode(value: $row));

            if ($row["rol_id"] == 1) {
                header(header: "location: ../pages/adminHome.php");
            } elseif ($row["rol_id"] == 2) {
                header(header: "location: ../pages/home.php");
            } else {
                echo
                    '
                    <script>
                        alert("Rol no indentificado, por favor verificar los datos si");
                        window.location = "/src/pages/registration.php";
                    </script>
                ';
                exit;
            }
        }
    } else {
        echo "0 resultados";
    }

    // Cerrar la conexión
    $conn->close();
    /* Pagina -> quitar comentario
        header(header: "location: ../pages/home.php");
        */
    exit;
} else {
    echo
        '
            <script>
                alert("Usuario no existe, por favor verificar los datos");
                window.location = "../pages/registration.php";
            </script>
        ';
    exit;
}

?>