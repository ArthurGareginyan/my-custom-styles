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
 * @since 3.2
 */
function mcstyles_render_submenu_page() {

    // After settings updated
    if ( isset( $_GET['settings-updated'] ) ) {

        // Successful message
        ?>
            <div id="message" class="updated">
                <p><?php _e( 'Custom styles updated successfully.', 'my-custom-styles' ); ?></p>
            </div>
        <?php
    }

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
                        <h3 class="title"><?php _e( 'About', 'my-custom-styles' ); ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin allows you to easily add your custom styles (CSS code) to your website.', 'my-custom-styles' ); ?></p>
                        </div>
                    </div>

                    <div id="using" class="postbox">
                        <h3 class="title"><?php _e( 'Using', 'my-custom-styles' ); ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'To use, enter your custom styles, then click "Save Changes". It\'s that simple!', 'my-custom-styles' ); ?></p>
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
                        <h3 class="title"><?php _e( 'Upgrade', 'my-custom-styles' ); ?></h3>
                        <div class="inside">
                            <a href="https://www.arthurgareginyan.com/plugin-my-custom-styles-pro.html" target="_blank">
                                <img src="<?php echo plugins_url('../img/pro-version.png', __FILE__); ?>" alt="PRO">
                            </a>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', 'my-custom-styles' ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', 'my-custom-styles' ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                <img src="<?php echo plugins_url('../img/btn_donateCC_LG.gif', __FILE__); ?>" alt="Make a donation">
                            </a>
                            <p><?php _e( 'Thanks for your support!', 'my-custom-styles' ); ?></p>
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
                                $content = isset( $options['mcstyles-content'] ) && !empty( $options['mcstyles-content'] ) ? $options['mcstyles-content'] : '/* Enter Your Custom Styles Here */';
                                $enable = isset( $options['enable'] ) && !empty( $options['enable'] ) && $options['enable'] == 'on' ? 'checked' : ' ';
                            ?>
                            <div class="postbox">
                                <h3 class="title">
                                    <label for="mcstyles_settings[mcstyles-content]" ><?php _e( 'Styles (CSS code)', 'my-custom-styles' ); ?></label>
                                    <div class="trigger">
                                        <input type="checkbox" name="mcstyles_settings[enable]" id="mcstyles_settings[enable]" <?php echo $enable; ?> >
                                        <label for="mcstyles_settings[enable]"></label>
                                    </div>
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