<?php
/**
 * The sidebar containing the menu of the blog
 */
?>



<div class="sidebar col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<!-- logo -->
		<?php bfb_the_custom_logo() ?>

		<!-- register button -->
		<?php if ( has_nav_menu( 'formulaire' ) ) : ?>
				<ul class="sidebar-menu">
						<?php
								wp_nav_menu( array(
										'container' => '',
										'items_wrap' => '%3$s',
										'theme_location' => 'formulaire'
								) );
						?>
				</ul>
		<?php endif; ?>


		<?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
		<div class="sidebar-padder">

				<?php do_action( 'before_sidebar' ); ?>
				<?php if ( ! dynamic_sidebar( 'left_sidebar' ) ) : ?>
						<aside id="search" class="widget widget_search">
							<?php get_search_form(); ?>
						</aside>

						<aside id="archives" class="widget widget_archive">
								<h3 class="widget-title"><?php _e( 'Archives', 'bfb' ); ?></h3>
								<ul>
									<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
								</ul>
						</aside>

						<aside id="meta" class="widget widget_meta">
								<h3 class="widget-title"><?php _e( 'Meta', 'bfb' ); ?></h3>
								<ul>
									<?php wp_register(); ?>
									<li><?php wp_loginout(); ?></li>
									<?php wp_meta(); ?>
								</ul>
						</aside>

				<?php endif; ?>

		</div><!-- ./sidebar-padder -->
</div><!-- ./sidebar-padder -->
