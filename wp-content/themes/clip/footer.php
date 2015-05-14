    <footer class="site_footer">
    	<h2 style="text-transform:none;">&iquest;Necesitas ayuda? Felices de ayudarte</h2>
    	<div class="row">
          <div class="col-sm-5"><p class="phone"><strong>De lunes a viernes de 9 am a 7 pm y s&aacute;bados de 10 am a 5 pm</strong><br />Ll&aacute;manos: 6393­2323 (DF) &middot; 01800 002 5476 (Interior)</p></div>
          <div class="col-sm-3"><p class="chat">Chatea con nosotros</p></div>
          <div class="col-sm-4"><p class="search">Visita nuestro sitio de ayuda</p></div>
        </div>
    </footer>
    <footer class="site-footer-primary">
    	<div class="row">
          <div class="col-md-6">
            <?php if ( is_active_sidebar('footer_menu')): ?>
                <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                	<div id="myNavbar">
                    	<?php dynamic_sidebar('footer_menu'); ?>
                    </div>
                </div><!-- #primary-sidebar -->
            <?php endif; ?>
          </div>
          <div class="col-md-2">
          	<ul class="social">
            	<li><a href="https://twitter.com/clip_mx" class="tt" target="_blank"></a></li>
                <li><a href="https://www.facebook.com/clipmx" class="ff" target="_blank"></a></li>
                <li><a href="https://www.facebook.com/clipmx" class="yt" target="_blank"></a></li>
            </ul>
          </div>
          <div class="col-md-4">
          	<ul class="app">
            	<li><a href="https://itunes.apple.com/app/id771245360" class="mac"></a></li>
                <li><a href="https://play.google.com/store/apps/details?id=com.payclip.clip" class="android"></a></li>
            </ul>
          </div>
        </div>
    </footer>
    <footer class="site-footer-secondary">
    	<div class="row">
          <div class="col-md-6">
          	<div class="lang">
            	<form action="" method="post">
                	<select name="idioma" class="idioma">
                    	<option value="espanol">Espa&ntilde;ol</option>
                        <option value="ingles">Ingl&eacute;s</option>
                    </select>
                </form>
            </div>
          </div>
          <div class="col-md-6">
          	<p class="legal">&copy; Copyright 2012-2015 PayClip, Inc. All rights reserved<br />
            <a href="<?php echo get_page_link(51); ?>">Pol&iacute;tica de privacidad</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo get_page_link(53); ?>">T&eacute;rminos y condiciones</a></p>
          </div>
        </div>
    </footer>
</div>
</body>
</html>