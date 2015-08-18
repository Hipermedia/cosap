<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<section class="content">

	<?php while ( have_posts() ) : the_post(); ?>
		
		<?php if ( has_post_thumbnail() ) : ?>
			<figure class="imagen-destacada">
				<?php the_post_thumbnail('full'); ?>
			</figure>
		<?php endif; ?>		

		<article class="default-page">
			
			<h1 class="titulo"><?php the_title(); ?></h1>
				
			<?php the_content(); ?>

		</article><!-- .default-page ?> -->

		<?php the_social_share(); ?>
		
		<!-- Artículos relacionados -->
		<section class="bloques-pagina">
			
			<?php wp_reset_postdata(); ?>
		    <?php //Obtengo valores de configuración en OT
		    $catid = get_field('cat'); 
		    $post_per_page = get_field('num');; 
		    //Consulta
		    $args = array( 'cat' => $catid, 'posts_per_page' => $post_per_page );
		    $consulta = new WP_Query( $args );?> 
		    <?php if ( $consulta ->have_posts() ) :   ?>     
				<?php while ( $consulta ->have_posts() ) : $consulta ->the_post(); ?>                         
		            <?php get_template_part( 'content', get_post_format() ); ?>
		        <?php endwhile; ?> 
		        <?php wp_reset_postdata(); ?>
		    <?php endif; ?>
	    </section> 
		
	<?php endwhile; // end of the loop. ?>

</section><!-- .content -->

<?php get_footer(); ?>

