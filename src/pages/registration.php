<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Icon-->
    <link rel="icon" href="../../public/Logo.jpg">
    <!--Author-->
    <meta name="Author" content="Ing.Christian Parisca">
    <!--Styles-->
    <link rel="stylesheet" href="../style/registration.css">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!--Title-->
    <title>Internet page</title>
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
                <ul class="ul-list-mobile">
                    <img id="icon-close" src="../img/icon-nav/close.png" alt="">
                    <li><a href="../../index.html">Inicio</a></li>
                    <li><a href="registration.html">Registrarse</a></li>
                    <li><a href="aboutUs.html">Sobre Nosotros</a></li>
                    <li><a href="services.html">Servicios</a></li>
                </ul>
                <div id="active-nav-button" class="icon-box">
                    <input type="checkbox" name="check">
                    <label for="check" class="checkbtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                            class="bi bi-justify" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
                        </svg>
                    </label>
                </div>
            </nav>
            <a class="icon-personal" href="registration.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="50" height="50" viewBox="0 0 24 24">
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" />
                </svg>
            </a>
        </div>
        <div class="progress"></div>
    </header>
    <!-- MAIN -->

    <main>
        <section id="container-form">
            <article class="initial-box-form">

            </article>

            <article class="form-boxes">

                <!--LOGIN FORM-->

                <div class="form-login">
                    <h3>Iniciar Session</h3>
                    <div class="icon-form">
                        <div>
                            <a href="https://www.google.co.ve/?hl=es" target="_blank">
                                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM21 12C21 16.9706 16.9706 21 12 21C11.8075 21 11.6164 20.994 11.4268 20.982L15.3516 14.1842C15.7616 13.5562 16 12.806 16 12C16 11.2714 15.8052 10.5883 15.4649 10H20.777C20.9229 10.6432 21 11.3126 21 12ZM3 12C3 16.0439 5.66703 19.4648 9.33808 20.5998L11.9938 16C10.4369 15.9976 9.08858 15.1058 8.4297 13.8055L4.5075 7.01205C3.55514 8.43975 3 10.155 3 12ZM5.88442 5.39694C7.48983 3.90934 9.63872 3 12 3C15.5337 3 18.5918 5.03656 20.0645 8H12C10.5219 8 9.23103 8.80174 8.53857 9.99407L5.88442 5.39694ZM10.2633 12.9925L10.2681 12.9897L10.1968 12.8662C10.0707 12.6041 10 12.3103 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 12.361 13.9043 12.6997 13.737 12.9921L13.7321 12.9893L13.6529 13.1263C13.2928 13.6538 12.6868 14 12 14C11.2566 14 10.608 13.5945 10.2633 12.9925Z"
                                        fill="#0F0F0F" />
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="https://github.com/" target="_blank">
                                <svg width="25px" height="25px" viewBox="0 0 20 20" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs></defs>
                                    <g id="Page-1" stroke="" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"
                                            fill="#000000">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399"
                                                    id="github-[#142]">

                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="https://linkedin.com/" target="_blank">
                                <svg fill="#000000" width="25px" height="25px" viewBox="0 0 32 32"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title />
                                    <g id="Linkedln">
                                        <path
                                            d="M26.49,30H5.5A3.35,3.35,0,0,1,3,29a3.35,3.35,0,0,1-1-2.48V5.5A3.35,3.35,0,0,1,3,3,3.35,3.35,0,0,1,5.5,2h21A3.35,3.35,0,0,1,29,3,3.35,3.35,0,0,1,30,5.5v21A3.52,3.52,0,0,1,26.49,30ZM9.11,11.39a2.22,2.22,0,0,0,1.6-.58,1.83,1.83,0,0,0,.6-1.38A2.09,2.09,0,0,0,10.68,8a2.14,2.14,0,0,0-1.51-.55A2.3,2.3,0,0,0,7.57,8,1.87,1.87,0,0,0,7,9.43a1.88,1.88,0,0,0,.57,1.38A2.1,2.1,0,0,0,9.11,11.39ZM11,13H7.19V24.54H11Zm13.85,4.94a5.49,5.49,0,0,0-1.24-4,4.22,4.22,0,0,0-3.15-1.27,3.44,3.44,0,0,0-2.34.66A6,6,0,0,0,17,14.64V13H13.19V24.54H17V17.59a.83.83,0,0,1,.1-.43,2.73,2.73,0,0,1,.7-1,1.81,1.81,0,0,1,1.28-.44,1.59,1.59,0,0,1,1.49.75,3.68,3.68,0,0,1,.44,1.9v6.15h3.85ZM17,14.7a.05.05,0,0,1,.06-.06v.06Z" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <form action="../php/login_db.php" method="POST">
                        <div class="input-group">
                            <input class="input" type="email" required id="email" name="Email">
                            <label class="label" for="email">Correo Electronico</label>
                        </div>

                        <div class="input-group">
                            <input class="input" type="text" required id="password" name="Password" maxlength="9">
                            <label class="label" for="password">Contraseña</label>
                        </div>

                        <button type="submit" class="button-register">Iniciar Sesion</button>
                    </form>

                    <p id="b-login">No tienes una cuenta?</p>

                </div>

                <!--REGISTER FORM-->

                <div class="form-register">
                    <h3>Crear una Cuenta</h3>
                    <div class="icon-form">
                        <div>
                            <a href="https://www.google.co.ve/?hl=es" target="_blank">
                                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM21 12C21 16.9706 16.9706 21 12 21C11.8075 21 11.6164 20.994 11.4268 20.982L15.3516 14.1842C15.7616 13.5562 16 12.806 16 12C16 11.2714 15.8052 10.5883 15.4649 10H20.777C20.9229 10.6432 21 11.3126 21 12ZM3 12C3 16.0439 5.66703 19.4648 9.33808 20.5998L11.9938 16C10.4369 15.9976 9.08858 15.1058 8.4297 13.8055L4.5075 7.01205C3.55514 8.43975 3 10.155 3 12ZM5.88442 5.39694C7.48983 3.90934 9.63872 3 12 3C15.5337 3 18.5918 5.03656 20.0645 8H12C10.5219 8 9.23103 8.80174 8.53857 9.99407L5.88442 5.39694ZM10.2633 12.9925L10.2681 12.9897L10.1968 12.8662C10.0707 12.6041 10 12.3103 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 12.361 13.9043 12.6997 13.737 12.9921L13.7321 12.9893L13.6529 13.1263C13.2928 13.6538 12.6868 14 12 14C11.2566 14 10.608 13.5945 10.2633 12.9925Z"
                                        fill="#0F0F0F" />
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="https://github.com/" target="_blank">
                                <svg width="25px" height="25px" viewBox="0 0 20 20" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs></defs>
                                    <g id="Page-1" stroke="" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"
                                            fill="#000000">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399"
                                                    id="github-[#142]">

                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="https://linkedin.com/" target="_blank">
                                <svg fill="#000000" width="25px" height="25px" viewBox="0 0 32 32"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title />
                                    <g id="Linkedln">
                                        <path
                                            d="M26.49,30H5.5A3.35,3.35,0,0,1,3,29a3.35,3.35,0,0,1-1-2.48V5.5A3.35,3.35,0,0,1,3,3,3.35,3.35,0,0,1,5.5,2h21A3.35,3.35,0,0,1,29,3,3.35,3.35,0,0,1,30,5.5v21A3.52,3.52,0,0,1,26.49,30ZM9.11,11.39a2.22,2.22,0,0,0,1.6-.58,1.83,1.83,0,0,0,.6-1.38A2.09,2.09,0,0,0,10.68,8a2.14,2.14,0,0,0-1.51-.55A2.3,2.3,0,0,0,7.57,8,1.87,1.87,0,0,0,7,9.43a1.88,1.88,0,0,0,.57,1.38A2.1,2.1,0,0,0,9.11,11.39ZM11,13H7.19V24.54H11Zm13.85,4.94a5.49,5.49,0,0,0-1.24-4,4.22,4.22,0,0,0-3.15-1.27,3.44,3.44,0,0,0-2.34.66A6,6,0,0,0,17,14.64V13H13.19V24.54H17V17.59a.83.83,0,0,1,.1-.43,2.73,2.73,0,0,1,.7-1,1.81,1.81,0,0,1,1.28-.44,1.59,1.59,0,0,1,1.49.75,3.68,3.68,0,0,1,.44,1.9v6.15h3.85ZM17,14.7a.05.05,0,0,1,.06-.06v.06Z" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <form action="../php/register_db.php" method="POST">
                        <div class="input-group">
                            <input class="input" type="text" required id="username" name="Full_name">
                            <label class="label" for="username">Nombre Completo</label>
                        </div>

                        <div class="input-group">
                            <input class="input" type="email" required id="email" name="Email">
                            <label class="label" for="email">Correo Electronico</label>
                        </div>

                        <div class="input-group">
                            <input class="input" type="text" required id="user" name="Name_user">
                            <label class="label" for="email">Usuario</label>
                        </div>

                        <div class="input-group">
                            <input class="input" type="password" required id="password" name="Password" maxlength="9">
                            <label class="label" for="password">Contraseña</label>
                        </div>

                        <button type="submit" class="button-register">Registrarse</button>
                    </form>

                    <p id="b-register">Ya tienes una cuenta?</p>

                </div>

            </article>
        </section>
    </main>

    <!--FOOTER-->
    <footer id="footer-container">
        <div class="footer-box">
            <div class="footer-box-content">
                <div class="footer-principal">
                    <img src="../../public/Logo.jpg" alt="Logo">
                    <h2>WolfTrain</h2>
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


    <script src="../app/register.js"></script>
    <script src="../app/actionNavNormal.js"></script>
</body>

</html>