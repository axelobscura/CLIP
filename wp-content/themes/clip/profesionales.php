<?php
/*
Template Name: profesionales
*/
?>
<?php get_header(); ?>
<?php include ('header_retail.php'); ?>
<section class="hero-section parallax-container restaurants" id="sign-up">
  <div class="parallax-background hidden-xs hidden-sm hidden-md retail" <!--parallax-background parallax-max-distance="800"-->></div>
  <div class="parallax-background-mobile hidden-lg retail"></div>

  <div class="container">
    <h1 class="ax">SERVICIOS PROFESIONALES</h1>
	<h2 class="ax">Tienes Clip. Tienes tarjeta.</h2>
        <div align="center" style="margin-top:30px; margin-bottom:50px;">
    	<a class="btn btn-sm btn-primary ax" href="<?php echo get_page_link(49); ?>">REGISTRARSE</a>
    </div>
    <ul class="nav navbar-nav ax">
       <li><a href="#comercio" id="ga-support-web-header">ACCEPTANCE</a></li>
       <li><a href="#install">INSTALLMENTS</a></li>
       <li><a href="#recip">RECEIPT</a></li>
     </ul>
     <div class="featured comercio">
        <p>Featured Clip Retailer: FABRICA SOCIAL</p>
     </div>
  </div>
</section>

<section class="what-we-do" id="registration" style="background:#ffffff;">
  <div class="container" style="background-image:none;">
    <div class="row">
        <div class="col-sm-6" id="comercio">
            <div class="comercio4"></div>
        </div>
        <div class="col-sm-6">
            <h2 class="comercio">Offer Payments in Installments</h2>
            <p class="comercio">Offer your customers intallment payment plans. Payments can be split into differently monthly options and you set the minimum requirement for installment options. The payments will happen automatically and use the customers credit card used at the initial transaction.<br><a href="">Learn More</a></p>
        </div>
      </div>
      <h2 class="separador"></h2>
      <div class="linea_separador"></div>
      
      <div class="row">
      	<div class="col-sm-6" id="install">
            <h2 class="comercio">Accept all major credit card brands</h2>
            <p class="comercio">You can bring the payment to the customer’s table, counter, or even to the patron waiting in a long food truck line. Highlight mobility in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas lacus a massa fringilla ultrices. Phasellus mi justo, varius nec ipsum id, molestie rhoncus enim.</p>
        </div>
        <div class="col-sm-6">
            <div class="comercio0"></div>
        </div>
      </div>
      <h2 class="separador"></h2>
      <div class="linea_separador"></div>
      
      
      <div class="row">
        <div class="col-sm-6" id="comercio">
            <div class="comercio5"></div>
        </div>
        <div class="col-sm-6">
            <h2 class="comercio">Add tips to your bills</h2>
            <p class="comercio">Clip has an option to add a tip to your transactions. Your customers can choose an amount or choose not to tip. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas lacus a massa fringilla ultrices. Phasellus mi justo, varius nec ipsum id, molestie rhoncus enim. Phasellus mi justo, varius nec ipsum id, molestie rhoncus enim. <br><a href="">Learn More</a></p>
        </div>
      </div>
      <h2 class="separador"></h2>
      <div class="linea_separador"></div>
    
    <div class="row" id="recip">
      	<div class="col-sm-6" id="comercio">
            <div class="comercio6"></div>
        </div>
        <div class="col-sm-6">
            <h2 class="comercio">Featured Service: Endeavor</h2>
            <p class="comercio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas lacus a massa fringilla ultrices. Phasellus mi justo, varius nec ipsum id, molestie rhoncus enim.<br /><br /> Jillian Alvarez, Consultant at Endeavor</p>
        </div>
      </div>
      <h2 class="separador"></h2>
      <div class="linea_separador"></div>
      
    

      <h2 class="comercio_bt">Still have questions?</h2>
      <p class="comercio_bt">Contact one of our sales reps and we will help you figure out how Clip can help your business.</p>
      <div align="center">
      	<a href="" class="comercio_bt">Contact Us</a>
      </div>
      <h2 class="comercio_bt">Ready to join?</h2>
      <div align="center" style="margin-top:20px; margin-bottom:50px;">
    	<a class="btn btn-sm btn-primary ax" href="<?php echo get_page_link(49); ?>">Registrarse</a>
      </div>
  </div>
</section>

<?php get_footer(); ?>