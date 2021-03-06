jQuery(document).ready(function($) {

	//Aquí van los Jquerys y JS personalizados del tema

	// Reduce el header al hacer scrolldown; la animación se realiza con CSS
	$(window).on("scroll touchmove", function () {
		$('#header').toggleClass('tiny', $(document).scrollTop() > 0);
		$('#header-wrapper').toggleClass('tiny', $(document).scrollTop() > 0);
		$('#header-logo img').toggleClass('tiny', $(document).scrollTop() > 0);
		$('#login-form').toggleClass('tiny', $(document).scrollTop() > 0);		
		$('#header-social').toggleClass('u-remove', $(document).scrollTop() > 0);
		$('#header #searchform').toggleClass('u-remove', $(document).scrollTop() > 0);
		$('#header-main-nav').toggleClass('tiny', $(document).scrollTop() > 0);	
	});
	
	// Versión responsive del menú; oculta la navegación y en su defecto aparece un botón para mostrar u ocultarl la navegación
	$('.toggle-nav').click(function(e) {
        $(this).toggleClass('activo');
        $('#header-main-nav ul').toggleClass('activo'); 
        e.preventDefault();
    });

	// Pone la clase .active a cualquier link que haya en el documento que corresponda con el url actual
	var url = window.location.href;
	$('a[href="'+url+'"]').addClass('active');


	$('#user_login').attr( 'placeholder', 'Usuario' );
	$('#user_pass').attr( 'placeholder', 'Contraseña' );

});