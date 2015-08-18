<?php
/**
 * DOCUMENTOS
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */
?>

 <!-- ACORDEON -->
	    <?php if( have_rows('acordeon') ): ?> 
			<section class="bloques-pagina">
		      	<?php $num_titulo = 1; ?>
		      	<?php $num_contenido = 1; ?>          
		        <?php while ( have_rows('acordeon') ) : the_row(); ?>

			        <section class="bloque-acordeon resumen-articulo">
			          	<h2 class="titulo"><?php the_sub_field('titulo'); ?></h2>
			           	<p class="desc"><?php the_sub_field('descripcion'); ?></p>
			           	<p id="mas-info<?php echo $num_titulo++; ?>" class="mas-info fa fa-plus mas"><span> Más información</span></p>
			           	<div id="contenido-acordeon<?php echo $num_contenido++; ?>" class="contenido-acordeon "><?php the_sub_field('contenido'); ?></div>
			        </section>			
		        <?php endwhile; ?>
			</section>
	    <?php endif; ?>	
<script>
jQuery(document).ready(function($) {
	$("#contenido-acordeon").hide();
	<?php if(get_field('acordeon')): ?>
		<?php $cuentita = 1; ?>
		<?php while(has_sub_field('acordeon')): ?>
			var on<?php echo $cuentita; ?> = false;
			$('p#mas-info'+<?php echo $cuentita; ?>).click(function () {
				$('div#contenido-acordeon'+<?php echo $cuentita; ?>).toggle('slow');
				var d = document.getElementById("mas-info<?php echo $cuentita; ?>");
				if(on<?php echo $cuentita; ?>) {
					d.className = "mas-info fa fa-plus mas";
					 on<?php echo $cuentita; ?> = false;
				} else {
					d.className = "mas-info fa fa-minus mas";
					on<?php echo $cuentita; ?> = true;
				}
			});
		<?php $cuentita++; ?>
		<?php endwhile; ?>
	<?php endif; ?>
});
</script>