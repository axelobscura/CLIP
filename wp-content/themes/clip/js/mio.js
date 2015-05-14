// JavaScript Document
jQuery(document).ready(function($) {
    $('#nav').localScroll(800);
	$('.hero_section').parallax("50%", 0.3);
	
	$("#registro").validate({
			rules: {
				pw: {
					required: true,
					minlength: 2
				},
				email: {
					required: true,
					email: true
				},
				nombre: "required",
				ap: "required",
				am: "required",
				cel: "required",
			},
			messages: {
				pw: {
					required: "* Ingrese una contraseña",
					minlength: "Su contraseña debe tener mínimo 5 carácteres"
				},
				email: "* Por favor ingrese una dirección de Email válida",
				nombre: "* Por favor ingrese su Nombre",
				ap: "* Por favor ingrese su Apellido Paterno",
				am: "* Por favor ingrese su Apellido Materno",
				cel: "* Por favor ingrese su Teléfono",
			}
	});
	
	$(".sticker_two a").hover(function(e){
    	e.preventDefault();
    	$(this).tab('show');
    });
	
	$(".prodtour a").click(function(e){
    	e.preventDefault();
    	$(this).tab('show');
    });
	
	$('.btnNext').click(function(){
	  $('.nav-tabs > .active').next('li').find('a').trigger('click');
	});
	
	$('.btnPrevious').click(function(){
	  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
	});
	
	$('[data-toggle="tooltip"]').tooltip(); 
});

