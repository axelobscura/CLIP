<?php
/*
Template Name: forgot_pwd
*/
?>
<?php get_header(); ?>

<section class="hero-section parallax-container onboarding" id="sign-up">
  <div class="parallax-background hidden-xs hidden-sm hidden-md retail" <!--parallax-background parallax-max-distance="800"-->></div>
  <div class="parallax-background-mobile hidden-lg retail"></div>
	<div class="onboarding_signin">
    	<div class="signin_logo"></div>
        <div class="signin_close">
        	<a class="cerrar" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
        </div>
        <div class="signin_form">
        	<h3>&iquest;Olvidaste tu contrase&ntilde;a?</h3>
            <h4 style=" font-size:14px; padding:0px 10px;">Para restablecer tu contrase&ntilde;a, ingresa el correo electr&oacute;nico con el que te registraste, te enviaremos instrucciones en un momento.</h4>
            <form action="" method="post">
            	<input name="email" type="text" value="Correo electr&oacute;nico registrado" onclick="this.value=''" />
            </form>
            <div align="center" style=" padding-bottom:10px;">
                <a class="btn btn-sm btn-primary ax in" href="/es-mx#sign-up">ENVIAR INSTRUCCIONES</a><br />
            </div>
        </div>
    </div>
</section>