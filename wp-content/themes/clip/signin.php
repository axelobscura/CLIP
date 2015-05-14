<?php
/*
Template Name: signin
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
        	<h3><a href="<?php echo get_page_link(49); ?>">Need a Clip Account? Register</a></h3>
            <h4>Enter your Clip Account</h4>
            <form action="" method="post">
            	<input name="email" type="text" value="Email Address" onclick="this.value=''" />
                <input name="pw" type="text" value="Password" onclick="this.value=''" />
            </form>
            <a href="" class="pwd">SHOW PASSWORD</a><br />
            <div align="center" style=" padding-bottom:10px;">
                <a class="btn btn-sm btn-primary ax in" href="/es-mx#sign-up">ENTRAR</a><br />
                <a href="<?php echo get_page_link(32); ?>" class="pwd2">&iquest; Olvidaste tu contrase&ntilde;a ?</a>
                <p>Necesitas una cuenta Clip? <a href="<?php echo get_page_link(49); ?>">Reg&iacute;strate</a></p>
            </div>
        </div>
    </div>
</section>