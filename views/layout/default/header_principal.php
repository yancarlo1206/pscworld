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
<script>var BASE={url: '<?php echo BASE_URL; ?>'}</script>
</head>

<body>
    <div class="modalimg" style="visibility: hidden;">
        <div class="modal__content modalimg__content">
            <div class="box-modalimg">
                <img class="imagenDModal" src="<?php echo BASE_URL; ?>public/images/acreditacion.jpg">
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
                        <li><a class="abririmg" href=""><i class="fa flaticon-medal"></i>Acreditación con PSC</a></li>
                        <li><a href="https://www.doc2sign.com/" target="_blank"><i class="fa flaticon-user"></i>Iniciar Sesión en doc2sign</a></li>
                        <?php if(!Session::get('autenticado')){ ?>
                        <?php }else{ ?>
                            <li><a href="<?php echo BASE_URL; ?>login/cerrar"><i class="fa flaticon-arrow-pointing-to-right"></i>Cerrar Sesión</a></li>
                        <?php } ?>    
                    </ul>
                </div>
                <div>
                    <span class="icon flaticon-whatsapp txt-white"></span>
                    <a class="txt-white" href="tel:525553396600">+52 55 5339 6600</a>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Main box -->
        <div class="main-box">
            <div class="menu-box">
                <div class="logo">
                    <a href="<?php echo BASE_URL; ?>" class="main-logo"><img src="<?php echo BASE_URL; ?>public/images/logo.png" alt="" title="" ></a>
                    <a href="<?php echo BASE_URL; ?>" class="sticky-logo"><img src="<?php echo BASE_URL; ?>public/images/logo-5.png" alt="" title="" ></a>
                </div>

                <!--Nav Box-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <?php foreach ($_layoutParams['menu'] as $key => $value) { ?>
                                    <?php if($value['id'] != 'login'){ ?>
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
                                                    <?php $classTres = ''; ?>
                                                    <?php if(isset($value_sub['submenutres'])){ 
                                                            $classTres='dropdown';
                                                            //$titulo = '<span>'.$value['titulo'].'</span>';
                                                        } ?>
                                                    <li class='<?php echo $classTres; ?>'>
                                                        <a href="<?php echo $value_sub['enlace']; ?>"><?php echo $value_sub['titulo']; ?></a>
                                                        <?php if(isset($value_sub['submenutres'])){ ?>
                                                            <ul>  
                                                            <?php foreach ($value_sub['submenutres'] as $key_tres => $value_tres) { ?>
                                                                <?php $target=''; ?>
                                                                <?php $currentSubTres = ''; ?>
                                                                <?php if($_layoutParams['subItem'] == $value_tres['id']){
                                                                    $currentSubTres = 'current';
                                                                } ?>
                                                                <?php if($value_sub['id'] == 'consulta_certificado'){
                                                                    $target = 'target="_blank"';
                                                                } ?>
                                                                <li class='<?php echo $currentSubTres; ?>'>
                                                                    <a href="<?php echo $value_tres['enlace']; ?>" <?php echo $target; ?> >
                                                                        <?php echo $value_tres['titulo']; ?>
                                                                    </a>
                                                                </li>   
                                                            <?php } ?>
                                                            </ul>
                                                        <?php } ?>
                                                    </li>   
                                                <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
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
            </div>
        </div><!-- End Mobile Menu -->
        
    </header>
    <!--End Main Header -->