<?php
/**
 * DOCUMENTOS
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */
?>


		<!-- ENLACES -->
		<?php if( have_rows('enlaces') ): ?> 
			<section class="bloques-pagina">
			               
	            <?php while ( have_rows('enlaces') ) : the_row(); ?>
	            	<div class="resumen-articulo">
	            		<h2 class="titulo"><?php the_sub_field('titulo'); ?></h2>	
						<p class="desc"><?php the_sub_field('descripcion'); ?></p>
						<a href="<?php the_sub_field('url'); ?>" class="mas">
							<?php echo the_sub_field('url'); ?>
						</a>
	            	</div>	
	            <?php endwhile; ?>
	        			
			</section>	
		<?php endif; ?>