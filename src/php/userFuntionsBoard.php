<?php
include '../php/conection_db.php';

///////////////////////////////////////Filter////////////////////////////////////
//dashboard client
function getDataUni($filtro, $conn): mixed  //Obtener los datos de un usuario
{
    $sql = "SELECT * FROM usuarios WHERE LOWER(Full_name) LIKE '%$filtro%' AND rol_id = 2 LIMIT 1";
    $stmt = $conn->prepare($sql);//Preparamos la consulta
    $stmt->execute();// ejecutamos la consulta
    $result_user = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); //Obtenemos los resultados de la consulta
    $usuarios = array(); // Inicializar el array

    $index = 0;

    // Usar fetchAll() para resultados más limpios
    if (count($result_user) > 0) {
        foreach ($result_user as $row) {
            $index++; //Incrementamos el indice
            $usuarios[$index] = $row; //Guardamos los datos en el array
        }
    }
    return !isset($usuarios) ? array() : $usuarios;
}

///////////////////////////////////////Pagination////////////////////////////////////

function getDataUsers(mysqli $conn, $pag_actual, $reg_per_page): array //Obtener los datos de los usuarios
{
    $offset = ($pag_actual - 1) * $reg_per_page;

    $sql = "SELECT IDuser, Full_name, Email, Name_user, Service FROM usuarios WHERE rol_id = 2 LIMIT $reg_per_page OFFSET $offset";
    $stmt = $conn->prepare($sql);//Preparamos la consulta
    $stmt->execute();// ejecutamos la consulta
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); //Obtenemos los resultados de la consulta
    $dataUser = array(); // Inicializar el array

    //$result_sql = $conexion->query(query: $sql);
    $index = 0;

    // Usar fetchAll() para resultados más limpios
    if (count($result) > 0) {
        foreach ($result as $row) {
            $index++; //Incrementamos el indice
            $usuarios[$index] = $row; //Guardamos los datos en el array
        }
    }
    return !isset($usuarios) ? array() : $usuarios;

}

function countUsers(mysqli $conexion): int      //Calcular el total de paginas
{
    $sql = "SELECT COUNT(*) as total FROM usuarios WHERE rol_id = 2";
    $result_sql = $conexion->query(query: $sql);
    $total = $result_sql->fetch_assoc();
    return intval(value: $total['total']);
}
