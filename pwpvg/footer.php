</div>
</div>
<footer id="footer">
	<div class="col-fifth">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Pleasant View Logo-rev.png" width="176" height="80" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"/></a>
	</div>
	<div class="col-fifth">
		<h3>Contact</h3>
		Pleasant View Gardens, Inc.<br>
		7316 Pleasant St.<br>
		Loudon, NH 03307<br>
		<br>
		Phone: <a href="tel:603-435-8361">603-435-8361</a><br>
		Fax: 603-435-6849<br>
		Email: <a href="mailto:sales@pwpvg.com">sales@pwpvg.com</a>
	</div>
	<div class="col-fifth">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</div>
	<div class="clear"></div>
	<div id="copyright" style="margin-top: 20px;">
	&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>