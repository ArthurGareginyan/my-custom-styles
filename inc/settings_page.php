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
 * @since 2.2
 */
function mcstyles_render_submenu_page() {

    // Settings update message
    if ( isset( $_GET['settings-updated'] ) ) :
        ?>
            <div id="message" class="updated">
                <p><?php _e( 'Custom styles updated successfully.', 'my-custom-styles' ); ?></p>
            </div>
        <?php
    endif;

	// Page
	?>
	<div class="wrap">
		<h2>
            <?php _e( 'My Custom Styles', 'my-custom-styles' ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur Gareginyan</a>', 'my-custom-styles' ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', 'my-custom-styles' ) ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin allows you to easily add custom styles to your website.', 'my-custom-styles' ) ?></p>
                        </div>
                    </div>

                    <div id="using" class="postbox">
                        <h3 class="title"><?php _e( 'Using', 'my-custom-styles' ) ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'To use, enter your custom styles, then click "Save Changes". It\'s that simple!', 'my-custom-styles' ) ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', 'my-custom-styles' ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'Got something to say? Need help?', 'my-custom-styles' ); ?></p>
                            <p><a href="mailto:arthurgareginyan@gmail.com?subject=My Custom Styles">arthurgareginyan@gmail.com</a></p>
                        </div>
                    </div>

                    <div id="upgrade" class="postbox">
                        <h3 class="title"><?php _e( 'Upgrade', 'my-custom-styles' ) ?></h3>
                        <div class="inside">
                            <img src="<?php echo plugins_url('images/my-custom-styles-pro.png', __FILE__); ?>">
                            <p><?php _e( 'Want more? Then try the PRO version. More features, more power. For only $29.', 'my-custom-styles' ) ?></p>
                            <a href="https://gum.co/xLby" target="_blank" rel="nofollow">
                                <img src="<?php echo plugins_url('images/buy-now-flashing.gif', __FILE__); ?>" alt="Buy" rel="nofollow">
                            </a>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', 'my-custom-styles' ) ?></h3>
                        <div class="inside">
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                <img src="<?php echo plugins_url('images/btn_donateCC_LG.gif', __FILE__); ?>" alt="Make a donation">
                            </a>
                            <p><?php _e( 'Thanks for your support!', 'my-custom-styles-pro' ); ?></p>
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
                                    <label for="mcstyles_settings[mcstyles-content]" ><?php _e( 'Styles', 'my-custom-styles' ) ?></label>
                                </h3>
                                <div class="inside">
                                    <textarea name="mcstyles_settings[mcstyles-content]" id="mcstyles_settings[mcstyles-content]" ><?php echo esc_attr( $content ); ?></textarea>
                                </div>
                            </div>

                            <?php submit_button( __( 'Save Changes', 'my-custom-styles' ), 'primary', 'submit', true ); ?>

                        </form>

                    </div>
                </div>
            </div>
            <!-- END-FORM -->

        </div>

	</div>
	<?php
}