<?php
/**
 * Template Name: Galería de medios
 * Description: Crea la portada de un conjunto de galerías vía ACF.
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */

get_header(); ?>

<section class="content">

    <?php while ( have_posts() ) : the_post(); ?>
        
        <article class="default-page-full">
            
            <h1 class="titulo"><?php the_title(); ?></h1>
                
            <?php the_content(); ?>

            <section class="galeria">
                
                <!-- PORTADAS DE GALERÍA DE MEDIOS-->
                <?php if(get_field('galeria')): ?>
                    
                    <?php while(has_sub_field('galeria')): ?>
                 
                        <a class="item" href="<?php the_sub_field('url'); ?>">                        
                            <img src="<?php the_sub_field('imagen'); ?>" />      
                            <h3><?php the_sub_field('titulo'); ?></h3>
                        </a>                    
                    <?php endwhile; ?>
                <?php endif; ?>
            </section> 

            <?php the_social_share(); ?> 
        </article><!-- .default-page ?> -->
                            
    <?php endwhile; // end of the loop. ?>



</section><!-- .content -->



<?php get_footer(); ?>