<?php

include '../php/conection_db.php';

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener el ID del usuario desde la solicitud POST 
$ID = $_POST['ID'];

print_r($ID);

$sql = "DELETE FROM usuarios WHERE IDuser = ?";
$stmt = $conexion->prepare(query: $sql);
$stmt->bind_param("i", $ID);
if ($stmt->execute()) {
    echo "Usuario eliminado";
} else {
    echo "Error al eliminar el usuario: " . $conexion->error;
}
// Cerrar la conexión
$stmt->close();
$conexion->close();
// Eliminar el usuario de la base de datos 


?>