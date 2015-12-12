<?php

/**
 * Prevent Direct Access
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 1.5
 */
function mcstyles_render_submenu_page() {

	// Variables
    $options = get_option( 'mcstyles_settings' );
    $content = isset( $options['mcstyles-content'] ) && ! empty( $options['mcstyles-content'] ) ? $options['mcstyles-content'] : '/* Enter Your Custom Styles Here */';

	// Settings update message
	if ( isset( $_GET['settings-updated'] ) ) :
		?>
			<div id="message" class="updated">
				<p>
					<?php _e( 'Your Custom Styles was sucessfully updated.', 'mcstyles' ); ?>
				</p>
			</div>
		<?php
	endif;

	// Page
	?>
    <div class="wrap">
        <h2>
            <?php _e( 'My Custom Styles', 'mcstyles' ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://mycyberuniverse.com/author.html" target="_blank">Arthur "Berserkr" Gareginyan</a>', 'mcstyles' ); ?>
            <span/>
        </h2>
		<form name="mcstyles-form" action="options.php" method="post" enctype="multipart/form-data">
			<?php settings_fields( 'mcstyles_settings_group' ); ?>

			<!-- SIDEBAR -->
			<div id="templateside">
				<p>
					<?php _e( 'This plugin allows you to easily add custom styles to your website.', 'mcstyles' ) ?>
				</p>
				<p>
					<?php _e( 'To use, enter your custom styles, then click "Update Custom Styles". It\'s that simple!', 'mcstyles' ) ?>
				</p>
				<?php submit_button( __( 'Update Custom Styles', 'mcstyles' ), 'primary', 'submit', true ); ?>
                <p class="donate">If you find it useful, consider making a donation:
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HQYRXGUG5RNUA" target="_blank" rel="nofollow">
                        <img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="Make a donation">
                    </a>
                </p>
			</div>
			<!-- END-SIDEBAR -->

			<!-- FORM -->
			<div id="container">
				<div>
					<textarea cols="70" rows="30" name="mcstyles_settings[mcstyles-content]" id="mcstyles_settings[mcstyles-content]" ><?php echo esc_attr( $content ); ?></textarea>
				</div>
            </div>
			<!-- END-FORM -->

		</form>
	   </div>
	<?php
}