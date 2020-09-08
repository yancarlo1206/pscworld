<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $this->titulo; ?></title>
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/css/modal.css">
    <link href="<?php echo BASE_URL; ?>public/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>public/css/style.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>public/css/vectorcss.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>public/css/responsive.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>public/css/flaticon2.css" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>public/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo BASE_URL; ?>public/images/favicon.png" type="image/x-icon">
    <!-- <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> -->

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
                <div class="logo">
                    <a href="<?php echo BASE_URL; ?>">
                        <img src="<?php echo BASE_URL; ?>public/images/logo-5.png" alt="" title="" >
                    </a>
                </div>

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
                                                                <?php $currentSubTres = ''; ?>
                                                                <?php if($_layoutParams['subItem'] == $value_tres['id']){
                                                                    $currentSubTres = 'current';
                                                                } ?>
                                                                <li class='<?php echo $currentSubTres; ?>'>
                                                                    <a href="<?php echo $value_tres['enlace']; ?>">
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
            <div class="logo"><a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/images/logo-5.png" alt="" title="" ></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </div>
        </div>

        <!-- Mobile Sticky Header -->
        <div class="mobile-sticky-header">
            <div class="logo"><a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/images/logo-5.png" alt="" title="" ></a></div>

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
                    <div class="nav-logo"><a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/images/logo-5.png" alt="" title="" ></a></div><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </nav>
            </div>
        </div><!-- End Mobile Menu -->
    </header>