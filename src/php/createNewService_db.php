<?php

//Incluimos la conexion

include 'conection_db.php';

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


//Recibimos los datos del formulario para la creacion del servicio

$full_name = $_POST['Name_service_create'];
$full_name = "Plan  " . ucfirst($full_name);
$price = $_POST['Price_create'];
$megas = $_POST['Megas_create'];
$description = $_POST['Description'];
$description = transformText($description);
//incriptar password
$availible_service = $_POST['select'];

print_r($full_name);
print_r($price);
print_r($megas);
print_r($description);
print_r($availible_service);



//Parejamos y insertamos los datos en la base de datos

$query = "INSERT INTO servicios(Name_services, Price, Megas, Description, Availability)
            VALUES ('$full_name', '$price', '$megas', '$description', '$availible_service')";

///Verificar que el correo no se repita en la bd

$verificar_name = mysqli_query(mysql: $conexion, query: "SELECT * FROM servicios 
        WHERE Name_services='$full_name'");
///Verificar que el usuario no se repita en la bd

/*$verificar_price = mysqli_query(mysql: $conexion, query: "SELECT * FROM servicios 
        WHERE Price='$price'");*/


if (mysqli_num_rows(result: $verificar_name) > 0) {
    echo
        '
        <script> 
            alert("Este Servicio ya esta registrado, intentalo con otro diferente");
            window.location = "../pages/dashboardServices.php"
        </script>
    ';
    mysqli_close(mysql: $conexion);
    exit;

}
/*
///Comprobar precio

if (mysqli_num_rows(result: $verificar_price) > 0) {
    echo
        '
        <script> 
            alert("Este precio ya esta registrado, intentalo con otro diferente");
            window.location = "../pages/dashboardServices.php"
        </script>
    ';
    mysqli_close(mysql: $conexion);
    exit;
}

*/
//Ejecutamos la consulta

$ejecutar = mysqli_query(mysql: $conexion, query: $query);

if ($ejecutar) {
    echo
        '
            <script>
                alert("Registro Existoso!");
                            window.location = "../pages/dashboardServices.php"

            </script>
        ';
} else {
    echo
        '
            <script>
                alert("Registro fallido, intentalo nuevamente!");
            window.location = "../pages/dashboardServices.php"
            </script>
        ';
}
//Cerrar conexion

mysqli_close(mysql: $conexion);

?>