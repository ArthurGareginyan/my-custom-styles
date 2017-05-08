<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Tab
 *
 * @since 3.3
 */
?>
    <!-- SIDEBAR -->
    <div class="inner-sidebar">
        <div id="side-sortables" class="meta-box-sortabless ui-sortable">

            <div id="about" class="postbox">
                <h3 class="title"><?php _e( 'About', MCSTYLES_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'This plugin allows you to easily add your custom styles (CSS code) to your website.', MCSTYLES_TEXT ); ?></p>
                </div>
            </div>

            <div id="upgrade" class="postbox">
                <h3 class="title"><?php _e( 'Upgrade', MCSTYLES_TEXT ); ?></h3>
                <div class="inside">
                    <a href="https://www.arthurgareginyan.com/plugin-my-custom-styles-pro.html" target="_blank">
                        <img src="http://mycyberuniverse.com/public-files/sale/pro-version.png" alt="PRO">
                    </a>
                </div>
            </div>

            <div id="support" class="postbox">
                <h3 class="title"><?php _e( 'Support', MCSTYLES_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', MCSTYLES_TEXT ); ?></p>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', MCSTYLES_TEXT ); ?></a>
                    <p><?php _e( 'Thanks for your support!', MCSTYLES_TEXT ); ?></p>
                </div>
            </div>

            <div id="help" class="postbox">
                <h3 class="title"><?php _e( 'Help', MCSTYLES_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'Got something to say? Need help?', MCSTYLES_TEXT ); ?></p>
                    <p><a href="mailto:arthurgareginyan@gmail.com?subject=My Custom Styles">arthurgareginyan@gmail.com</a></p>
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
                        // Get options from the BD
                        $options = get_option( 'mcstyles_settings' );

                        // Declare variables
                        $content = isset( $options['mcstyles-content'] ) && !empty( $options['mcstyles-content'] ) ? $options['mcstyles-content'] : '/* Enter Your Custom Styles Here */';
                        $enable = isset( $options['enable'] ) && !empty( $options['enable'] ) && $options['enable'] == 'on' ? 'checked' : ' ';
                    ?>

                    <div class="postbox">
                        <h3 class="title">
                            <label for="mcstyles_settings[mcstyles-content]" ><?php _e( 'Styles (CSS code)', MCSTYLES_TEXT ); ?></label>
                            <div class="trigger">
                                <input type="checkbox" name="mcstyles_settings[enable]" id="mcstyles_settings[enable]" <?php echo $enable; ?> >
                                <label for="mcstyles_settings[enable]"></label>
                            </div>
                        </h3>
                        <div class="inside">
                            <textarea name="mcstyles_settings[mcstyles-content]" id="mcstyles_settings[mcstyles-content]" ><?php echo esc_attr( $content ); ?></textarea>
                        </div>
                    </div>

                    <?php submit_button( __( 'Save Changes', MCSTYLES_TEXT ), 'primary', 'submit', true ); ?>

                    <div id="support-addition" class="postbox">
                        <h3 class="title"><?php _e( 'Support', MCSTYLES_TEXT ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', MCSTYLES_TEXT ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', MCSTYLES_TEXT ); ?></a>
                            <p><?php _e( 'Thanks for your support!', MCSTYLES_TEXT ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- END-FORM -->
<?php
