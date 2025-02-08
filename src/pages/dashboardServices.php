<?php

declare(strict_types=1);
require_once '../php/config.php';
include '../php/conection_db.php';
require_once '../php/conexArrayData.php';


session_start();

if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] != '1') {
  echo
    '
        <script>
            alert("Acceso denegado");
            window.location = "../pages/registration.php";
        </script>
    ';
}

//conexArrayData
$arrayData = getArrayData(filename: "../php/arrayData.json");

$data = getServiceFullData($conexion);

define(constant_name: "userPhoto", value: "../img/home-php/user-icon.png");

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Tienda Online</title>
  <link rel="stylesheet" href="../style/dashboardServices.css">
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
                  Admin
                </h4>
                <p>
                  admin@gmail.com
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

            <article class="div-grid" id="user-section">
              <?= $icon_svg ?>
              <span><a href="dashboardClient.php">Usuarios</a></span>
            </article>
            <article class="div-grid" id="services-section">
              <?= $icon_svg ?>
              <span><a href="dashboardServices.php">Servicios</a></span>
            </article>

            <article class="div-grid" id="register-section">
              <?= $icon_svg ?>
              <span><a href="registration.php">Registro</a></span>
            </article>


            <article class="div-grid" id="home-index">
              <?= $icon_svg ?> <!--  CAMBIAR ICONO -->
              <span><a href="adminHome.php">Inicio</a></span>
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

    <!-- Borrar servicio -->
    <div id="modal-delete" class="modal">
      <div class="modal-content">
        <img src="../../public/logo-removebg-preview.png" alt="logo">
        <h2>Eliminar Servicio</h2>
        <p>Estas seguro que deseas eliminar este Servicio?</p>
        <p id="modal-message"></p>
        <div class="button-content">
          <button type="submit" class="delete-action-button">Si, estoy seguro!</button>
          <button type="submit" class="no-delete-open">No, no quiero!</button>
        </div>
      </div>
    </div>
    <!-- actualizar datos de Servicio -->
    <div id="modal-update" class="modal">
      <div class="modal-content">
        <h2>Actualizar datos de Servicio</h2>

        <form action="../php/updateService_db.php" method="POST" class="update-form">
          <div class="container-form">
            <article class="box-input">
              <div class="input-group">
                <input class="input" type="text" required id="id_service_update" name="ID_service_update" readonly>
                <label class="label" for="id_service_update">ID</label>
              </div>
              <div class="input-group">
                <input class="input" type="text" required id="Name_service_update" name="Full_name_update">
                <label class="label" for="Name_service_update">Nombre</label>
              </div>

              <div class="input-group">
                <input class="input" type="text" required id="Price_update" name="Price_update">
                <label class="label" for="Price_update">Precio</label>
              </div>

            </article>
            <article class="box-input">

              <div class="input-group">
                <input class="input" type="text" required id="Megas_update" name="Megas_update">
                <label class="label" for="Megas_update">Megas</label>
              </div>

              <div class="input-group">
                <textarea id="createDescription_update" required maxlength="210" name="Description_update"></textarea>
                <label class="label" for="createDescription_update">Descripción..</label>
              </div>

            </article>
          </div>
          <select class="select" id="select_update" required name="Select_update">
            <option value="1" selected>Disponible</option>
            <option value="0">No disponible</option>
          </select>
          <div class="content-button">
            <button type="submit" class="button-update">Actualizar</button>
            <button type="submit" class="no-update-button">Abandonar</button>
          </div>

        </form>
      </div>
    </div>
    <!-- crear servicio -->
    <div id="modal-create" class="modal">
      <div class="modal-content">
        <h2>Crear nuevo Servicio</h2>

        <form action="../php/createNewService_db.php" method="POST">
          <div class="input-half">
            <div class="inputs-principal">
              <div class="input-group">
                <input class="input" type="text" required id="createServiceName" name="Name_service_create">
                <label class="label" for="createServiceName">Nombre Servicio</label>
              </div>

              <div class="input-group">
                <input class="input" type="text" required id="CreatePrice" name="Price_create">
                <label class="label" for="CreatePrice">Precio</label>
              </div>

              <div class="input-group">
                <input class="input" type="text" required id="createMegas" name="Megas_create">
                <label class="label" for="createMegas">Megas</label>
              </div>

            </div>
            <div class="input-group">
              <textarea id="createDescription" required maxlength="210" name="Description"></textarea>
              <label class="label" for="createDescription">Descripción..</label>
            </div>

          </div>
          <select class="select" id="select" required name="select">
            <option value="1" selected>Disponible</option>
            <option value="0">No disponible</option>
          </select>

          <div class="content-button">
            <button type="submit" class="button-register">Registrar</button>
            <button type="submit" class="no-button-register">Salir</button>
          </div>

        </form>

        </form>
      </div>
    </div>

    <!-- Regresar -->
    <div id="back-arrow" class="back">
      <a href="adminHome.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 16 16">
          <path fill="#075195" d="M.5 8L8 15.5V11h8V5H8V.5z" />
        </svg>
      </a>
    </div>

    <section id="hero">
      <h2>Visualizador y administrador de Servicios</h2>
      <div class="principal-container-services">
        <div class="button-create-services">
          <a href="../" class="btn-register">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path fill="currentColor"
                d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2m5 11h-4v4h-2v-4H7v-2h4V7h2v4h4z" />
            </svg>
            Nuevo Servicio
          </a>

          <a href="../pdf/servicesReport.php" target="_blank" class="btn-createDocument">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <rect width="24" height="24" fill="none" />
              <g fill="none" stroke="#ffffff" stroke-linejoin="round" stroke-width="2">
                <path stroke-linecap="round"
                  d="M4 4v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8.342a2 2 0 0 0-.602-1.43l-4.44-4.342A2 2 0 0 0 13.56 2H6a2 2 0 0 0-2 2m5 9h6m-6 4h3" />
                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
              </g>
            </svg>
            Servicios Totales
          </a>

          <a href="../pdf/countServicesReport.php" target="_blank" class="btn-countDocument">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 2048 2048">
              <path fill="#fff"
                d="M1185 1179q-88-75-195-115t-222-40q-88 0-170 23t-153 64t-129 100t-100 130t-65 153t-23 170H0q0-120 35-231t101-205t156-167t204-115q-113-74-176-186t-64-248q0-106 40-199t109-163T568 40T768 0t199 40t163 109t110 163t40 200q0 66-16 129t-48 119t-75 103t-101 83q65 25 124 61t111 81zM384 512q0 80 30 149t82 122t122 83t150 30q79 0 149-30t122-82t83-122t30-150q0-79-30-149t-82-122t-123-83t-149-30q-80 0-149 30t-122 82t-83 123t-30 149m1344 256q66 0 124 25t101 69t69 102t26 124t-25 124t-69 102t-102 69t-124 25q-23 0-45-3l-587 587q-27 27-62 41t-74 15q-40 0-75-15t-61-41t-41-61t-15-75q0-38 14-73t42-63l587-587q-3-22-3-45q0-66 25-124t68-101t102-69t125-26m0 512q40 0 75-15t61-41t41-61t15-75q0-41-19-82l-146 146h-91v-91l146-146q-41-19-82-19q-40 0-75 15t-61 41t-41 61t-15 75q0 41 19 82l-640 641q-19 19-19 45t19 45t45 19t45-19l641-640q41 19 82 19" />
            </svg>
            Historial Peticiones
          </a>

        </div>

        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Megas</th>
              <th>Descripcion</th>
              <th>Disponible</th>
              <th>Acción</th>

            </tr>
          </thead>
          <tbody>

            <?php if (isset($data) && is_array(value: $data)) { ?>
              <?php ?>
              <?php foreach ($data as $key) { ?>
                <tr>
                  <td><?= $key["IDservices"] ?></td>
                  <td><?= $key["Name_services"] ?></td>
                  <td><?= $key["Price"] . "$" ?></td>
                  <td><?= $key["Megas"] . " Megas" ?></td>
                  <td><?= $key["Description"] ?></td>

                  <?php
                  $icon_no_availible = '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32"><rect width="32" height="32" fill="none"/><path fill="#ff1f00" d="M16 2C8.2 2 2 8.2 2 16s6.2 14 14 14s14-6.2 14-14S23.8 2 16 2m5.4 21L16 17.6L10.6 23L9 21.4l5.4-5.4L9 10.6L10.6 9l5.4 5.4L21.4 9l1.6 1.6l-5.4 5.4l5.4 5.4z"/></svg>';
                  $icon_availible = '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 2048 2048"><path fill="#06b54c" d="M1024 0q141 0 272 36t244 104t207 160t161 207t103 245t37 272q0 141-36 272t-104 244t-160 207t-207 161t-245 103t-272 37q-141 0-272-36t-244-104t-207-160t-161-207t-103-245t-37-272q0-141 36-272t104-244t160-207t207-161T752 37t272-37m603 685l-136-136l-659 659l-275-275l-136 136l411 411z"/></svg>';


                  ?>

                  <td>
                    <?= $key["Availability"] == "1" ? "<div class='availible'> $icon_availible </div>" : "<div class='no_availible'>$icon_no_availible </div>" ?>
                  </td>
                  <td class="action-config">

                    <a href="#" class="btn-edit  <?= $key["Name_services"] ?>" id="<?= $key["IDservices"] ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                        <rect width="24" height="24" fill="none" />
                        <g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                          <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                          <path
                            d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
                        </g>
                      </svg>
                      Editar
                    </a>

                    <a href="#" class="btn-delete <?= $key["Name_services"] ?>" id="<?= $key["IDservices"] ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                        <rect width="24" height="24" fill="none" />
                        <path fill="#fff"
                          d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                      </svg>
                      Borrar
                    </a>
                  </td>

                </tr>
              <?php } ?>
            <?php } else { ?>
              <?php
              echo "<h2>La Base de Datos está vacía</h2>";
              ?>
            <?php } ?>
          </tbody>
        </table>
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
      </div>
      <hr>
      <div class="copy">
        <p>Copyright &copy; 2004-2024 christian parisca. Todos los derechos reservados.</p>
        <div class="social-icon">
          <a href="https://www.facebook.com/?locale=es_LA" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ffffff;" class="bi bi-facebook"
              viewBox="0 0 16 16">
              <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
            </svg>
          </a>
          <a href="https://www.instagram.com/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ffffff;" class="bi bi-instagram"
              viewBox="0 0 16 16">
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
            </svg>
          </a>
          <a href="https://twitter.com/?lang=es" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill=#ffffff;" class="bi bi-twitter-x"
              viewBox="0 0 16 16">
              <path
                d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
            </svg>
          </a>
        </div>
      </div>
    </div>

  </footer>

  <script src="../app/actionNavNormal.js"></script>
  <script src="../app/handleAction.js"></script>
  <script src="../app/createModal.js"></script>
  <script src="../app/deleteModal.js"></script>
  <script src="../app/updateServiceModal.js"></script>

</body>

</html>