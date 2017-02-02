	<div class="clear"></div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p>&copy; <?php bloginfo('name'); ?>, <?=date('Y');?>. Mi primer tema de WP.</p>
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
		}
	</script>
	<?php wp_footer(); ?>
</body>
</html>
