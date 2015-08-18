<?php
/**
 * The template for displaying the footer.
 */
?>
</main>



<footer class="footer" role="footer">	

	<!-- Menú principal -->        
	<nav id="footer-main-nav" class="main-nav" role="navigation">
	    <!-- Menu WordPress -->
	    <div class="content-nav">
	    	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'activo', 'menu_id' => 'header-menu') ); ?>    
		</div>
	</nav>	

    <div class="creditos" class="group">
    	<a class="firma-chroma" href="https://www.facebook.com/pages/CHROMA-ESTUDIO-CREATIVO/162991790427673">CHROMA Estudio Creativo</a>
		<a class="firma-sh" href="http://www.solucioneshipermedia.com/">Soluciones Hipermedia | Desarrollo web</a>
	</div><!-- #creditos -->  

</footer>

<!-- JS personalizados del tema -->
<?php themejs(); ?>

<?php wp_footer(); ?>


<!-- Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61514713-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>