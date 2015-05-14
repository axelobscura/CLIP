<?php
/*
Template Name: reader
*/
?>
<?php get_header(); ?>
<?php include ('header_retail.php'); ?>
<section class="hero-section parallax-container reader" id="sign-up">
  <div class="parallax-background hidden-xs hidden-sm hidden-md retail" <!--parallax-background parallax-max-distance="800"-->></div>
  <div class="parallax-background-mobile hidden-lg retail"></div>

  
</section>

<section class="what-we-do" id="registration" style="background:#ffffff;">
  <div class="container" style="background-image:none;">
    <div class="row">
        <div class="col-sm-6" id="comercio">
            <div class="reader1"></div>
            <p class="comercio"><strong>Aplicaci&oacute;n y dispositivos m&oacute;viles</strong>
                Descarga la aplicaci&oacute;n totalmente gratuita para iOS o Android, dise&ntilde;ada para proporcionar la mejor experiencia de pago.</p>
            <ul class="app">
            	<li><a href="https://itunes.apple.com/app/id771245360" class="mac"></a></li>
                <li><a href="https://play.google.com/store/apps/details?id=com.payclip.clip" class="android"></a></li>
            </ul>
        </div>
        <div class="col-sm-6">
            <h2 class="reader">Conoce el lector Clip</h2>
            <p class="comercio">Todas las tarjetas: un solo lector.<br>
                El mejor lector de tarjetas del mercado: una pieza de dise&ntilde;o y tecnolog&iacute;a de punta,<br>
                cuidado hasta el &uacute;ltimo detalle.<br><br>
                &#8226; Vers&aacute;til - Lee tarjetas de chip y banda magn&eacute;tica<br>
                &#8226; Pr&aacute;ctico - Bater&iacute;a interna recargable<br>
            	&#8226; Seguro - No guarda informaci&oacute;n de tarjetas ni transacciones<br>
            	&#8226; Dise&ntilde;o - Ligero y hermoso<br><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pretium quam a nulla ultricies rutrum. In eu tellus ipsum. Nullam gravida, turpis id congue dictum, neque eros molestie felis, pellentesque tincidunt risus metus eu velit. Praesent eu vestibulum mi, id faucibus elit. Curabitur in placerat ex. Vestibulum ante ipsum.</p>
            <div align="center" style="margin-top: 15px; margin-bottom:15px;">
                <a class="btn btn-sm btn-primary ax" href="<?php echo get_page_link(49); ?>">Registrarse</a>
            </div>
            <p class="comercio">El lector Clip tiene un costo de $500.00 + IVA con env&iacute;o gratuito</p>
        </div>
      </div>
      
      
  </div>
</section>

<?php get_footer(); ?>