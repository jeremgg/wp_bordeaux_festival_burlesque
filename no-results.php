<?php
/**
 * The template part for displaying a message that posts cannot be found
 */
?>

<section id="intro" class="intro-section no-results not-found">
		<div class="container">
				<div class="row">
						<header>
								<h1 class="page-title"><?php _e( 'Aucuns résultats', 'bfb' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
								<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
										<p><?php printf( __( 'Prêt pour publier votre 1er article ? <a href="%1$s">Get started here</a>.', 'bfb' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
								<?php elseif ( is_search() ) : ?>
										<p><?php _e( 'Désolé, la recherche n\'a donné aucun résultats. veuillez éssayer avec de nouveaux mots clés.', 'bfb' ); ?></p>
										<?php get_search_form(); ?>
								<?php else : ?>
										<p><?php _e( 'Il semble que nous ne puissions pas trouver ce que vous cherchez. Peut-être la recherche peut vous aider.', 'bfb' ); ?></p>
										<?php get_search_form(); ?>
								<?php endif; ?>
						</div><!-- .page-content -->
				</div>
		</div>

</section><!--/.intro-section  -->
