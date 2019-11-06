<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Airi
 */

?>
	</div><!-- #content -->

	<?php
		if ( !is_page_template( 'page-templates/template_page-builder.php') ) {
			echo 	'</div>';
			echo '</div>';
		}
	?>
<footer>
    <div class="container">
    	<div class="row">
        <div class="left_side col-md-3">
            <?php  dynamic_sidebar( 'Footer 1' );  ?>
        </div>

        <div class="center_side col-md-3">

            <?php dynamic_sidebar( 'Footer 2' );  ?>
        </div>

        <div class="right_side col-md-3">
            <?php dynamic_sidebar( 'Footer 3' );  ?>
        </div>

        <div class="right_side col-md-3">
            <?php dynamic_sidebar( 'Footer 4' );  ?>
        </div>
        </div>
</div>
</footer>
<div class="bottom-footer">
<div class="container">
<div class="col-md-12">
<p>Copyright © 2019 Growth Artists</p>
</div>
</div>
</div>
	<!--footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<?php do_action( 'airi_footer' ); ?>
			</div>
		</div>
	</footer-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>