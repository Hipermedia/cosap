<?php
/**
 * Template Name: Contacto
 * Description: A Page Template that adds a contact data via OT
 */
get_header(); ?>
<section class="content">

    <?php while ( have_posts() ) : the_post(); ?>
        <section class="contacto">
            <section class="texto-superior">
                <div><?php print_ot('texto_superior', ''); ?></div>
            </section>

            <aside class="mapa"> 
                <?php print_ot('mapa', ''); ?>                                                
            </aside>      

            <article class="contenido-contacto">
                <section class="texto-inferior">
                    <?php print_ot('texto_inferior', ''); ?>
                </section>
                <!-- Datos de contacto -->  
                <div class="datos">     
                    <?php if (get_ot('direccion')) : ?>   
                        <h3><i class="fa fa-map-marker"></i>Dirección</h3>
                        <p><?php print_ot('direccion', ''); ?></p>
                    <?php endif; ?>   
                    <?php if (get_ot('telefono')) : ?>   
                        <h3><i class="fa fa-phone"></i>Teléfono</h3>
                        <p><?php print_ot('telefono', ''); ?></p>
                    <?php endif; ?>
                    <?php if (get_ot('correo')) : ?>   
                        <h3><i class="fa fa-envelope"></i>Email</h3>
                        <p><?php print_ot('correo', ''); ?></p>
                    <?php endif; ?>
                </div>
                <!-- Redes sociales -->
                <div class="social">
                    <!-- Facebook -->
                    <?php if (get_ot('fb_url') != '') { ?>
                        <a href="<?php print_ot('fb_url', ''); ?>" title="Facebook" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
                    <?php }  ?>
                    <!-- Twitter -->
                    <?php if (get_ot('tw_url') != '') { ?>
                        <a href="<?php print_ot('tw_url', ''); ?>" title="Twitter" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a>
                    <?php }  ?>
                    <!-- Youtube -->
                    <?php if (get_ot('yt_url') != '') { ?>
                        <a href="<?php print_ot('yt_url', ''); ?>"title="Youtube" target="_blank"><i class="fa fa-youtube-square fa-3x"></i></a>
                    <?php }  ?>
                    <!-- Google Plus -->
                    <?php if (get_ot('gp_url') != '') { ?>
                        <a href="<?php print_ot('gp_url', ''); ?>" title="Google Plus" target="_blank"><i class="fa fa-google-plus-square fa-3x"></i></a>
                    <?php }  ?>      
                </div><!-- #social-contacto --> 
                <div class="formulario">
                    <h2 class="escribenos">
                        Escríbenos
                    </h2>
                    <?php echo do_shortcode(get_ot('formulario')); ?>       
                </div><!-- .entry-content -->   
                
                <?php the_social_share(); ?>

            </article><!-- .default-page ?> -->


        </section>
    <?php endwhile; // end of the loop. ?>

</section><!-- .content -->

<?php get_footer(); ?>