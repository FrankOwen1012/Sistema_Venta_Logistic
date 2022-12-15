<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S and M Logistica</title>

    <!-- FUENTE GOOGLE FONTS : Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- ICONS: Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- ICONS: Line Awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Animaciones AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">


    <!-- Mis Estilos -->
    <link rel="stylesheet" href="/css/estilos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<body>

    <div class="hm-wrapper">

        <!-- =================================
           HEADER MENU
        ================================== -->
        <div class="hm-header">

            <div class="container">
                <div class="header-menu">

                    <div class="hm-logo">
                        <a href="#">
                            <img  src="/assets/image/S_AND_M_LOGO.png" alt="">
                        </a>
                    </div>

                    <nav class="hm-menu">
                        <ul>
                            <li><a href="#tabla">Productos</a></li>
                            <li><a href="#">Campañas</a></li>
                            <li><a href="#nosotros">Nosotros</a></li>
                            <li><a href="#contacto">Contacto</a></li>
                        </ul>


                        <div class="hm-icon-cart">
                            <a href="#">
                                <i class="las la-shopping-cart"></i>
                                <span>0</span>
                            </a>
                        </div>
                        <!-- Button trigger modal -->
                        <!--BOTTON DE USUARIOS  -->
                        <button style="border:0; background-color:white; color:black" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="las la-user-tie" style="font-size:48px;"></i>
                        </button>
                        <!--BOTTON DE USUARIOS  -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Formulario Admin</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!--CARD -->

                                        <div class="card" style="width: 100%;">
                                            <img src="/assets/image/logisticaBanner__.png" class="card-img-top" alt="...">
                                            <div class="card-body">


                                                <!---FORMULARIO INICIO  -->
                                                <form action="/conexion/ValidaAdmin.php">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Usuario</label>
                                                        <input type="text" class="form-control" id="user" placeholder="Usuario" name="user" required>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Contraseña</label>
                                                        <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass" required>
                                                    </div>
                                                    <!-- 

                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                        </div>
                                                       -->
                                                    <button type="submit" id="submit" class="btn btn-primary">Ingresar</button>
                                                </form>

                                                <!-- FORMULARIO FIN -->

                                            </div>
                                        </div>

                                        <!--FIN - CARD -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--fin de MODAL -->


                        <div class="icon-menu">
                            <button type="button"><i class="fas fa-bars">dadas</i></button>
                        </div>

                    </nav>

                </div>
            </div>

        </div>

        <!-- =================================
           HEADER MENU Movil
        ================================== -->
        <div class="header-menu-movil">
            <button class="cerrar-menu"><i class="fas fa-times"></i></button>
            <ul>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Campañas</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>


   
        <!-- =================================
           BANNER  
        ================================== -->
        <div class="hm-banner">
      
            <div class="img-banner">
              
                <img src="/assets/image/logisticaBanner__.png" alt="">
            </div>
            <a href=""></a>
        </div>

        <!-- =================================
           HOME CATEGROIAS
        ================================== -->
        <div class="hm-page-block" id="nosotros">
            <div class="container">
                <div class="header-title">
                    <h1 data-aos="fade-up" data-aos-duration="3000">Te Ofrecemos</h1>
                </div>

                <div class="hm-grid-category">

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="1000">
                        <a href="#">
                            <img src="/assets/image/Pastillas.webp" alt="">
                            <div class="c-info">
                                <h3>Medicamentos</h3>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="1500">
                        <a href="#">
                            <img src="/assets/image/almacen.jpg" alt="">
                            <div class="c-info">
                                <h3>Grandes Almacenes</h3>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="2000">
                        <a href="#">
                            <img src="/assets/image/Nosotros.jpg" alt="">
                            <div class="c-info">
                                <h3>Personal Capacitado</h3>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="2000">
                        <a href="#">
                            <img src="/assets/image/c-4.jpg" alt="">
                            <div class="c-info">
                                <h3>Siempre A Tiempo</h3>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>


        <!-- =================================
           HOME PRODUCTOS DESTACADOS
        ================================== -->
        <div id="tabla" class="hm-page-block bg-fondo">

            <div class="container">

                <div class="header-title" data-aos="fade-up">
                    <h1>Productos populares</h1>
                </div>

                <!-- TABS -->
                <ul class="hm-tabs" data-aos="fade-up">
                    <li class="hm-tab-link">
                        Productos Disponibles
                    </li>




                    <li class="hm-tab-link ative">
                        En oferta
                    </li>

                </ul>

                <!-- CONTENIDO DE LOS TABS -->
                <!-- Zapatillas -->
                <div class="tabs-content" data-aos="fade-up">

                    <?php

                    include './Tabla.php';
                    ?>

                </div>

                <!-- Moda -->
                <div class="tabs-content" data-aos="fade-up">

                    <div class="grid-product">

                        <div class="product-item">
                            <div class="p-portada">
                                <a href="">
                                    <img src="/assets/image/2.jpg" alt="">
                                </a>
                                <span class="stin stin-new">Nuevo</span>
                            </div>

                            <div class="p-info">
                                <a href="">
                                    <h3>Quisque vulputate aliquam</h3>
                                </a>
                                <div class="precio">
                                    <span>S/ 00.00</span>
                                </div>
                                <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                            </div>

                        </div>

                        <div class="product-item">
                            <div class="p-portada">
                                <a href="">
                                    <img src="/assets/image/3.jpg" alt="">
                                </a>
                                <span class="stin stin-new">Nuevo</span>
                            </div>

                            <div class="p-info">
                                <a href="">
                                    <h3>Praesent nibh lorem, tempus quis est a</h3>
                                </a>
                                <div class="precio">
                                    <span>S/ 00.00</span>
                                </div>
                                <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                            </div>

                        </div>

                        <div class="product-item">
                            <div class="p-portada">
                                <a href="">
                                    <img src="img/5.jpg" alt="">
                                </a>
                            </div>

                            <div class="p-info">
                                <a href="">
                                    <h3>Nunc sit amet justo nec ipsum dolor.</h3>
                                </a>
                                <div class="precio">
                                    <span>S/ 00.00</span>
                                </div>
                                <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                            </div>

                        </div>

                        <div class="product-item">
                            <div class="p-portada">
                                <a href="">
                                    <img src="img/7.jpg" alt="">
                                </a>
                            </div>

                            <div class="p-info">
                                <a href="">
                                    <h3>Lorem ipsum dolor sit, amet consectetur</h3>
                                </a>
                                <div class="precio">
                                    <span>S/ 00.00</span>
                                </div>
                                <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- Tecnología -->
                <div class="tabs-content" data-aos="fade-up">

                    <div class="grid-product">

                        <div class="product-item">
                            <div class="p-portada">
                                <a href="">
                                    <img src="img/1.jpg" alt="">
                                </a>
                                <span class="stin stin-new">Nuevo</span>
                            </div>

                            <div class="p-info">
                                <a href="">
                                    <h3>Quisque vulputate aliquam</h3>
                                </a>
                                <div class="precio">
                                    <span>S/ 00.00</span>
                                </div>
                                <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                            </div>

                        </div>

                        <div class="product-item">
                            <div class="p-portada">
                                <a href="">
                                    <img src="img/2.jpg" alt="">
                                </a>
                            </div>

                            <div class="p-info">
                                <a href="">
                                    <h3>Praesent nibh lorem, tempus quis est a</h3>
                                </a>
                                <div class="precio">
                                    <span>S/ 00.00</span>
                                </div>
                                <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                            </div>

                        </div>

                        <div class="product-item">
                            <div class="p-portada">
                                <a href="">
                                    <img src="img/3.jpg" alt="">
                                </a>
                            </div>

                            <div class="p-info">
                                <a href="">
                                    <h3>Nunc sit amet justo nec ipsum dolor.</h3>
                                </a>
                                <div class="precio">
                                    <span>S/ 00.00</span>
                                </div>
                                <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                            </div>

                        </div>

                        <div class="product-item">
                            <div class="p-portada">
                                <a href="">
                                    <img src="img/4.jpg" alt="">
                                </a>
                            </div>

                            <div class="p-info">
                                <a href="">
                                    <h3>Lorem ipsum dolor sit, amet consectetur</h3>
                                </a>
                                <div class="precio">
                                    <span>S/ 00.00</span>
                                </div>
                                <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- En oferta -->
                <div class="tabs-content" data-aos="fade-up">

                    <div class="grid-product">

                        <div class="product-item">
                            <div class="p-portada">
                                <a href="">
                                    <img src="img/1.jpg" alt="">
                                </a>
                                <span class="stin stin-oferta">Oferta</span>
                            </div>

                            <div class="p-info">
                                <a href="">
                                    <h3>Quisque vulputate aliquam</h3>
                                </a>
                                <div class="precio">
                                    <span>S/ 00.00</span>
                                    <span class="thash">S/ 00.00</span>
                                </div>
                                <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                            </div>

                        </div>

                        <div class="product-item">
                            <div class="p-portada">
                                <a href="">
                                    <img src="img/2.jpg" alt="">
                                </a>
                                <span class="stin stin-oferta">Oferta</span>
                            </div>

                            <div class="p-info">
                                <a href="">
                                    <h3>Praesent nibh lorem, tempus quis est a</h3>
                                </a>
                                <div class="precio">
                                    <span>S/ 00.00</span>
                                    <span class="thash">S/ 00.00</span>
                                </div>
                                <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                            </div>

                        </div>

                        <div class="product-item">
                            <div class="p-portada">
                                <a href="">
                                    <img src="img/7.jpg" alt="">
                                </a>
                                <span class="stin stin-oferta">Oferta</span>
                            </div>

                            <div class="p-info">
                                <a href="">
                                    <h3>Nunc sit amet justo nec ipsum dolor.</h3>
                                </a>
                                <div class="precio">
                                    <span>S/ 00.00</span>

                                    <span class="thash">S/ 00.00</span>
                                </div>
                                <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                            </div>

                        </div>

                        <div class="product-item">
                            <div class="p-portada">
                                <a href="">
                                    <img src="img/8.jpg" alt="">
                                </a>
                                <span class="stin stin-oferta">Oferta</span>
                            </div>

                            <div class="p-info">
                                <a href="">
                                    <h3>Lorem ipsum dolor sit, amet consectetur</h3>
                                </a>
                                <div class="precio">
                                    <span>S/ 00.00</span>
                                    <span class="thash">S/ 00.00</span>
                                </div>
                                <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- =================================
           FOOTER
        ================================== -->
        <footer id="contacto">

            <div class="container">

                <div class="foo-row">
                    <div class="foo-col">
                        <h2>Ven y Se Parte <br>de Nuestro Clientes</h2>
                        <form action="" method="GET">

                            <div class="f-input">
                                <input type="text" placeholder="Ingrese su correo">
                                <button type="submit" class="hm-btn-round btn-primary"><i class="far fa-paper-plane"></i></button>
                            </div>
                        </form>

                    </div>

                    <div class="foo-col">
                        <ul>
                            <li>
                                <p style="color:white">Direccion: Av Pizarro 130, José Luis Bustamante y Rivero 04009</p>
                            </li>
                          
                          
                            <li>
                                <p style="color:white">Telefono : (054) 464006</p>
                            </li>
                            <li>
                                <p style="color:white">Atencion : ⋅Abierto : 8:00 Cierra a las 17:00
                                </p>
                            </li>
                            <br>
                            <li>
                                <p style="color:white">Contacto Redes Sociales:<a href="https://www.facebook.com/admision.pedrop.diaz">Instituto de Excelencia "Pedro P. Diaz"</a></p>
                            </li>


                        </ul>
                    </div>

                </div>

            </div>

        </footer>

        <div class="foo-copy">
            <div class="container">
                <p>Pedro P Diaz 2022 FrankOwenMF © Todos los derechos reservados</p>
            </div>
        </div>

    </div>

    <!-- Animaciones : AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Mi Script -->
    <script src="/js/Tienda.js"></script>

    <script>
        AOS.init({
            duration: 1200,
        })
    </script>

</body>

</html>