<?php
/**
 * Created by PhpStorm.
 * User: MinhMan.Tran
 * Date: 8/13/2016
 * Time: 9:03 AM
 */

function my_settings_enqueue($hook) {
    if ( 'toplevel_page_dickinsons-settings' != $hook ) {
        return;
    }

    wp_enqueue_style( 'my_settings_admin_codemirror_css', get_template_directory_uri() . '/css/codemirror.css', false, VERSION );
    wp_enqueue_style( 'my_settings_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, VERSION );

    wp_enqueue_script( 'my_settings_admin_codemirror_js', get_template_directory_uri() . '/js/codemirror.js', array(), VERSION, true );
    wp_enqueue_script( 'my_settings_admin_xml_js', get_template_directory_uri() . '/js/xml.js', array(), VERSION, true );
    wp_enqueue_script( 'my_settings_admin_js', get_template_directory_uri() . '/js/codestyle.js', array('my_settings_admin_codemirror_js', 'my_settings_admin_xml_js'), VERSION, true );

}
add_action( 'admin_enqueue_scripts', 'my_settings_enqueue' );

//================================================================================================

// create custom plugin settings menu
add_action('admin_menu', 'footer_create_menu');

function footer_create_menu() {

    //create new top-level menu
    add_menu_page('Translation', 'Translation', 'administrator', 'dickinsons-settings', 'dickinsons_settings_page' );

    //call register settings function
    add_action( 'admin_init', 'register_dickinsons_settings' );
}


function register_dickinsons_settings() {
    //register header settings
    register_setting( 'dickinsons-settings-header', 'slogan_en' );
    register_setting( 'dickinsons-settings-header', 'slogan_vi' );

    //register sidebar settings
    register_setting( 'dickinsons-settings-sidebar', 'our_products_en' );
    register_setting( 'dickinsons-settings-sidebar', 'our_products_vi' );

    //register subscribe settings
    register_setting( 'dickinsons-settings-subscribe', 'subscribe_en' );
    register_setting( 'dickinsons-settings-subscribe', 'subscribe_vi' );

    //register footer settings
    register_setting( 'dickinsons-settings-footer', 'connect_with_us_en' );
    register_setting( 'dickinsons-settings-footer', 'connect_with_us_vi' );

    register_setting( 'dickinsons-settings-footer', 'contact_en' );
    register_setting( 'dickinsons-settings-footer', 'contact_vi' );

    register_setting( 'dickinsons-settings-footer', 'copyright_en' );
    register_setting( 'dickinsons-settings-footer', 'copyright_vi' );

    register_setting( 'dickinsons-settings-footer', 'information_en' );
    register_setting( 'dickinsons-settings-footer', 'information_vi' );

    register_setting( 'dickinsons-settings-footer', 'our_blog_en' );
    register_setting( 'dickinsons-settings-footer', 'our_blog_vi' );

    register_setting( 'dickinsons-settings-footer', 'all_articles_en' );
    register_setting( 'dickinsons-settings-footer', 'all_articles_vi' );

    register_setting( 'dickinsons-settings-footer', 'all_articles_link_en' );
    register_setting( 'dickinsons-settings-footer', 'all_articles_link_vi' );

    //register other settings
    register_setting( 'dickinsons-settings-other', 'posted_on_en' );
    register_setting( 'dickinsons-settings-other', 'posted_on_vi' );

    register_setting( 'dickinsons-settings-other', 'posted_in_en' );
    register_setting( 'dickinsons-settings-other', 'posted_in_vi' );

    register_setting( 'dickinsons-settings-other', 'related_reads_en' );
    register_setting( 'dickinsons-settings-other', 'related_reads_vi' );
}

function dickinsons_settings_page() {
    ?>
    <div class="wrap">
        <h1>Options</h1>

        <hr>
        <h2>Header</h2>

        <form method="post" action="options.php">
            <?php settings_fields( 'dickinsons-settings-header' ); ?>
            <?php do_settings_sections( 'dickinsons-settings-header' ); ?>
            <table class="form-table my-settings">
                <colgroup>
                    <col width="12%"/>
                    <col width="44%"/>
                    <col width="44%"/>
                </colgroup>
                <thead>
                    <tr>
                        <th></th>
                        <th>English</th>
                        <th>Vietnamese</th>
                    </tr>
                </thead>
                <tbody>
                    <tr valign="top" class="slogan">
                        <th scope="row">Slogan</th>
                        <td>
                            <textarea id="slogan_en" name="slogan_en"><?php echo trim( get_option('slogan_en') ); ?></textarea>
                        </td>
                        <td>
                            <textarea id="slogan_vi" name="slogan_vi"><?php echo trim( get_option('slogan_vi') ); ?></textarea>
                        </td>
                    </tr>
                </tbody>
            </table>

            <?php submit_button(); ?>

        </form>

        <hr>
        <h2>Sidebar</h2>

        <form method="post" action="options.php">
            <?php settings_fields( 'dickinsons-settings-sidebar' ); ?>
            <?php do_settings_sections( 'dickinsons-settings-sidebar' ); ?>
            <table class="form-table my-settings">
                <colgroup>
                    <col width="12%"/>
                    <col width="44%"/>
                    <col width="44%"/>
                </colgroup>
                <thead>
                <tr>
                    <th></th>
                    <th>English</th>
                    <th>Vietnamese</th>
                </tr>
                </thead>
                <tbody>
                <tr valign="top" class="contacts">
                    <th scope="row">Our Products</th>
                    <td>
                        <textarea id="our_products_en" name="our_products_en"><?php echo trim( get_option('our_products_en') ); ?></textarea>
                    </td>
                    <td>
                        <textarea id="our_products_vi" name="our_products_vi"><?php echo trim( get_option('our_products_vi') ); ?></textarea>
                    </td>
                </tr>
                </tbody>
            </table>

            <?php submit_button(); ?>

        </form>

        <hr>
        <h2>Subscribe</h2>
        <form method="post" action="options.php">
            <?php settings_fields( 'dickinsons-settings-subscribe' ); ?>
            <?php do_settings_sections( 'dickinsons-settings-subscribe' ); ?>
            <table class="form-table my-settings">
                <colgroup>
                    <col width="12%"/>
                    <col width="44%"/>
                    <col width="44%"/>
                </colgroup>
                <thead>
                <tr>
                    <th></th>
                    <th>English</th>
                    <th>Vietnamese</th>
                </tr>
                </thead>
                <tbody>
                <tr valign="top" class="contacts">
                    <th scope="row">Subscribe</th>
                    <td>
                        <textarea id="subscribe_en" name="subscribe_en"><?php echo trim( get_option('subscribe_en') ); ?></textarea>
                    </td>
                    <td>
                        <textarea id="subscribe_vi" name="subscribe_vi"><?php echo trim( get_option('subscribe_vi') ); ?></textarea>
                    </td>
                </tr>
                </tbody>
            </table>

            <?php submit_button(); ?>

        </form>

        <hr>
        <h2>Footer</h2>

        <form method="post" action="options.php">
            <?php settings_fields( 'dickinsons-settings-footer' ); ?>
            <?php do_settings_sections( 'dickinsons-settings-footer' ); ?>
            <table class="form-table my-settings">
                <colgroup>
                    <col width="12%"/>
                    <col width="44%"/>
                    <col width="44%"/>
                </colgroup>
                <thead>
                <tr>
                    <th></th>
                    <th>English</th>
                    <th>Vietnamese</th>
                </tr>
                </thead>
                <tbody>
                <tr valign="top" class="contacts">
                    <th scope="row">Connect with Us</th>
                    <td>
                        <textarea id="connect_with_us_en" name="connect_with_us_en"><?php echo trim( get_option('connect_with_us_en') ); ?></textarea>
                    </td>
                    <td>
                        <textarea id="connect_with_us_vi" name="connect_with_us_vi"><?php echo trim( get_option('connect_with_us_vi') ); ?></textarea>
                    </td>
                </tr>
                <tr valign="top" class="contacts">
                    <th scope="row">Contact</th>
                    <td>
                        <textarea id="contact_en" name="contact_en"><?php echo trim( get_option('contact_en') ); ?></textarea>
                    </td>
                    <td>
                        <textarea id="contact_vi" name="contact_vi"><?php echo trim( get_option('contact_vi') ); ?></textarea>
                    </td>
                </tr>
                <tr valign="top" class="copyright">
                    <th scope="row">Copyright</th>
                    <td>
                        <textarea id="copyright_en" name="copyright_en"><?php echo trim( get_option('copyright_en') ); ?></textarea>
                    </td>
                    <td>
                        <textarea id="copyright_vi" name="copyright_vi"><?php echo trim( get_option('copyright_vi') ); ?></textarea>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Information</th>
                    <td>
                        <input type="text" name="information_en" value="<?php echo trim( get_option('information_en') ); ?>" />
                    </td>
                    <td>
                        <input type="text" name="information_vi" value="<?php echo trim( get_option('information_vi') ); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Our Blog</th>
                    <td>
                        <input type="text" name="our_blog_en" value="<?php echo trim( get_option('our_blog_en') ); ?>" />
                    </td>
                    <td>
                        <input type="text" name="our_blog_vi" value="<?php echo trim( get_option('our_blog_vi') ); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">All articles</th>
                    <td>
                        <input type="text" name="all_articles_en" value="<?php echo trim( get_option('all_articles_en') ); ?>" />
                    </td>
                    <td>
                        <input type="text" name="all_articles_vi" value="<?php echo trim( get_option('all_articles_vi') ); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">All articles link</th>
                    <td>
                        <input type="text" name="all_articles_link_en" value="<?php echo trim( get_option('all_articles_link_en') ); ?>" />
                    </td>
                    <td>
                        <input type="text" name="all_articles_link_vi" value="<?php echo trim( get_option('all_articles_link_vi') ); ?>" />
                    </td>
                </tr>
                </tbody>
            </table>

            <?php submit_button(); ?>

        </form>


        <hr>
        <h2>Other</h2>

        <form method="post" action="options.php">
            <?php settings_fields( 'dickinsons-settings-other' ); ?>
            <?php do_settings_sections( 'dickinsons-settings-other' ); ?>
            <table class="form-table my-settings">
                <colgroup>
                    <col width="12%"/>
                    <col width="44%"/>
                    <col width="44%"/>
                </colgroup>
                <thead>
                <tr>
                    <th></th>
                    <th>English</th>
                    <th>Vietnamese</th>
                </tr>
                </thead>
                <tbody>
                <tr valign="top">
                    <th scope="row">Posted on</th>
                    <td>
                        <input type="text" name="posted_on_en" value="<?php echo trim( get_option('posted_on_en') ); ?>" />
                    </td>
                    <td>
                        <input type="text" name="posted_on_vi" value="<?php echo trim( get_option('posted_on_vi') ); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Posted in</th>
                    <td>
                        <input type="text" name="posted_in_en" value="<?php echo trim( get_option('posted_in_en') ); ?>" />
                    </td>
                    <td>
                        <input type="text" name="posted_in_vi" value="<?php echo trim( get_option('posted_in_vi') ); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Related reads</th>
                    <td>
                        <input type="text" name="related_reads_en" value="<?php echo trim( get_option('related_reads_en') ); ?>" />
                    </td>
                    <td>
                        <input type="text" name="related_reads_vi" value="<?php echo trim( get_option('related_reads_vi') ); ?>" />
                    </td>
                </tr>
                </tbody>
            </table>

            <?php submit_button(); ?>

        </form>
    </div>
<?php } ?>