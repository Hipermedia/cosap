<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<!-- Basic Page Needs
 ================================================== -->  
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
    <?php /*Print the <title> tag based on what is being viewed.*/
    	global $page, $paged;
    	wp_title( '|', true, 'right' );
    	// Add the blog name.
    	bloginfo( 'name' );
    	// Add the blog description for the home/front page.
    	$site_description = get_bloginfo( 'description', 'display' );
    	if ( $site_description && ( is_home() || is_front_page() ) )
    		echo " | $site_description";
    	// Add a page number if necessary:
    	if ( $paged >= 2 || $page >= 2 )
    		echo ' | ' . sprintf( __( 'Page %s', 'shbase' ), max( $paged, $page ) );
	?>
</title>
<meta name="author" content="<?php echo bloginfo( 'name' ); ?>" />
<meta name="robots" content="all">
<!-- Mobile Specific Metas
 ================================================== --> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!-- Font Awesome -->
<link href="<?php plantilla_url(); ?>/inc/font-awesome/css/font-awesome.css" rel="stylesheet">
<!-- Favicons
  ================================================== -->
<link href=" <?php print_ot('favicon', get_plantilla_url().'/images/favicon.ico'); ?>" rel="icon" type="image/x-icon" />
<!-- pingback
  ================================================== -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id= "header-wrapper" class="header-wrapper">
    <header id="header" class="header" role="banner" >
            
        <!-- Logo -->
        <a href="<?php inicio_url(); ?>" id="header-logo" class="logo">
            <img src="<?php print_ot('logo', get_plantilla_url().'/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
        </a>
               
        <!-- Formulario de búsqueda -->
        <?php get_search_form(); ?>

        <!-- Zona Privada -->
        <?php //Argumentos del formulario de login
            $args = array(
                'echo'           => true,
                'redirect'       => site_url( $_SERVER['REQUEST_URI'] ), 
                'form_id'        => 'loginform',
                'label_username' => __( 'Usuario' ),
                'label_password' => __( 'Coontraseña' ),
                'label_remember' => __( 'Remember Me' ),
                'label_log_in'   => __( 'Ingresar' ),
                'id_username'    => 'user_login',
                'id_password'    => 'user_pass',
                'id_remember'    => 'rememberme',
                'id_submit'      => 'wp-submit',
                'remember'       => false,
                'value_username' => NULL,
                'value_remember' => false
        ); ?> 
        <div id="login-form" class="login-form">
            <h4>Zona Privada</h4>
            <?php wp_login_form( $args ); ?>
        </div>
    </header>
    <!-- Menú principal -->        
    <nav id="header-main-nav" class="main-nav" role="navigation">
        <!-- Icono de menú para versión adaptativa -->
        <a class="toggle-nav" href="#">MENU DE NAVEGACIÓN</a>
        <!-- Menu WordPress -->
        <div class="content-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'activo', 'menu_id' => 'header-menu') ); ?>   
        </div>
    </nav>
</div>

<main class="content-wrapper">