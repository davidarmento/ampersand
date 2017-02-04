	<div class="clear"></div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p>&copy; <?php bloginfo('name'); ?>, <?=date('Y');?>.</p>
				</div>
				<div class="col-md-6">
					<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
					<?php dynamic_sidebar( 'footer-widget-area' ); ?>
					<?php endif; ?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</footer>
	<script>
		function openMn(mn) {
			mn.classList.toggle("change");
			if ( document.getElementById("nav").style.marginLeft == "0px" ) {
				document.getElementById("nav").style.marginLeft = "-290px";
			}
			else {
				document.getElementById("nav").style.marginLeft = "0";
			}
		}
		window.addEventListener("resize", function(){
			var w = window.innerWidth
			if ( w > 1024 ) {
				document.getElementById("nav").style.marginLeft = "0";
			}
			else {
				document.getElementById("nav").style.marginLeft = "-290px";
			}
		});
	</script>
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
	<script>
	 WebFont.load({
	    google: {
	      families: ['Open Sans:300']
	    }
	  });
	</script>

	<?php wp_footer(); ?>
</body>
</html>
