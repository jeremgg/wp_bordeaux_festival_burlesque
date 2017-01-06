<?php
/**
 * The template for displaying the footer of the blog.
 *
 */
?>

<div class="credits section">
    <div class="credits-inner section-inner">
        <p class="fleft">
            &copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>" title="<?php esc_attr( bloginfo('name') ); ?>"><?php bloginfo('name'); ?></a>
        </p>

        <p class="fright">
            <a title="<?php _e('To the top', 'bfb'); ?>" href="#" class="tothetop"><?php _e('Up', 'bfb' ); ?> &uarr;</a>
        </p>

        <div class="clear"></div>
    </div> <!-- /credits-inner -->
</div> <!-- /credits -->
