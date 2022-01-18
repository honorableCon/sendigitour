<?php
/**
 * Help Panel.
 *
 */
?>
<!-- Help file panel -->
<div id="help-panel" class="panel-left visible">
    <div class="panel-aside">
        <h4><?php esc_html_e( 'View Our TecZilla Demo', 'teczilla' ); ?></h4>
        <p><?php esc_html_e( 'Visit the demo to get more ideas about our theme design And Its Sections.', 'teczilla' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'https://www.avadantathemes.com/demo/teczilla-free/' ); ?>" title="<?php esc_attr_e( 'Visit the Demo', 'teczilla' ); ?>" target="_blank">
            <?php esc_html_e( 'View Demo', 'teczilla' ); ?>
        </a>
    </div><!-- .panel-aside -->
    <div class="panel-aside">
        <h4><?php esc_html_e( 'View Our Documentation Link', 'teczilla' ); ?></h4>
        <p><?php esc_html_e( 'New to the WordPress world? Our documentation has step by step procedure to create a beautiful website.', 'teczilla' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'https://www.avadantathemes.com/documentation/teczilla-free-theme/' ); ?>" title="<?php esc_attr_e( 'Visit the Documentation', 'teczilla' ); ?>" target="_blank">
            <?php esc_html_e( 'View Documentation', 'teczilla' ); ?>
        </a>
    </div><!-- .panel-aside -->

    <div class="panel-aside">
        <h4><?php esc_html_e( 'Support Ticket', 'teczilla' ); ?></h4>
        <p><?php printf( __( 'It\'s always a good idea to visit our %1$sKnowledge Base%2$s before you send us a support ticket.', 'teczilla' ), '<a href="'. esc_url( 'https://www.avadantathemes.com/documentation/' ) .'" target="_blank">', '</a>' ); ?></p>
        <p><?php esc_html_e( 'If the Knowledge Base didn\'t answer your queries, submit us a support ticket here. Our response time usually is less than a business day, except on the weekends.', 'teczilla' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'https://www.avadantathemes.com/contact/' ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'teczilla' ); ?>" target="_blank">
            <?php esc_html_e( 'Contact Support', 'teczilla' ); ?>
        </a>
    </div><!-- .panel-aside -->

  
</div>