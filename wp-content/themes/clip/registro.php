<?php
/*
Template Name: registro
*/
?>
<?php get_header(); ?>

<section class="hero-section parallax-container onboarding register" id="sign-up" style="overflow:auto;">
  <div class="parallax-background hidden-xs hidden-sm hidden-md retail" <!--parallax-background parallax-max-distance="800"-->></div>
  <div class="parallax-background-mobile hidden-lg retail"></div>
	<div class="onboarding_signin" style="margin-bottom:50px;">
    	<div class="signin_logo"></div>
        <div class="signin_close">
        	<a class="cerrar" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
        </div>
        <div class="signin_form">
        	<h3>Crear una cuenta Clip, Registro</h3>
            <h4>Llenar el siguiente formulario</h4>
            <form id="registro" action="" method="post">
            	 <input name="email" id="email" type="text" value="Email Address" onclick="this.value=''" required>
                 <input name="pw" id="pw" type="text" value="Password" onclick="this.value=''" required>
            	 <a href="" class="pwd">SHOW PASSWORD</a><br />
            	 <input name="nombre" id="nombre" type="text" value="Nombre" onclick="this.value=''" required>
                 <input name="ap" id="ap" type="text" value="Apellido paterno" onclick="this.value=''" required>
                 <input name="am" id="am" type="text" value="Apellido materno" onclick="this.value=''" required>
                 <input name="cel" id="cel" type="text" value="Celular" onclick="this.value=''" required>
                 <input name="business" id="business" type="text" value="Empresa" onclick="this.value=''" required>
            <div align="center" style=" padding-bottom:10px;">
            	<p style="padding:5px 25px;">Al dar click en registrarse aceptas que eres mayor de edad y est&aacute;s de acuerdo con nuestra <a href="<?php echo get_page_link(51); ?>">POL&Iacute;TICA DE PRIVACIDAD</a> <br />y nuestros <a href="<?php echo get_page_link(53); ?>">T&Eacute;RMINOS Y CONDICIONES</a>.</p>
                <input class="submit registro" type="submit" value="ENTRAR">
                <a href="<?php echo get_page_link(32); ?>" class="pwd2">&iquest; Olvidaste tu contrase&ntilde;a ?</a>
                <!--<p>Necesitas una cuenta Clip? <a href="">Reg&iacute;strate</a></p>-->
            </div>
            </form>
        </div>
    </div>
</section>