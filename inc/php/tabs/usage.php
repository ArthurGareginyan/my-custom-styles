<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Usage Tab Content
 */
?>
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <div class="postbox">
                    <h3 class="title"><?php _e( 'Usage Instructions', $plugin['text'] ); ?></h3>
                    <div class="inside">
                        <p><?php _e( 'To add your custom CSS code to your website, simply follow these steps:', $plugin['text'] ); ?></p>
                        <ol class="custom-counter">
                            <li><?php _e( 'Go to the "Main" tab on this page.', $plugin['text'] ); ?></li>
                            <li>
                                <?php _e( 'Place your custom CSS code in the code editor field.', $plugin['text'] ); ?>
                                <br><br>
                                <p class="note">
                                    <b><?php _e( 'Note!', $plugin['text'] ); ?></b>
                                    <?php _e( 'Do not wrap your custom CSS code in HTML tags, such as <code>&lt;style&gt;</code>...<code>&lt;/style&gt;</code>.', $plugin['text'] ); ?>
                                </p>
                            </li>
                            <li><?php _e( 'Switch the toggle to the "ON" position.', $plugin['text'] ); ?></li>
                            <li><?php _e( 'Click the "Save changes" button.', $plugin['text'] ); ?></li>
                            <li><?php _e( 'Enjoy the result of applying your custom CSS code.', $plugin['text'] ); ?> <?php _e( 'It\'s that simple!', $plugin['text'] ); ?></li>
                        </ol>
                        <p class="note">
                            <?php
                                printf(
                                    __( 'If you want more options, then %s let us know %s and we will be happy to add them.', $plugin['text'] ),
                                    '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php
