<footer class="main-footer">
        <div class="auto-container">
            
            <div class="widgets-section">
                <div class="row">
                    <div class="big-column col-xl-8 col-lg-12 col-md-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-3 col-md-12 col-sm-12">
                                <div class="logo"><a href="#"><img src="<?php echo BASE_URL; ?>/public/images/logo.png" alt=""></a></div>
                            </div>

                            <div class="footer-column col-lg-3 col-md-4 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Certificación</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="certificadosSSL.html">Certificado SSL</a></li>
                                            <li><a href="nom151.html">Constancia NOM-151</a></li>
                                            <li><a href="doc2sign.html">Doc2sign</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Conócenos</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="servicios.html">Servicios</a></li>
                                            <li><a href="noticias.html">Noticias</a></li>
                                            <li><a href="contact.html">Contacto</a></li>
                                            <li><a href="terminosCondiciones.html">Terminos y condiciones</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="big-column col-xl-4 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="footer-column col-lg-12 col-md-12 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Subscribete</h2>
                                    <div class="widget-content">
                                        <div class="newsletter-form">
                                            <form method="post" action="#" id="subscribe-form">
                                                <div class="form-group"><div class="response"></div></div>
                                                <div class="form-group">
                                                    <input type="email" name="email" class="email" value="" placeholder="Ingrese su correo electrónico.." required>
                                                    <button type="button" id="subscribe-newslatters" class="theme-btn"><i class="flaticon-arrow-pointing-to-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call Us -->
            <div class="call-us">
                <div class="service-num"><a href="#"><i class="fa fa-phone"></i>+52 55 5339 6600</a></div>
                <div class="social-link">
                    <a target="_blank" href="https://www.facebook.com/PSC-World-SA-de-CV-104638751341047"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/company/psc-world/?viewAsMember=true"><i class="fab fa-linkedin-in"></i></a>
                    <a target="_blank" href="https://twitter.com/psc_cv"><i class="fab flaticon-twitter"></i></a>
                </div>
            </div>
        </div>

        <!--Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">
                    © Copyright 2004-2020 PSC World SA de CV, Todos los derechos reservados.    
                </div>
            </div>
        </div>
        
    </footer>
    <!-- End Main Footer -->

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-arrow-up"></span></div>

<script src="<?php echo BASE_URL; ?>public/js/jquery.js"></script> 
<script src="<?php echo BASE_URL; ?>public/js/popper.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="<?php echo BASE_URL; ?>public/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/main-slider-script.js"></script>
<!--Revolution Slider-->
<script src="<?php echo BASE_URL; ?>public/js/jquery.fancybox.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/owl.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/wow.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/appear.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/script.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/modalimg.js"></script>
<!-- <script src="<?php echo BASE_URL; ?>public/js/modalimg.js"></script> -->
<!-- CK Editor -->
<script src="<?php echo BASE_URL; ?>public/ckeditor/ckeditor.js"></script>
<script>
    if($('#editorHtml').length){
        CKEDITOR.replace('editor1');
    }
</script>

<?php if (isset($_layoutParams['js']) && count($_layoutParams['js'])) {
    for ($i = 0; $i < count($_layoutParams['js']); $i++) {
        $x = substr($_layoutParams['js'][$i], -3);
        if ($x[0] == ".") { ?>
            <script src="<?php echo $_layoutParams['js'][$i] ?>?v=<?php echo(rand()); ?>" type="text/javascript"></script>
        <?php } else { ?>
            <link rel="stylesheet" href="<?php echo $_layoutParams['js'][$i] ?>" type="text/css" />
        <?php } } } ?>

</body>
</html>