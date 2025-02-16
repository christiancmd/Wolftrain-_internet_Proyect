<?php
include '../php/conection_db.php';

//Todos los archivos
// Funcion para extraer los datos de un archivo JSON y convertirlos en un array
function getArrayData(string $filename)
{ // Se recibe el nombre del archivo JSON
    $jsonData = file_get_contents(filename: $filename);
    $data = json_decode(json: $jsonData, associative: true);
    return $data;
} // Se retorna el array con los datos del archivo JSON para ser utilizado en otro archivo


//AdminHome
//Conseguir los datos basicos de los servicios
function getServiceBasicData($conexion): mixed
{
    $sql = "SELECT IDservices, Name_services FROM servicios Where Availability = 1";
    $stmt = $conexion->prepare($sql);//Preparamos la consulta
    $stmt->execute();// ejecutamos la consulta
    $result_services = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); //Obtenemos los resultados de la consulta
    $data = array(); // Inicializar el array

    $index = 0;

    // Usar fetchAll() en lugar de bucles para resultados más limpios
    if (count($result_services) > 0) {
        foreach ($result_services as $row) {
            $index++; //Incrementamos el indice
            $data[$index] = $row; //Guardamos los datos en el array
        }
    }
    return !isset($data) ? array() : $data;
}


//dashboard service
//Conseguir los datos completos de los servicios
function getServiceFullData($conexion): mixed
{
    $sql = "SELECT IDservices, Name_services, Price, Megas, Description, Availability FROM servicios";
    $stmt = $conexion->prepare($sql);//Preparamos la consulta
    $stmt->execute();// ejecutamos la consulta
    $result_services = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); //Obtenemos los resultados de la consulta
    $data = array(); // Inicializar el array

    $index = 0;

    // Usar fetchAll() para resultados más limpios
    if (count($result_services) > 0) {
        foreach ($result_services as $row) {
            $index++; //Incrementamos el indice
            $data[$index] = $row; //Guardamos los datos en el array
        }
    }
    return !isset($data) ? array() : $data;
}

//home
//Conseguir los datos completos de los servicios que esten disponibles
function getServiceAvailibleData($conexion): mixed
{
    $sql = "SELECT IDservices, Name_services, Price, Megas, Description, Availability FROM servicios WHERE Availability = 1";
    $stmt = $conexion->prepare($sql);//Preparamos la consulta
    $stmt->execute();// ejecutamos la consulta
    $result_services = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); //Obtenemos los resultados de la consulta
    $data = array(); // Inicializar el array

    $index = 0;

    // Usar fetchAll() para resultados más limpios
    if (count($result_services) > 0) {
        foreach ($result_services as $row) {
            $index++; //Incrementamos el indice
            $data[$index] = $row; //Guardamos los datos en el array
        }
    }
    return !isset($data) ? array() : $data;
}

//details service
//Conseguir los datos completos de los servicios
function getUniqueService($conexion, $id): mixed
{
    $sql = "SELECT IDservices, Name_services, Price, Megas, Description FROM servicios WHERE IDservices = $id AND Availability = 1";
    $stmt = $conexion->prepare($sql);//Preparamos la consulta
    $stmt->execute();// ejecutamos la consulta
    $result_services = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); //Obtenemos los resultados de la consulta
    $data = array(); // Inicializar el array

    $index = 0;

    // Usar fetchAll() para resultados más limpios
    if (count($result_services) > 0) {
        foreach ($result_services as $row) {
            $index++; //Incrementamos el indice
            $data[$index] = $row; //Guardamos los datos en el array
        }
    }
    return !isset($data) ? array() : $data;
}

