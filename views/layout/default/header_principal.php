<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bienvenido &#8211; PSC World</title>

<!-- Stylesheets -->
<link href="<?php echo BASE_URL; ?>public/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo BASE_URL; ?>public/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="<?php echo BASE_URL; ?>public/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="<?php echo BASE_URL; ?>public/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link href="<?php echo BASE_URL; ?>public/css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/css/modal.css">
<link href="<?php echo BASE_URL; ?>public/css/responsive.css" rel="stylesheet">
<!-- <link href="css/flaticon.css" rel="stylesheet"> -->
<link href="<?php echo BASE_URL; ?>public/css/flaticon2.css" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo BASE_URL; ?>public/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php echo BASE_URL; ?>public/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="modalimg" style="visibility: hidden;">
        <div class="modal__content modalimg__content">
            <div class="box-modalimg">
                <img src="<?php echo BASE_URL; ?>public/images/acreditacion.jpg">
                <i class="fas fa-times-circle cerrarimg"></i>
            </div>
        </div>
    </div>

<div class="page-wrapper">
    
    <!-- Main Header-->
    <header class="main-header">
        <!-- Header top -->
        <div class="header-top">
            <div class="inner-container">
                <div class="top-left">
                    <ul class="contact-list clearfix">
                        <li><a href="mailto:soporte@pscworld.com" target="_blank"><i class="fa fa-envelope"></i>soporte@pscworld.com</a></li>
                        <li>
                            <i class="fa fa-map-marker-alt"></i>
                            Avenida Patriotismo 48-6, Escandón I Secc, 
                            Miguel Hidalgo, 11800 Ciudad de México, CDMX
                        </li>
                        <li><a class="abririmg " href=""><i class="fa flaticon-medal"></i>Acreditación</a></li>
                    </ul>
                </div>
                <div class="top-right">
                    <ul class="social-icon-one">
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Main box -->
        <div class="main-box">
            <div class="menu-box">
                <div class="logo">
                    <a href="index.html" class="main-logo"><img src="<?php echo BASE_URL; ?>public/images/logo.png" alt="" title="" ></a>
                    <a href="index.html" class="sticky-logo"><img src="<?php echo BASE_URL; ?>public/images/logo-5.png" alt="" title="" ></a>
                </div>

                <!--Nav Box-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current">
                                    <a href="index.html">Inicio</a>
                                </li>
                                <li class="dropdown">
                                    <a href="servicios.html"><span>Servicios</span></a>
                                    <ul>
                                        <li><a href="doc2sign.html">Firma digital electronica</a></li>
                                        <li><a href="estampadotiempo.html">Estampado de tiempo</a></li>
                                        <li><a href="certificadosSSL.html">Certificados SSL</a></li>
                                        <li><a href="nom151.html">NOM-151</a></li>
                                    </ul>
                                </li>
                                <li><a href="doc2sign.html">Doc2sign</a></li>
                                <li><a href="noticias.html">Noticias</a></li>
                                <li><a href="contact.html">Contacto</a></li>
                                <li class="btn-box">
                                    <a href="login.html">Iniciar sesión</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>

                <div class="outer-box">

                    <div class="service_wrapper">
                        <span class="icon flaticon-whatsapp"></span> 
                        <p>¿Tiene alguna pregunta?</p>
                        <a href="tel:525553396600"><h4>+52 55 5339 6600</h4></a>
                    </div>

                    <!-- Search Btn -->
                    <!-- <div class="search-box">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="main-box">
                <!--Keep This Empty / Menu will come through Javascript-->
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="index.html"><img src="<?php echo BASE_URL; ?>public/images/logo-5.png" alt="" title="" ></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </div>
        </div>

        <!-- Mobile Sticky Header -->
        <div class="mobile-sticky-header">
            <div class="logo"><a href="index.html"><img src="<?php echo BASE_URL; ?>public/images/logo.png" alt="" title="" ></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <span class="mobile-menu-back-drop"></span>
            <div class="menu-outer">
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="<?php echo BASE_URL; ?>public/images/logo-5.png" alt="" title="" ></a></div><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </nav>

                <div class="menu-search">
                    <form method="post" action="blog-checkerboard.html">
                        <div class="form-group">
                            <input type="text" class="input" name="search-field" value="" placeholder="Search..." required="">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- End Mobile Menu -->

        <!-- Header Search -->
        <div class="search-popup">
            <span class="search-back-drop"></span>
            
            <div class="search-inner">
                <div class="auto-container">
                    <div class="upper-text">
                        <div class="text">Search for anything.</div>
                        <button class="close-search"><span class="fa fa-times"></span></button>
                    </div>

                    <form method="post" action="blog-checkerboard.html">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="Search..." required="">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Header Search -->
        
    </header>
    <!--End Main Header -->