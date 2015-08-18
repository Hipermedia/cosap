<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SH_Base
 */

get_header(); ?>

<?php $bloques = get_ot('bloques_portada', array() ); ?>

<section role="main" class="portada">

	<!-- Flexslider vía OT -->
	<section class="bloques">
		<?php get_template_part( 'content', 'flexslider-ot' ); ?>

		<?php foreach ($bloques as $datos) { ?>		
			<a class="bloque" href="<?php echo $datos['url']; ?>" >
				<img src="<?php echo $datos['imagen']; ?>" alt="<?php echo $datos['title']; ?>">
			</a>                        
	    <?php } ?>
	</section>

	<!-- Artículos en portada -->
	<section class="articulos">
	    <?php //Obtengo valores de configuración en OT
	    $catid = get_ot('categoria_en_portada', ''); 
	    $post_per_page = get_ot('numero_categoria_portada', ''); 
	    //Consulta
	    $args = array( 'cat' => $catid, 'posts_per_page' => $post_per_page, 'paged' => get_query_var('paged'), );
	    $consulta = new WP_Query( $args );?> 
	    <?php if ( $consulta ->have_posts() ) :   ?>     
			<?php while ( have_posts() ) : the_post(); ?>                         
	            <?php get_template_part( 'content', get_post_format() ); ?>
	        <?php endwhile; ?> 
            <!-- Paginación -->
            <?php the_numbered_nav(); ?>        
	    <?php endif; ?>
    </section>    

</section><!-- .portada -->

<?php get_footer(); ?>