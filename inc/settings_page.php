<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 2.0
 */
function mcstyles_render_submenu_page() {

    // Settings update message
    if ( isset( $_GET['settings-updated'] ) ) :
        ?>
            <div id="message" class="updated">
                <p><?php _e( 'Custom styles updated successfully.', 'mcstyles' ); ?></p>
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
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur "Berserkr" Gareginyan</a>', 'mcstyles' ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', 'mcstyles' ) ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin allows you to easily add custom styles to your website.', 'mcstyles' ) ?></p>
                        </div>
                    </div>

                    <div id="using" class="postbox">
                        <h3 class="title"><?php _e( 'Using', 'mcstyles' ) ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'To use, enter your custom styles, then click "Save Changes". It\'s that simple!', 'mcstyles' ) ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', 'mcstyles' ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'If you want more options then tell me and I will be happy to add it.', 'mcstyles' ); ?></p>
                            <p><a href="mailto:arthurgareginyan@gmail.com">arthurgareginyan@gmail.com</a></p>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', 'mcstyles' ) ?></h3>
                        <div class="inside">
                            <img src="<?php echo plugins_url('thanks.png', __FILE__); ?>">
                            <p><?php _e( 'If you like this plugin and find it useful, help me to make this plugin even better and keep it up-to-date.', 'mcstyles' ) ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                <img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="Make a donation">
                            </a>
                            <p><?php _e( 'Thanks for your support!', 'mcstyles' ) ?></p>
                        </div>
                    </div>

                    <div id="freelance" class="postbox">
                        <h3 class="title"><?php _e( 'Freelance', 'mcstyles' ) ?></h3>
                        <div class="inside">
                            <img src="<?php echo plugins_url('author.png', __FILE__); ?>">
                            <p><?php _e( 'Hello, my name is Arthur and I\'m a freelance web designer and developer.', 'mcstyles' ) ?></p>
                            <p><?php _e( 'Share your thoughts with me. You may have a brilliant idea in your mind and I can make it happen, so let’s get started!', 'mcstyles' ) ?></p>
                            <p><a href="http://www.arthurgareginyan.com/" target="_blank">www.arthurgareginyan.com</a></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END-SIDEBAR -->

            <!-- FORM -->
            <div class="has-sidebar sm-padded">
                <div id="post-body-content" class="has-sidebar-content">
                    <div class="meta-box-sortabless">

                        <form name="mcstyles-form" action="options.php" method="post" enctype="multipart/form-data">
                            <?php settings_fields( 'mcstyles_settings_group' ); ?>

                            <?php
                                // Declare variables
                                $options = get_option( 'mcstyles_settings' );
                                $content = isset( $options['mcstyles-content'] ) && ! empty( $options['mcstyles-content'] ) ? $options['mcstyles-content'] : '/* Enter Your Custom Styles Here */';
                            ?>
                            <div class="postbox">
                                <h3 class="title">
                                    <label for="mcstyles_settings[mcstyles-content]" ><?php _e( 'Styles', 'mcstyles' ) ?></label>
                                </h3>
                                <div class="inside">
                                    <textarea name="mcstyles_settings[mcstyles-content]" id="mcstyles_settings[mcstyles-content]" ><?php echo esc_attr( $content ); ?></textarea>
                                </div>
                            </div>

                            <?php submit_button( __( 'Save Changes', 'mcstyles' ), 'primary', 'submit', true ); ?>

                        </form>
                        <!-- END-FORM -->

                    </div>
                </div>
            </div>

        </div>

	</div>
	<?php
}