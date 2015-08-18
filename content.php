<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */
?>

<article class="resumen-articulo">
    
    <!-- Titulo -->
    <h2 class="titulo">
        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h2>
    <!-- Descripcion -->
    <div class="descripcion">
        <?php the_excerpt(); ?>
    </div>  
    <!-- Ver más -->
    <div class="meta-ft">
        <a class="mas" href="<?php the_permalink(); ?>">(+) Más información</a>
        <!-- FACEBOOK -->      
        <a class="fb-meta" class="facebook" href="<?php the_permalink(); ?>" 
          onclick="
            window.open(
              'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
              'facebook-share-dialog', 
              'width=626,height=436'); 
            return false;">
           <i class="fa fa-facebook"></i>
        </a>                       
        <!-- TWITTER -->
        <a class="tw-meta" href="#"
            onclick="popUp=window.open(
            'https://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>', 
            'popupwindow', 
            'scrollbars=yes,width=630,height=440');
            popUp.focus();
            return false">
            <i class="fa fa-twitter"></i>
         </a>
    </div>

</article>