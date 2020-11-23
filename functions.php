<?php

// search Bootstrap CSS and determinate as main
function bootstrapstarter_enqueue_styles()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    $dependencies = array('bootstrap');
    wp_enqueue_style('bootstrapstarter-style', get_stylesheet_uri(), $dependencies);
}
add_action('wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles');

// search Bootstrap JS files
function bootstrapstarter_enqueue_scripts()
{
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', $dependencies, '4.5.3', true);
}
add_action('wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts');

// fontawesome
/* function fontawesome()
{
    $dependencies = array('fontawesome');
    wp_enqueue_script('fontawesome', get_template_directory_uri() . '/fontawesome/css/all.css', $dependencies);
}
add_action('wp_enqueue_scripts', 'fontawesome'); */

// Add Google Fonts
function startwordpress_google_fonts()
{
    wp_register_style('Lato', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');
    wp_enqueue_style('Lato');

    wp_register_style('Rubik', 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;0,700;1,500;1,700&display=swap');
    wp_enqueue_style('Rubik');
}
add_action('wp_print_styles', 'startwordpress_google_fonts');

// function to take care of the title tag for you
function bootstrapstarter_wp_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'bootstrapstarter_wp_setup');

// custom logo
function theme_prefix_setup()
{
    add_theme_support('custom-logo', array(
        'flex-width' => true,
    ));
}
add_action('after_setup_theme', 'theme_prefix_setup');

// adding menu
function bootstrapstarter_register_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'bootstrapstarter_register_menu');

// making Footer dynamic + creating Sidebar, all with Widgets
function bootstrapstarter_widgets_init()
{
    register_sidebar(array(
        'name'          => 'Footer - Copyright Text',
        'id'            => 'footer_copyright_text',
        'before_widget' => '<div class="footer_copyright_text">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => 'Sidebar - Inset',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => 'Sidebar - Default',
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'bootstrapstarter_widgets_init');

// ------------------------------------------------------------------------------------------------------------------------------------
// ____________________________________________________________________________________________________________________________________

// Test Next / Previous
function wpbeginner_numeric_posts_nav()
{
    if (is_singular())
        return;
    global $wp_query;
    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;
    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max   = intval($wp_query->max_num_pages);
    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;
    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<nav><ul class="pager">' . "\n";
    /** Previous Post Link */
    if (get_previous_posts_link())
        //printf('<li>%s</li>' . "\n", get_previous_posts_link('<i></i>'));
        /** Link to first page, plus ellipses if necessary */
        if (!in_array(1, $links)) {
            $class = 1 == $paged ? ' class="active"' : '';
            printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');
            if (!in_array(2, $links))
                echo '<li>…</li>';
        }
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }
    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }
    /** Next Post Link */
    if (get_next_posts_link())
        //printf('<li>%s</li>' . "\n", get_next_posts_link('<i></i>'));
        echo '</ul></nav>' . "\n";
}

// ------------------------------------------------------------------------------------------------------------------------------------
// ____________________________________________________________________________________________________________________________________

// Custom settings - Custom Fields - FOOTER
function custom_settings_add_menu()
{
    add_menu_page('Footer', 'Footer', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action('admin_menu', 'custom_settings_add_menu');

// Create Custom Global Settings
// Save button
function custom_settings_page()
{ ?>
<div class="wrap">
  <h1>Footer</h1>
  <form method="post" action="options.php">
    <?php
            settings_fields('section');
            do_settings_sections('theme-options');
            submit_button();
            ?>
  </form>
</div>
<?php }

/* _________________________ ADRESSE _________________________ */
// Nom
function setting_nom()
{ ?>
<input type="text" name="nom" id="nom" value="<?php echo get_option('nom'); ?>" />
<?php }

// Adresse
function setting_adresse()
{ ?>
<input type="text" name="adresse" id="adresse" value="<?php echo get_option('adresse'); ?>" />
<?php }

// Tel
function setting_tel()
{ ?>
<input type="text" name="tel" id="tel" value="<?php echo get_option('tel'); ?>" />
<?php }

// Mail
function setting_mail()
{ ?>
<input type="text" name="mail" id="mail" value="<?php echo get_option('mail'); ?>" />
<?php }
/* _________________________ NUMERO D'URGENCE _________________________ */
// Nom
function setting_titre_urgence()
{ ?>
<input type="text" name="titre_urgence" id="titre_urgence" value="<?php echo get_option('titre_urgence'); ?>" />
<?php }

// Adresse
function setting_tel_urgence()
{ ?>
<input type="text" name="tel_urgence" id="tel_urgence" value="<?php echo get_option('tel_urgence'); ?>" />
<?php }
/* _________________________ LIENS _________________________ */
// Nom
function setting_titre_liens()
{ ?>
<input type="text" name="titre_liens" id="titre_liens" value="<?php echo get_option('titre_liens'); ?>" />
<?php }

// Adresse
function setting_facebook()
{ ?>
<input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }
/* _________________________ SUBSIDES _________________________ */
// Nom
function setting_fwb()
{ ?>
<input type="text" name="fwb" id="fwb" value="<?php echo get_option('fwb'); ?>" />
<?php }

// Saving
function custom_settings_page_setup()
{
    add_settings_section('section', 'Les informations renseignées dans le bas de page', null, 'theme-options');

    add_settings_field('nom', 'Nom', 'setting_nom', 'theme-options', 'section');
    register_setting('section', 'nom');
    add_settings_field('adresse', 'Adresse', 'setting_adresse', 'theme-options', 'section');
    register_setting('section', 'adresse');
    add_settings_field('tel', 'Telephone', 'setting_tel', 'theme-options', 'section');
    register_setting('section', 'tel');
    add_settings_field('mail', 'Mail', 'setting_mail', 'theme-options', 'section');
    register_setting('section', 'mail');

    add_settings_field('titre_urgence', 'Titre pour le numero', 'setting_titre_urgence', 'theme-options', 'section');
    register_setting('section', 'titre_urgence');
    add_settings_field('tel_urgence', 'Numero de urgence', 'setting_tel_urgence', 'theme-options', 'section');
    register_setting('section', 'tel_urgence');


    add_settings_field('titre_liens', 'Titre pour les liens', 'setting_titre_liens', 'theme-options', 'section');
    register_setting('section', 'titre_liens');
    add_settings_field('facebook', 'Lien Facebook', 'setting_facebook', 'theme-options', 'section');
    register_setting('section', 'facebook');

    add_settings_field('fwb', 'Lien vers Federation Wallonie-Bruxelles', 'setting_fwb', 'theme-options', 'section');
    register_setting('section', 'fwb');
}
add_action('admin_init', 'custom_settings_page_setup');

// ------------------------------------------------------------------------------------------------------------------------------------
// ____________________________________________________________________________________________________________________________________

// Custom Post Type
function create_my_custom_post()
{
    register_post_type(
        'my-custom-post',
        array(
            'labels' => array(
                'name' => __('My Custom Post'),
                'singular_name' => __('My Custom Post'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            )
        )
    );
}
add_action('init', 'create_my_custom_post');

// ------------------------------------------------------------------------------------------------------------------------------------
// ____________________________________________________________________________________________________________________________________

// WordPress Tutorial: Custom Fields and Meta Boxes - Part 3

// Create a Custom Post
function create_post_your_post()
{
    register_post_type(
        'your_post',
        array(
            'labels'       => array(
                'name'       => __('Your Post'),
            ),
            'public'       => true,
            'hierarchical' => true,
            'has_archive'  => true,
            'supports'     => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
            ),
            'taxonomies'   => array(
                'post_tag',
                'category',
            )
        )
    );
    register_taxonomy_for_object_type('category', 'your_post');
    register_taxonomy_for_object_type('post_tag', 'your_post');
}
add_action('init', 'create_post_your_post');

// Create a Meta Box
// has to disactive ligne 1404 in wp-admin/includes/template.php
function add_your_fields_meta_box()
{
    add_meta_box(
        'your_fields_meta_box', // $id
        'Your Fields', // $title
        'show_your_fields_meta_box', // $callback
        'your_post', // $screen
        'normal', // $context
        'high' // $priority
    );
}
add_action('add_meta_boxes', 'add_your_fields_meta_box');

// Show Fields in the Database
function show_your_fields_meta_box()
{
    global $post;
    $meta = get_post_meta($post->ID, 'your_fields', true); ?>
<input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce(basename(__FILE__)); ?>">

<!-- All fields will go here -->

<?php
}

// Save Fields in the Database
function save_your_fields_meta($post_id)
{
    // verify nonce
    if (!wp_verify_nonce($_POST['your_meta_box_nonce'], basename(__FILE__))) {
        return $post_id;
    }
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    // check permissions
    if ('page' === $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }
    }

    $old = get_post_meta($post_id, 'your_fields', true);
    $new = $_POST['your_fields'];

    if ($new && $new !== $old) {
        update_post_meta($post_id, 'your_fields', $new);
    } elseif ('' === $new && $old) {
        delete_post_meta($post_id, 'your_fields', $old);
    }
}
add_action('save_post', 'save_your_fields_meta');

// Image Sizes
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

// ACF Google Map
function my_acf_google_map_api($api)
{
    $api['key'] = 'xxx';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');