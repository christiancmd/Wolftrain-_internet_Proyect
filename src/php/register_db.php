<?php

//Incluimos la conexion

include 'conection_db.php';

//Recibimos los datos del formulario

$full_name = $_POST['Full_name'];
$email = $_POST['Email'];
//Convertimos el correo a minusculas
$email = strtolower($email);
$name_user = $_POST['Name_user'];
//Convertimos el usuario a minisculas
$name_user = strtolower($name_user);
$password = $_POST['Password'];
//incriptar password
$password = hash(algo: 'sha512', data: $password);

//Parejamos y insertamos los datos en la base de datos

$query = "INSERT INTO usuarios(Full_name, Email, Name_user, Password)
            VALUES ('$full_name', '$email', '$name_user', '$password')";

///Verificar que el correo no se repita en la bd

$verificar_correo = mysqli_query(mysql: $conexion, query: "SELECT * FROM usuarios 
        WHERE Email='$email'");
///Verificar que el usuario no se repita en la bd

$verificar_name_user = mysqli_query(mysql: $conexion, query: "SELECT * FROM usuarios 
        WHERE Name_user='$name_user'");

///Comprobar correo

if (mysqli_num_rows(result: $verificar_correo) > 0) {
    echo
        '
        <script> 
            alert("Este Correo ya esta registrado, intentalo con otro diferente");
            window.location = "../pages/registration.php"
        </script>
    ';
    mysqli_close(mysql: $conexion);
    exit;

}

///Comprobar usuario

if (mysqli_num_rows(result: $verificar_name_user) > 0) {
    echo
        '
        <script> 
            alert("Este usuario ya esta registrado, intentalo con otro diferente");
            window.location = "../pages/registration.php"
        </script>
    ';
    mysqli_close(mysql: $conexion);
    exit;
}

//Ejecutamos la consulta

$ejecutar = mysqli_query(mysql: $conexion, query: $query);

if ($ejecutar) {
    echo
        '
            <script>
                alert("Registro Existoso!");
                window.location= "../pages/registration.php";
            </script>
        ';
} else {
    echo
        '
            <script>
                alert("Registro fallido, intentalo nuevamente!");
                window.location= "../pages/registration.php";
            </script>
        ';
}


//Cerrar conexion

mysqli_close(mysql: $conexion);


?>