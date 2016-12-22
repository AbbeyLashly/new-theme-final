<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package punchtheme
 */

?>

	</div><!-- #content -->



	<nav id="cd-lateral-nav">
		<ul class="cd-navigation">
			<li class="item-has-children">
				<a href="#0">Services</a>
				<ul class="sub-menu">
					<li><a href="#0">Brand</a></li>
					<li><a href="#0">Web Apps</a></li>
					<li><a href="#0">Mobile Apps</a></li>
				</ul>
			</li> <!-- item-has-children -->

			<li class="item-has-children">
				<a href="#0">Products</a>
				<ul class="sub-menu">
					<li><a href="#0">Product 1</a></li>
					<li><a href="#0">Product 2</a></li>
					<li><a href="#0">Product 3</a></li>
					<li><a href="#0">Product 4</a></li>
					<li><a href="#0">Product 5</a></li>
				</ul>
			</li> <!-- item-has-children -->

			<li class="item-has-children">
				<a href="#0">Stockists</a>
				<ul class="sub-menu">
					<li><a href="#0">London</a></li>
					<li><a href="#0">New York</a></li>
					<li><a href="#0">Milan</a></li>
					<li><a href="#0">Paris</a></li>
				</ul>
			</li> <!-- item-has-children -->
		</ul> <!-- cd-navigation -->

		<ul class="cd-navigation cd-single-item-wrapper">
			<li><a href="#0">Tour</a></li>
			<li><a href="#0">Login</a></li>
			<li><a href="#0">Register</a></li>
			<li><a href="#0">Pricing</a></li>
			<li><a href="#0">Support</a></li>
		</ul> <!-- cd-single-item-wrapper -->

		<ul class="cd-navigation cd-single-item-wrapper">
			<li><a class="current" href="#0">Journal</a></li>
			<li><a href="#0">FAQ</a></li>
			<li><a href="#0">Terms &amp; Conditions</a></li>
			<li><a href="#0">Careers</a></li>
			<li><a href="#0">Students</a></li>
		</ul> <!-- cd-single-item-wrapper -->

		<div class="cd-navigation socials">
			<a class="cd-twitter cd-img-replace" href="#0">Twitter</a>
			<a class="cd-github cd-img-replace" href="#0">Git Hub</a>
			<a class="cd-facebook cd-img-replace" href="#0">Facebook</a>
			<a class="cd-google cd-img-replace" href="#0">Google Plus</a>
		</div> <!-- socials -->
	</nav>




	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'punchtheme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'punchtheme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'punchtheme' ), 'punchtheme', '<a href="http://punchng.com" rel="designer">Punch Newspapers</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<script>
        ;(function() {
            // Initialize
						var bLazy = new Blazy({
							offset: 30,
							//container: '#scrolling-container',
								breakpoints: [{
								width: 420 // Max-width
								,src: 'data-src-small'
						 }]
						, success: function(element){
								 setTimeout(function(){
							 // We want to remove the loader gif now.
							 // First we find the parent container
							 // then we remove the "loading" class which holds the loader image
							 var parent = element.parentNode;
							 parent.className = parent.className.replace(/\bloading\b/,'');
						 }, 500);
					}
				});
        })();
    </script>
		<script src="https://cdn.plyr.io/2.0.11/plyr.js"></script>
		<script>plyr.setup();</script>
		<!-- Rangetouch to fix <input type="range"> on touch devices (see https://rangetouch.com) -->
		<script src="https://cdn.rangetouch.com/0.0.9/rangetouch.js" async></script>





</body>
</html>
