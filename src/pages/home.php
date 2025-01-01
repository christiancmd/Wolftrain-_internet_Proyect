<?php
declare(strict_types=1);
require_once '../php/config.php';

include '../php/conection_db.php';


function getArrayData(string $filename)
{
    $jsonData = file_get_contents(filename: $filename);
    $data = json_decode(json: $jsonData, associative: true);
    return $data;
}

$arrayData = getArrayData(filename: "../php/arrayData.json");



$sql = "SELECT IDservices, Name_services, Price, Megas FROM servicios Where Availability = 1";
$result_services = $conexion->query(query: $sql);

$i = 0;

if ($result_services->num_rows > 0) {
    while ($row = $result_services->fetch_assoc()) {
        $i += 1;
        $data[$i] = $row;
    }
}

define(constant_name: "userPhoto", value: "../img/home-php/user-icon.png");


session_start();


/*                          Al termirnar quitar los comentarios

if (!isset($_SESSION['usuario'])) {
    echo
        '
            <script> 
                alert("Por favor debes iniciar sesion");
                window.location = "registration.php";
            </script>
        ';
    session_destroy();
    die();
}
    */

session_destroy();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda Online</title>
    <link rel="stylesheet" href="../style/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <!-- HEADER -->
    <header id="header-container">
        <div class="header-box">
            <div class="title">
                <img src="../../public/Logo.jpg" alt="Our icon">
                <h1><a href="../../index.html">WolfTrain</a></h1>
            </div>
            <nav class="navegator-box">

                <section class="ul-list-mobile" id="nav-php">
                    <header class="header-list">
                        <h3>Menú</h3>
                        <img id="icon-close" src="../img/icon-nav/close.png" alt="close">
                    </header>
                    <div class="user-general">
                        <div class="general-minibox">
                            <!-- php-->
                            <img src="<?= userPhoto ?>" alt="user photo">

                            <div class="data-user">
                                <h4>
                                    <?= $arrayData['Full_name'] ?>
                                </h4>
                                <p>
                                    <?= $arrayData['Email'] ?>
                                </p>
                            </div>
                            <!-- php-->
                        </div>

                    </div>
                    <p>___________________________________</p>
                    <div class="title">
                        <img src="../../public/Logo.jpg" alt="Our icon">
                    </div>
                    <div class="grid-brands-container">
                        <!-- php-->
                        <?php
                        $icon_svg = '
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><g fill="none"><path fill="url(#fluentColorBuildingStore160)" d="M2 6.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5z"/><path fill="url(#fluentColorBuildingStore161)" fill-opacity="0.8" d="M4 9.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15H4z"/><path fill="url(#fluentColorBuildingStore162)" fill-opacity="0.8" d="M9 9.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5z"/><path 
                    fill="url(#fluentColorBuildingStore163)" d="M7 2.5V1H4.5a.5.5 0 0 0-.312.11l-2.5 2c-.12.095-.164.24-.18.388L1.5 3.5v2a2.5 2.5 0 0 0 5 0v-2l-.417-.083z"/><path fill="url(#fluentColorBuildingStore164)" d="M14.493 3.499c-.015-.149-.06-.293-.18-.39l-2.5-2A.5.5 0 0 0 11.5 1H9v1.5l.917.917L9.5 3.5v2a2.5 2.5 0 0 0 5 0v-2z"/><path fill="url(#fluentColorBuildingStore165)" d="m9.5 1l1 2.5v2a2.5 2.5 0 0 1-5 0v-2l1-2.5z"/><defs><linearGradient id="fluentColorBuildingStore160" x1="5" x2="6.567" y1="6.818" y2="15.436" 
                    gradientUnits="userSpaceOnUse"><stop offset=".312" stop-color="#29c3ff"/><stop offset="1" stop-color="#0094f0"/></linearGradient><linearGradient id="fluentColorBuildingStore161" x1="4.143" x2="8.022" y1="10.125" y2="12.812" gradientUnits="userSpaceOnUse"><stop stop-color="#0067bf"/><stop offset="1" stop-color="#003580"/></linearGradient><linearGradient id="fluentColorBuildingStore162" x1="9.9" x2="10.996" y1="8.667" y2="12.612" gradientUnits="userSpaceOnUse"><stop stop-color="#fdfdfd"/><stop offset="1" 
                    stop-color="#b3e0ff"/></linearGradient><linearGradient id="fluentColorBuildingStore163" x1="4.038" x2="4.038" y1="1" y2="4.063" gradientUnits="userSpaceOnUse"><stop stop-color="#fb6f7b"/><stop offset="1" stop-color="#d7257d"/></linearGradient><linearGradient id="fluentColorBuildingStore164" x1="11.539" x2="11.539" y1="1" y2="4.063" gradientUnits="userSpaceOnUse"><stop stop-color="#fb6f7b"/><stop offset="1" stop-color="#d7257d"/></linearGradient><linearGradient id="fluentColorBuildingStore165" x1="8" x2="8" y1="1" y2="4.063"
                    gradientUnits="userSpaceOnUse"><stop offset=".304" stop-color="#ff9fb2"/><stop offset="1" stop-color="#f97dbd"/></linearGradient></defs></g></svg>
                    '; ?>

                        <?php foreach ($data as $key) { ?>
                            <article class="div-grid"
                                id="details.php?id=<?= $key["IDservices"]; ?>&token=<?= hash_hmac(algo: 'sha1', data: $key["IDservices"], key: KEY_TOKEN); ?>">
                                <?= $icon_svg ?>
                                <span> <?= "Plan " . $key["Name_services"]; ?> </span>
                            </article>
                        <?php } ?>

                        <article class="div-grid" id="home-index">
                            <?= $icon_svg ?> <!--  CAMBIAR ICONO -->
                            <span> <?= "Home" ?> </span>
                        </article>

                    </div>
                    <!-- php-->

                    <button><a href="../php/cerrar_session.php">Cerrar Sesión</a></button>
                </section>

            </nav>
            <a class="icon-personal" href="#">
                <svg id="active-nav-button" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="50" height="50"
                    viewBox="0 0 24 24">
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" />
                </svg>
            </a>
        </div>
        <div class="progress"></div>
    </header>

    <main>


        <section class="featured-products">
            <h3>Productos Destacados</h3>

            <div class="product-grid">

                <!-- php-->
                <?php
                foreach ($data as $key) { ?>
                    <div class="product">
                        <figure>
                            <?php
                            $services = "../img/home-php/" . $key['Name_services'] . "_url.jpg";
                            ?>
                            <img src="<?= $services ?>" alt="Servicio">
                        </figure>
                        <div>
                            <h3><?= "Plan " . $key['Name_services'] ?></h3>
                            <p><?= $key['Megas'] . " Megas" ?></p>
                            <p><?= "$" . number_format(num: (int) $key['Price'], decimals: 2, decimal_separator: '.', thousands_separator: ',') ?>
                            </p>

                            <button>

                                <a href="details.php?id=<?= $key["IDservices"]; ?>&token=<?= hash_hmac(algo: 'sha1', data: $key["IDservices"], key: KEY_TOKEN); ?>
                                    ">Detalles
                                </a>


                            </button>
                        </div>
                    </div>
                <?php } ?>

                <!-- php-->
            </div>



        </section>

    </main>


    <!-- FOOTER -->

    <footer id="footer-container">
        <div class="footer-box">
            <div class="footer-box-content">
                <div class="footer-principal">
                    <img src="../../public/Logo.jpg" alt="our logo">
                    <h2>WolfTrain</h2>
                </div>
                <div class="footer-links">
                    <ul>
                        <li><a href="#container-form">Caracteristicas</a></li>
                        <li><a href="#options-pay">Planes</a></li>
                        <li><a href="#main-attribute">Beneficios</a></li>
                        <li><a href="#initial-box">Inicio</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="copy">
                <p>Copyright &copy; 2004-2024 christian parisca. Todos los derechos reservados.</p>
                <div class="social-icon">
                    <a href="https://www.facebook.com/?locale=es_LA" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ffffff;"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ffffff;"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                    </a>
                    <a href="https://twitter.com/?lang=es" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill=#ffffff;"
                            class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path
                                d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </footer>

    <script src="../app/actionNav.js"></script>
    <script src="../app/handleAction.js"></script>

</body>

</html>