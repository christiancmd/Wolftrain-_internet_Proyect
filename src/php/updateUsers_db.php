<?php

//Incluimos la conexion

include '../php/conection_db.php';

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}


//Recibimos los datos del formulario

$userId = $_POST['ID_user'];
$full_name = $_POST['Full_name'];
$full_name = strtolower($full_name);
$email = $_POST['Email'];
$email = strtolower($email);//Convertimos el correo a minusculas
$name_user = $_POST['Name_user'];
$name_user = strtolower($name_user);//Convertimos el usuario a minisculas
$service = $_POST['Service'];
$service = strtolower($service);


function updateDataUser($id, $name, $email, $user, $service, $conn): void
{
    // Verificar conexión 
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "UPDATE usuarios SET Full_name = ?, Email = ?, Name_user = ?, Service = ?  WHERE IDuser = ? limit 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $user, $service, $id); /// actualizacion 
    if ($stmt->execute()) {
        echo "Registro actualizado con éxito.";
        header(header: "location: ../pages/dashboardClient.php");

    } else {
        echo "Error al actualizar el registro: " . $stmt->error;
    } // Cerrar la conexión
    $stmt->close();

}

updateDataUser($userId, $full_name, $email, $name_user, $service, $conexion);

$conexion->close();



?>