<?php
    //Conexion a la base de datos:
    require ("../database/conexion.php");
    $conexion = mysqli_connect($db_host, $db_user, $db_pass);
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la DataBase";
    }
    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la DataBase");
    mysqli_set_charset($conexion, "utf8");
    
    //Consulta a la base de datos:
    $consulta = "SELECT * FROM datos_escuelas INNER JOIN redes_sociales INNER JOIN imagenes_escuelas WHERE id_red_social = '4' and  id_escuela = '4' and id_img = '4'";
    $resultado = mysqli_query($conexion, $consulta);

    while($fila = mysqli_fetch_array($resultado)){
        $nombre_plantel = $fila["nombre_plantel"];
        $bienvenida = $fila["bienvenidos"];
        $oferta_educativa = $fila["oferta_educativa"];
        $becas = $fila["becas"];
        $facebook = $fila["facebook"];
        $twitter = $fila["twitter"];
        $instagram = $fila["instagram"];
        $tiktok = $fila["tiktok"];
        $pagina_web = $fila["pagina_web"];
        $direccion = $fila["direccion"];
        $whatsapp = $fila["whatsapp"];
        $telefono = $fila["telefono"];
        $email = $fila["email"];
        $maps = $fila["maps"];
        $ruta_logo = $fila["logo_escolar"];
        $ruta_instalacion_1 = $fila["instalacion_1"];
        $ruta_instalacion_2 = $fila["instalacion_2"];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="autor" content="Joel Josue Herrera Reyes y Jose Orlando Poot Dzul"/>
        <meta name="copyright" content="Servicios Educativos de Quintana Roo y la Universidad Autonoma del Estado de Quintana Roo"/> 
        <meta name="description" content="Feria de Orientación Educativa del Nivel Media Superior">
        <title>Plantel Petcacab</title>
        <link rel="shortcut icon" href="../img/icono_paems.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/escuelas.css">
    </head>

    <body>
        <header>
            <div class="container">
                <nav class="nav">
                    <div class="menu-toggle">
                        <i class="fas fa-bars"></i>
                        <i class="fas fa-times"></i>
                    </div>
                    <a href="index.html" class="logo">Feria Educativa</a>
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="../index.html" class="nav-link ">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="quienes_somos.html" class="nav-link">Quienes somos</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://www.seq.gob.mx/paenms/" target="_blank" class="nav-link ">PAEMS</a>
                        </li>
                        <li class="nav-item">
                            <a href="preparatorias.html" class="nav-link">Preparatorias</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
    
        <section class="subhero" id="subhero">
            <div class="container-img">
                <img src="/Sistema_Feria/fotos_logos/<?php echo $ruta_logo?>" alt="Imagen del logo escolar">
            </div>
            <div class="container-municipio">
                <h1 class="head hea-dark"><?php echo $nombre_plantel?></h1>
            </div>
        </section>

        <section class="container-contenido">
            
            <!-- <div class="contactos">
                <h2>Contactos</h2>
                <ul class="social-prepa">
                    <li><a href="<?php echo $facebook?>" target="_blank" class="facebook"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="<?php echo $twitter?>" target="_blank" class="twitter"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href="<?php echo $instagram?>" target="_blank" class="instagram"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href="<?php echo $pagina_web?>" target="_blank" class="web"><ion-icon name="globe-outline"></ion-icon></a></li>
                    <li><a href="<?php echo $tiktok?>" target="_blank" class="tiktok"><ion-icon name="logo-tiktok"></ion-icon></a></li>
                </ul>
            </div> -->
            <div class="direccion">
                <h2>Dirección</h2>
                <div class="box-direccion">
                    <div class="box">
                        <a href="<?php echo $whatsapp?>"> <ion-icon name="logo-whatsapp"></ion-icon></a>
                        <p>Haz click para acceder al chat</p>
                    </div>
                    <div class="box">
                        <ion-icon name="call-outline"></ion-icon>
                        <p><?php echo $telefono?></p>
                    </div>
                </div>
                <div class="box-direccion">
                    <div class="box">
                        <ion-icon name="mail-outline"></ion-icon>
                        <p><?php echo $email?></p>
                    </div>
                </div>
                <!-- <div class="map">
                    <p><?php echo $direccion?></p>
                    <iframe src="<?php echo $maps?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> -->
            </div>
            <div class="bienvenidos">
                <h2>Bienvenidos</h2>
                <iframe width="560" height="315" src="<?php echo $bienvenida?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="oferta-educativa">
                <h2>Oferta Educativa</h2>
                <embed type="application/pdf" src="/Sistema_Feria/pdf_feria/<?php echo $oferta_educativa?>">
            </div>
            <div class="becas">
                <h2>Becas</h2>
                <embed type="application/pdf" src="/Sistema_Feria/pdf_feria/<?php echo $becas?>"/>
            </div>
            <div class="wrap">
                <h2>Galerías</h2>
                <div class="store-wrapper">
                    <div class="category_list">
                        <button class="category_item" category="all">Todos</button>
                        <button class="category_item" category="instalacion">Instalaciones</button>
                        <!-- <button class="category_item" category="deportiva">Actividades Deportivas</button>
                        <button class="category_item" category="cultural">Actividades Culturales</button>
                        <button class="category_item" category="extracurricular">Actividades Extracurricular</button>
                        <button class="category_item" category="tecnologico">Pabellón Tecnológico</button> -->
                    </div>
                    <section class="products-list">
                        <!-- <div class="product-item" category="deportiva">
                            <img src="/Sistema_Feria/fotos_deportes/<?php echo $ruta_deporte_1?>" onclick="openFulImg(this.src)" alt="deportiva 1" >
                        </div>
                        <div class="product-item" category="deportiva">
                            <img src="/Sistema_Feria/fotos_deportes/<?php echo $ruta_deporte_2?>" onclick="openFulImg(this.src)" alt="deportiva 2" >
                        </div>
                        <div class="product-item" category="deportiva">
                            <img src="/Sistema_Feria/fotos_deportes/<?php echo $ruta_deporte_3?>" onclick="openFulImg(this.src)" alt="deportiva 3" >
                        </div>
                        <div class="product-item" category="cultural">
                            <img src="/Sistema_Feria/fotos_cultural/<?php echo $ruta_cultural_1?>" onclick="openFulImg(this.src)" alt="cultural 1" >
                        </div>
                        <div class="product-item" category="cultural">
                            <img src="/Sistema_Feria/fotos_cultural/<?php echo $ruta_cultural_2?>" onclick="openFulImg(this.src)" alt="cultural 2" >
                        </div>
                        <div class="product-item" category="cultural">
                            <img src="/Sistema_Feria/fotos_cultural/<?php echo $ruta_cultural_3?>" onclick="openFulImg(this.src)" alt="cultural 3" >
                        </div> -->
                        <div class="product-item" category="instalacion">
                            <img src="/Sistema_Feria/fotos_instalaciones/<?php echo $ruta_instalacion_1?>" onclick="openFulImg(this.src)" alt="instalacion 1" >
                        </div>
                        <div class="product-item" category="instalacion">
                            <img src="/Sistema_Feria/fotos_instalaciones/<?php echo $ruta_instalacion_2?>" onclick="openFulImg(this.src)" alt="instalacion 2" >
                        </div>
                        <div class="product-item" category="instalacion">
                            <img src="/Sistema_Feria/fotos_instalaciones/<?php echo $ruta_instalacion_3?>" onclick="openFulImg(this.src)" alt="instalacion 3" >
                        </div>
                        <!-- <div class="product-item" category="extracurricular">
                            <img src="/Sistema_Feria/fotos_extracurricular/<?php echo $ruta_curricular_1?>" onclick="openFulImg(this.src)" alt="extracurricular 1" >
                        </div>
                        <div class="product-item" category="extracurricular">
                            <img src="/Sistema_Feria/fotos_extracurricular/<?php echo $ruta_curricular_2?>" onclick="openFulImg(this.src)" alt="extracurricular 2" >
                        </div>
                        <div class="product-item" category="extracurricular">
                            <img src="/Sistema_Feria/fotos_extracurricular/<?php echo $ruta_curricular_3?>" onclick="openFulImg(this.src)" alt="extracurricular 3" >
                        </div>
                        <div class="product-item" category="tecnologico">
                            <img src="/Sistema_Feria/fotos_pabellon/<?php echo $ruta_pabellon_1?>" onclick="openFulImg(this.src)" alt="tecnologicos 1" >
                        </div>
                        <div class="product-item" category="tecnologico">
                            <img src="/Sistema_Feria/fotos_pabellon/<?php echo $ruta_pabellon_2?>" onclick="openFulImg(this.src)" alt="tecnologico 2" >
                        </div>
                        <div class="product-item" category="tecnologico">
                            <img src="/Sistema_Feria/fotos_pabellon/<?php echo $ruta_pabellon_3?>" onclick="openFulImg(this.src)" alt="tecnologico 3" >
                        </div>-->
                    </section>
                    <div class="lightbox" id="fulImgBox">
                        <img src="" id="fulImg" alt="" >
                        <span onclick="closeImg()">x</span>
                    </div>
                </div>
            </div>
            <!-- <div class="casos_de_exito">
                <h2>Casos de Éxito</h2>
                <iframe src="<?php echo $casoExito?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> -->

        </section>

        <footer>
            <div class="foot__container">
                <div class="content__footer">
                    <div class="profil">
                        <div class="logo_area">
                            <img src="../img/banner_quintanaRoo.jpg" alt="">
                            <div class="circle__footer">
                                <i class="fas fa-circle"></i>
                            </div>
                            <span class="logo__name">Feria Educativa</span>
                        </div>
                        <div class="social__media">
                            <a href="https://www.facebook.com/educacionqr" target="_blank"><i class='bx bxl-facebook-circle'></i></a>
                            <a href="https://twitter.com/EducacionQR" target="_blank"><i class='bx bxl-twitter' ></i></a>
                            <a href="https://instagram.com/educacionqr?igshid=YmMyMTA2M2Y=" target="_blank"><i class='bx bxl-instagram' ></i></a>
                            <a href="https://youtube.com/c/Secretar%C3%ADadeEducaci%C3%B3ndeQuintanaRoo" target="_blank"><i class='bx bxl-youtube' ></i></a>
                            <a href="https://qroo.gob.mx/seq/" target="_blank"><i class='bx bx-globe'></i></a>
                        </div>
                    </div>
                    <div class="service__area">
                        <ul class="service__header">
                            <li class="service__name">N° de visitas:</li>
                            <li>
                                <a href="https://www.webfreecounter.com/" target="_blank"><img src="https://www.cutercounter.com/hits.php?id=hrxfnoop&nd=5&style=9" alt="Contador_Feria"></a>
                            </li>
                        </ul>    
                    </div>
                    <div class="service__area">
                        <ul class="service__header">
                            <li class="service__name">Feria</li>
                            <li class="service__name">Educativa</li>
                            <li><a href="../index.html">Inicio</a></li>
                            <li><a href="../quienes_somos.html">Quienes Somos</a></li>
                            <li><a href="../preparatorias.html">Preparatorias</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="footer__bottom">
                    <div class="copy_right">
                        <i class='bx bxs-copyright'></i>
                        <span>Secretaria de Educación de Quintana Roo</span>
                    </div>
                    <div class="tou">
                        <a href="#">Panel de Administración</a>    
                        <a href="../privacidad.html">Privacidad</a>
                    </div>
                </div>
            </div>
        </footer>
    
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="../js/jquery-3.2.1.js"></script>
        <script src="../js/lightbox.js"></script>
        <script src="../js/menu_responsive.js"></script>
        <script src="../js/header.js"></script>
        <script src="../js/image.js"></script>

    </body>
</html>