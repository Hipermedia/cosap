<?php
/**
 * The template used for displaying flexslider via ACF
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */
//Rotatorio
if(get_field('rotatorio')): ?>
	
	<?php flexslider_custom_config_sh(); ?>
	
	<?php //Carga opciones del rotario vía OT
	$slider_animation = get_field('slider_animation');
	$slider_direction = get_field('slider_direction');
	$slider_reverse = get_field('slider_reverse');
	$slider_animationloop = get_field('slider_animationloop');
	$slider_slideshow = get_field('slider_slideshow');
	$slider_slideshowspeed = get_field('slider_slideshowspeed');
	$slider_animationspeed = get_field('slider_animationspeed');
	$slider_randomize = get_field('slider_randomize');
	$slider_pauseonaction = get_field('slider_pauseonaction');
	$slider_pauseonhover = get_field('slider_pauseonhover');
	$slider_controlnav = get_field('slider_controlnav');
	$slider_directionnav = get_field('slider_directionnav');
	$slider_carrusel_slider_navigation = get_field('slider_carrusel_slider_navigation');
	?>

	<!-- Place in the <head>, after the three links -->
	<script type="text/javascript" charset="utf-8">
		jQuery(document).ready(function($) {

			<?php if ( $slider_carrusel_slider_navigation == 'true' ) {
				$slider_directionnav = 'true';
				$slider_animationloop = 'false';
				$slider_controlnav = 'false';
			?>
				<!-- MINIATURAS DEL ROTATORIO -->
				$(window).load(function() {
					$('#subportada-carrusel').flexslider({
						directionNav: true,
						animationLoop: false,
						animation: "slide",
						controlNav: false,
						slideshow: false,
						itemWidth: 210,
						itemMargin: 5,
						asNavFor: '#subportada-slider'
					});
				});
			<?php } ?>
		
			<!-- ROTATORIO REGULAR -->
			$(window).load(function() {
				$('#subportada-slider').flexslider({

					//FLEXSLIDER SETTINGS
					animation: "<?php echo $slider_animation; ?>",              //String: Select your animation type, "fade" or "slide"
					direction: "<?php echo $slider_direction; ?>",        //String: Select the sliding direction, "horizontal" or "vertical"
					reverse: <?php echo $slider_reverse; ?>,                 //{NEW} Boolean: Reverse the animation direction
					animationLoop: <?php echo $slider_animationloop; ?>,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
					smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode  
					startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
					slideshow: <?php echo $slider_slideshow; ?>,                //Boolean: Animate slider automatically
					slideshowSpeed: <?php echo $slider_slideshowspeed; ?>,           //Integer: Set the speed of the slideshow cycling, in milliseconds
					animationSpeed: <?php echo $slider_animationspeed; ?>,            //Integer: Set the speed of animations, in milliseconds
					initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
					randomize: <?php echo $slider_randomize; ?>,               //Boolean: Randomize slide order
					
					// Usability features
					pauseOnAction: <?php echo $slider_pauseonaction; ?>,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
					pauseOnHover: <?php echo $slider_pauseonhover; ?>,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
					useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
					touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
					video: false,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches
					
					// Primary Controls
					controlNav: <?php echo $slider_controlnav; ?>,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
					directionNav: <?php echo $slider_directionnav; ?>,             //Boolean: Create navigation for previous/next navigation? (true/false)
					prevText: "Previous",           //String: Set the text for the "previous" directionNav item
					nextText: "Next",               //String: Set the text for the "next" directionNav item
					
					// Secondary Navigation
					keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
					multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
					mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
					pausePlay: false,               //Boolean: Create pause/play dynamic element
					pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
					playText: 'Play',               //String: Set the text for the "play" pausePlay item
					<?php if ( $slider_carrusel_slider_navigation == 'true' ) { ?>
						sync: "#home-flexslider-nav"
					<?php } ?>

				});
			});

		});
	</script>
	
	<div id="contenedor-home-flexslider" class="group portada-franquicia-flexslider">
		<div id="subportada-slider" class="flexslider">
			<ul class="slides">
				<?php while(has_sub_field('rotatorio')): ?>
					<li>
						<a href="<?php the_sub_field('enlace_de_diapositiva'); ?>">
							<img src="<?php the_sub_field('imagen_de_diapositiva'); ?>" />
						</a>
					</li>
				<?php endwhile; ?>
			</ul><!-- .slides -->
		</div><!-- .flexslider -->
		
		<?php if ( $slider_carrusel_slider_navigation == 'true' ) { ?>
			<!-- CARRUSEL DE IMÁGENES -->
			<div id="subportada-carrusel" class="flexslider">
				<ul class="slides">
					<?php while(has_sub_field('rotatorio')): ?>
						<li>
							<a href="<?php the_sub_field('enlace_de_diapositiva'); ?>">
								<img src="<?php the_sub_field('imagen_de_diapositiva'); ?>" />
							</a>
						</li>
					<?php endwhile; ?>
				</ul><!-- .slides -->
			</div><!-- .flexslider -->
		<?php } ?>
		
	</div><!-- #contenedor-home-flexslider -->

<?php endif; ?>