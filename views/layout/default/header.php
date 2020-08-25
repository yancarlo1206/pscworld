<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Estampado de Tiempo &#8211; SeTech</title>
    <!-- Stylesheets -->
    <link href="<?php echo BASE_URL; ?>public/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>public/css/style.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>public/css/vectorcss.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>public/css/responsive.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>public/css/flaticon2.css" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>public/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo BASE_URL; ?>public/images/favicon.png" type="image/x-icon">
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    
    <!-- Main Header-->
    <header class="main-header header-style-four">

        <!-- Main box -->
        <div class="main-box">
            <div class="menu-box">
                <div class="logo"><a href="index.html"><img src="<?php echo BASE_URL; ?>public/images/logo-5.png" alt="" title="" ></a></div>

                <!--Nav Box-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <?php foreach ($_layoutParams['menu'] as $key => $value) { ?>
                                    <?php $class = ''; ?>
                                    <?php $current = ''; ?>
                                    <?php $titulo = $value['titulo']; ?>
                                    <?php if($_layoutParams['item'] == $value['id']){
                                        $current = 'current ';
                                    } ?>
                                    <?php if(isset($value['submenu'])){ 
                                        $class='dropdown';
                                        $titulo = '<span>'.$value['titulo'].'</span>';
                                    } ?>
                                    <li class="<?php echo $current.$class; ?>">
                                        <a href="<?php echo $value['enlace'] ?>"><?php echo $titulo; ?></a>
                                        <?php if(isset($value['submenu'])){ ?>
                                            <ul>  
                                            <?php foreach ($value['submenu'] as $key_sub => $value_sub) { ?>
                                                <?php $currentSub = ''; ?>
                                                <?php if($_layoutParams['subItem'] == $value_sub['id']){
                                                    $currentSub = 'current';
                                                } ?>
                                                <li class='<?php echo $currentSub; ?>'>
                                                    <a href="<?php echo $value_sub['enlace']; ?>">
                                                        <?php echo $value_sub['titulo']; ?>
                                                    </a>
                                                </li>   
                                            <?php } ?>
                                            </ul>
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                                <!-- <li class="">
                                    <a href="index.html">Inicio</a>
                                </li>
                                <li class="current dropdown">
                                    <a href="servicios.html"><span>Servicios</span></a>
                                    <ul>
                                        <li><a href="doc2sign.html">Firma digital electronica</a></li>
                                        <li class="current"><a href="estampadotiempo.html">Estampado de tiempo</a></li>
                                        <li><a href="certificadosSSL.html">Certificados SSL</a></li>
                                        <li><a href="nom151.html">NOM-151</a></li>
                                    </ul>
                                </li>
                                <li><a href="doc2sign.html">Doc2sign</a></li>
                                <li><a href="noticias.html">Noticias</a></li>
                                <li><a href="contact.html">Contacto</a></li>
                                <li class="btn-box">
                                    <a href="login.html">Iniciar sesión</a>
                                </li> -->
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
            <div class="logo"><a href="index.html"><img src="<?php echo BASE_URL; ?>public/images/logo-5.png" alt="" title="" ></a></div>

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
    </header>