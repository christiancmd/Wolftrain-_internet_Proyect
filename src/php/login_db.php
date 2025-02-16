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
    //$_SESSION['usuario'] = $email;
    $conn = $conexion;

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $query = $conexion->prepare(query: "SELECT * FROM usuarios WHERE Email = ? AND Password = ?");
    $query->bind_param("ss", $email, $password);
    $query->execute();
    $result = $query->get_result();

    function createJsonFile($row): void
    {
        file_put_contents(filename: 'arrayData.json', data: json_encode(value: $row));
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ///Depuracion

            if ($row["rol_id"] == 1) {
                $_SESSION['usuario_id'] = $row['IDuser'];
                $_SESSION['rol'] = $row['rol_id'];
                header(header: "location: ../pages/adminHome.php");
                exit();

            } elseif ($row["rol_id"] == 2) {
                createJsonFile(row: $row);
                $_SESSION['usuario_id'] = $row['IDuser'];
                $_SESSION['rol'] = $row['rol_id'];
                header(header: "location: ../pages/home.php");
                exit();

            } else {
                echo "Rol no identificado, por favor verificar los datos";
            }
        }
    } else {
        echo '
        <script>
            alert("ERROR: Usuario no encontrado, por favor verificar los datos");
            window.location = "/src/pages/registration.php";
        </script>
    ';
        exit();

    }
    // Cerrar la conexión
    $conn->close();
    exit;
} else {
    header(header: "Location: ../pages/registration.php?error=123");
    exit();
}

?>