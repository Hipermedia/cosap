<?php
/**
 * DOCUMENTOS
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */
?>

<!-- DOCUMENTOS -->
<?php if( have_rows('documento') ): ?> 
    <section class="documentos">
               
        <?php while ( have_rows('documento') ) : the_row(); ?>
            <div class="bloque-documento">
				<?php // elige el icono para el tipo de documento 
                $doc_type = get_sub_field('tipo'); 
                switch ($doc_type) { 
                    case 'word': $tipo = 'fa fa-file-word-o'; break;
                    case 'excel': $tipo = 'fa fa-file-excel-o'; break;
                    case 'powerpoint': $tipo = 'fa fa-file-powerpoint-o'; break;
                    case 'pdf': $tipo = 'fa fa-file-pdf-o'; break;
                    case 'audio': $tipo = 'fa fa-file-audio-o'; break;
                    case 'imagen': $tipo = 'fa fa-file-image-o'; break;
                    case 'video': $tipo = 'fa fa-file-video-o'; break;
                    case 'texto': $tipo = 'fa fa-file-text-o'; break;
                    default: $tipo = 'fa-file';
                } ?>
                <h2> <i class="fa <?php echo $tipo; ?>"></i>
                	<?php the_sub_field('titulo'); ?>                	
                </h2>
                <p class="descripcion-documento">
                  	<?php the_sub_field('descripcion'); ?>
                </p>
                <a class="descargar-documento" target="_blank" href="<?php the_sub_field('file'); ?>" rel="<?php the_sub_field('titulo'); ?>">
                  	<i class="fa fa-cloud-download fa-1x"></i> descargar
                </a>
            </div>
        <?php endwhile; ?>
    </section>		
<?php endif; ?> 