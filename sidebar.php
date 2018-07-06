<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coretheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
	<div class="col-md-4 col-xs-12" >
		<aside id="secondary" class="widget-area">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside><!-- #secondary -->
	</div><!-- .col-md-4>-->
</div><!-- .row -->