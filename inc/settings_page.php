<?php

/**
 * Prevent Direct Access
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 1.2
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
            <h2 style="text-align:center; color:cornflowerblue;">
                <?php _e( 'My Custom Styles', 'mcstyles' ); ?>
                <br/>
                <span style="margin-top:1px; font-size:0.6em; color: black;">
                    <?php _e( 'by <a href="http://mycyberuniverse.com/author.html" target="_blank" style="display:inline; padding:0;">Arthur "Berserkr" Gareginyan</a>', 'mcstyles' ); ?>
                <span/>
            </h2>
		<form name="mcstyles-form" action="options.php" method="post" enctype="multipart/form-data">
			<?php settings_fields( 'mcstyles_settings_group' ); ?>
			<!-- SIDEBAR -->
			<div id="templateside" style="position:fixed; right:20px;">
				<?php do_action( 'mcstyles-sidebar-top' ); ?>
				<p style="margin-top: 0">
					<?php _e( 'This plugin allows you to easily add custom styles to your website.', 'mcstyles' ) ?>
				</p>
				<p>
					<?php _e( 'To use, enter your custom styles, then click "Update Custom Styles". It\'s that simple!', 'mcstyles' ) ?>
				</p>
				<?php submit_button( __( 'Update Custom Styles', 'mcstyles' ), 'primary', 'submit', true ); ?>
                <p style="margin-top:20px; border:1px solid rgb(184, 186, 184); border-radius:5px; padding:3px; text-align:center; background:rgb(234, 234, 234);">If you find it useful, consider making a donation:
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HQYRXGUG5RNUA" target="_blank" rel="nofollow">
                        <img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="Make a donation">
                    </a>
                </p>
				<?php do_action( 'mcstyles-sidebar-bottom' ); ?>
			</div>
			<!-- END-SIDEBAR -->
			<!-- FORM -->
			<div id="container" style="margin-right:210px;">
				<?php do_action( 'mcstyles-form-top' ); ?>
				<div>
					<textarea cols="70" rows="30" name="mcstyles_settings[mcstyles-content]" id="mcstyles_settings[mcstyles-content]" ><?php echo esc_attr( $content ); ?></textarea>
				</div>
				<?php do_action( 'mcstyles-textarea-bottom' ); ?>
				<?php do_action( 'mcstyles-form-bottom' ); ?>
            </div>
            <script type="text/javascript" language="javascript">
                var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('mcstyles_settings[mcstyles-content]'), {
                                            lineNumbers: true,
                                            matchBrackets: true,
                                            mode: 'text/css',
                                            indentUnit: 4
                                    });
			</script>
			<style>
				.CodeMirror {
					border: 1px solid cornflowerblue;
					height: auto;
				}
			</style>
			<!-- END-FORM -->
		</form>
	   </div>
	<?php
}