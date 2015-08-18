<?php
/**
 * Template Name: Página ancho completo
 * Description: Crea la portada de un conjunto de galerías vía ACF.
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */

get_header(); ?>
<section class="content">

    <?php while ( have_posts() ) : the_post(); ?>
        
        <?php if ( has_post_thumbnail() ) : ?>
            <figure class="imagen-destacada-full">
                <?php the_post_thumbnail('full'); ?>
            </figure>
        <?php endif; ?>     

        <article class="default-page-full">
            
            <h1 class="titulo"><?php the_title(); ?></h1>
                
            <?php the_content(); ?>
<?php if ( !post_password_required() ) : ?>
        </article><!-- .default-page ?> -->

        <?php get_template_part( 'content', 'acordeon' ); ?>

        <?php get_template_part( 'content', 'enlaces' ); ?>

        <?php get_template_part( 'content', 'documentos' ); ?>

        <?php the_social_share(); ?>
<?php endif; ?>

    <?php endwhile; // end of the loop. ?>

</section><!-- .content -->

<?php get_footer(); ?>