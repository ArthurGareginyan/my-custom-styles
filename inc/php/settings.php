<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab
 *
 * @since 4.4.1
 */
?>
    <!-- SIDEBAR -->
    <div class="inner-sidebar">
        <div id="side-sortables" class="meta-box-sortabless ui-sortable">

            <div id="about" class="postbox">
                <h3 class="title"><?php _e( 'About', $text ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'This plugin allows you to easily add your custom styles (CSS code) directly out of your WordPress Admin area, without the need to have an external editor.', $text ); ?></p>
                </div>
            </div>

            <div id="upgrade" class="postbox">
                <h3 class="title"><?php _e( 'Upgrade', $text ); ?></h3>
                <div class="inside">
                    <a href="https://www.arthurgareginyan.com/plugin-my-custom-styles-pro.html" target="_blank">
                        <img src="https://mycyberuniverse.com/public-files/sale/pro-version.png" alt="PRO">
                    </a>
                </div>
            </div>

            <div id="support" class="postbox">
                <h3 class="title"><?php _e( 'Support', $text ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', $text ); ?></p>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', $text ); ?></a>
                    <p><?php _e( 'Thanks for your support!', $text ); ?></p>
                </div>
            </div>

            <div id="help" class="postbox">
                <h3 class="title"><?php _e( 'Help', $text ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'If you have a question, please read the information in the FAQ section.', $text ); ?></p>
                </div>
            </div>

        </div>
    </div>
    <!-- END-SIDEBAR -->

    <!-- FORM -->
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( MCSTYLES_SETTINGS . '_settings_group' ); ?>

                    <?php
                        // Get options from the database
                        $options = get_option( MCSTYLES_SETTINGS . '_settings' );

                        // Set default value if option is empty
                        $content = !empty( $options['mcstyles-content'] ) ? $options['mcstyles-content'] : '/* Enter your custom styles here */';
                        $enable = ( !empty( $options['enable'] ) && $options['enable'] == "on" ) ? 'checked' : ' ';
                    ?>

                    <div class="postbox">
                        <h3 class="title">
                            <label for="mcstyles_settings[mcstyles-content]" ><?php _e( 'Styles (CSS code)', $text ); ?></label>
                            <div class="trigger">
                                <input type="checkbox" name="mcstyles_settings[enable]" id="mcstyles_settings[enable]" <?php echo $enable; ?> >
                                <label for="mcstyles_settings[enable]"></label>
                            </div>
                        </h3>
                        <div class="inside">
                            <textarea name="mcstyles_settings[mcstyles-content]" id="mcstyles_settings[mcstyles-content]" ><?php echo esc_attr( $content ); ?></textarea>
                        </div>
                    </div>

                    <?php submit_button( __( 'Save changes', $text ), 'primary', 'submit', true ); ?>

                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', $text ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', $text ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', $text ); ?></a>
                            <p><?php _e( 'Thanks for your support!', $text ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- END-FORM -->
<?php
