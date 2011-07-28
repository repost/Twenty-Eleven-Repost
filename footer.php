<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>

			
			
			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
                (C) 2011 REPOST &nbsp
				<a href="http://getrepost.com/home" title="Repost Home">HOME</a>&nbsp
				<a href="http://getrepost.com/getrepost" title="GetRepost">GET REPOST</a> &nbsp
				<a href="http://getrepost.com/legal" title="Repost legal">LEGAL</a>&nbsp
				<a href="http://getrepost.com/support" title="Repost support">SUPPORT</a>&nbsp
				<a href="http://getrepost.com/contact" title="Repost contact">CONTACT</a>
			</div>
			
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
