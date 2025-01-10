<?php

//Incluimos la conexion

include '../php/conection_db.php';

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}



function transformText($text)
{
    $sentences = explode(separator: '.', string: $text);
    foreach ($sentences as &$sentence) {
        $sentence = ltrim($sentence);
        // Eliminar espacios en blanco al inicio 
        $sentence = ucfirst($sentence);
        // Convertir la primera letra en mayúscula
    }

    $text = implode('. ', $sentences);
    return $text;
}


//Recibimos los datos del formulario

$serviceId = $_POST['ID_service_update'];
$full_name_service = $_POST['Full_name_update'];
$full_name_service = strtolower($full_name_service);
$full_name_service = ucfirst($full_name_service);

$price = $_POST['Price_update'];

$megas = $_POST['Megas_update'];

$description = $_POST['Description_update'];
$description = transformText($description);

$select_availibility = $_POST['Select_update'];





function updateDataUser($id, $name, $price, $megas, $description, $availibility, $conn): void
{
    // Verificar conexión 
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "UPDATE servicios SET IDservices = ?, Name_services = ?, Price = ?, Megas = ?, Description = ?, Availability = ?  WHERE IDservices = ? limit 1";


    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $id, $name, $price, $megas, $description, $availibility, $id); /// actualizacion  
    if ($stmt->execute()) {
        echo "Registro actualizado con éxito.";
        header(header: "location: ../pages/dashboardServices.php");

    } else {
        echo "Error al actualizar el registro: " . $stmt->error;
        header(header: "location: ../pages/dashboardServices.php");

    } // Cerrar la conexión
    $stmt->close();

}

updateDataUser($serviceId, $full_name_service, $price, $megas, $description, $select_availibility, $conexion);

$conexion->close();



?>