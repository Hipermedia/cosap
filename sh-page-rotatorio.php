<?php
/**
 * Template Name: Página Rotatorio
 * Description: Crea la portada de un conjunto de galerías vía ACF.
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */

get_header(); ?>



<section class="content">

    <?php while ( have_posts() ) : the_post(); ?>
        
        <!-- Rotatorio de producción Flexslider vía ACF -->
        <?php get_template_part( 'content', 'flexslider-acf' ); ?>   

        <article class="default-page-full">
            
            <h1 class="titulo"><?php the_title(); ?></h1>
                
            <?php the_content(); ?>

        </article><!-- .default-page ?> -->

        <?php get_template_part( 'content', 'acordeon' ); ?>

        <?php get_template_part( 'content', 'enlaces' ); ?>

        <?php get_template_part( 'content', 'documentos' ); ?>

        <?php the_social_share(); ?>


    <?php endwhile; // end of the loop. ?>

</section><!-- .content -->

<?php get_footer(); ?>