<?php

/*
 * Post types creation class
 *
 */


class Post_types {

    private $labels;

    public function __construct() {
        $this->labels = array();
        $this->labels['clients'] = array( 'singular' => __( 'Client', 'kleo_framework' ), 'plural' => __( 'Clients', 'kleo_framework' ), 'menu' => __( 'Clients', 'kleo_framework' ) );
        $this->labels['testimonials'] = array( 'singular' => __( 'Testimonial', 'kleo_framework' ), 'plural' => __( 'Testimonials', 'kleo_framework' ), 'menu' => __( 'Testimonials', 'kleo_framework' ) );

        $portfolio_name = sq_option( 'portfolio_name', 'Portfolio' );
        $this->labels['portfolio'] = array( 'singular' => __( 'Portfolio item', 'kleo_framework' ), 'plural' => __( $portfolio_name, 'kleo_framework' ), 'menu' => __( 'Portfolio', 'kleo_framework' ) );

        add_action( 'init', array( &$this, 'setup_clients_post_type' ), 7 );
        add_action( 'init', array( &$this, 'setup_testimonials_post_type' ), 7 );
        add_action( 'init', array( &$this, 'setup_portfolio_post_type' ), 7 );
    }

    /**
     * Setup Clients post type
     * @since  1.0
     * @return void
     */
    public function setup_clients_post_type () {

        $args = array(
            'labels' => $this->get_labels( 'clients', $this->labels['clients']['singular'], $this->labels['clients']['plural'], $this->labels['clients']['menu'] ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => TRUE,
            'menu_icon' => 'dashicons-businessman',
            'query_var' => true,
            'rewrite' => array( 'slug' => esc_attr( apply_filters( 'kleo_clients_slug', 'clients' ) )),
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 20, // Below "Pages"
            'supports' => array( 'title', 'thumbnail' )
        );

        register_post_type( 'kleo_clients', $args );

        $tag_args = array(
            "label" 						=> _x('Client Tags', 'tag label', "kleo_framework"),
            "singular_label" 				=> _x('Client Tag', 'tag singular label', "kleo_framework"),
            'public'                        => true,
            'hierarchical'                  => false,
            'show_ui'                       => true,
            'show_in_nav_menus'             => false,
            'args'                          => array( 'orderby' => 'term_order' ),
            'query_var' => true
        );

        register_taxonomy( 'clients-tag', 'kleo_clients', $tag_args );

    } // End setup_clients_post_type()


    /**
     * Setup Testimonials post type
     * @since  1.0
     * @return void
     */
    public function setup_testimonials_post_type () {

        $args = array(
            'labels' => $this->get_labels( 'testimonials', $this->labels['testimonials']['singular'], $this->labels['testimonials']['plural'], $this->labels['testimonials']['menu'] ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => TRUE,
            'menu_icon' => 'dashicons-format-quote',
            'query_var' => true,
            'rewrite' => array( 'slug' => esc_attr( apply_filters( 'kleo_testimonials_slug', 'testimonials' ) )),
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 20, // Below "Pages"
            'supports' => array( 'title', 'editor', 'thumbnail' )
        );

        register_post_type( 'kleo-testimonials', $args );

        $tag_args = array(
            "label" 						=> _x('Testimonial Tags', 'tag label', "kleo_framework"),
            "singular_label" 				=> _x('Testimonial Tag', 'tag singular label', "kleo_framework"),
            'public'                        => true,
            'hierarchical'                  => false,
            'show_ui'                       => true,
            'show_in_nav_menus'             => false,
            'args'                          => array( 'orderby' => 'term_order' ),
            'query_var' => true
        );

        register_taxonomy( 'testimonials-tag', 'kleo-testimonials', $tag_args );
    } // End setup_testimonials_post_type()


    /**
     * Setup Portfolio post type
     * @since  1.5
     * @return void
     */
    public function setup_portfolio_post_type () {

        $has_archive = sq_option( 'portfolio_custom_archive', '0' ) == '1' ? FALSE : TRUE;

        /* Default WordPress post archive page */
        if ( $has_archive ) {
            $slug = sq_option( 'portfolio_slug', 'portfolio' );
            $slug = apply_filters( 'kleo_portfolio_slug', $slug );
        }
        /* Custom page for archive */
        else {
            $page_id = sq_option('portfolio_page');
            $page = get_post($page_id);
            $slug = $page->post_name;
        }

        $args = array(
            'labels' => $this->get_labels( 'portfolio', $this->labels['portfolio']['singular'], $this->labels['portfolio']['plural'], $this->labels['portfolio']['menu'] ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => TRUE,
            'menu_icon' => 'dashicons-format-image',
            'query_var' => true,
            'rewrite' => array(
                'slug' => esc_attr($slug),
                'feeds' => true,
                'with_front' => false
            ),
            'has_archive' => $has_archive,
            'hierarchical' => false,
            'menu_position' => 20, // Below "Pages"
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' )
        );

        register_post_type( 'portfolio', $args );

        register_taxonomy_for_object_type( 'post_tag', 'portfolio' );


        $args = array(
                "label" 						=> _x('Portfolio Categories', 'category label', "kleo_framework"),
                "singular_label" 				=> _x('Portfolio Category', 'category singular label', "kleo_framework"),
                'public'                        => true,
                'hierarchical'                  => true,
                'show_ui'                       => true,
                'show_in_nav_menus'             => false,
                'args'                          => array( 'orderby' => 'term_order' ),
                'rewrite' => array(
                    'slug'         => apply_filters( 'kleo_portfolio_cat_slug', 'portfolio-category' ),
                    'with_front'   => false,
                    'hierarchical' => true
                    ),
                'query_var' => true
        );

        register_taxonomy( 'portfolio-category', 'portfolio', $args );


    } // End setup_portfolio_post_type()


    /**
     * Create the labels to be used in post type creation
     * @since  1.0
     * @param  string $token    The post type for which to setup labels
     * @param  string $singular Label for singular post type
     * @param  string $plural   Label for plural post type
     * @param  string $menu     Menu item label
     * @return array            Labels array
     */
    private function get_labels ( $token, $singular, $plural, $menu ) {
        $labels = array(
            'name' => sprintf( _x( '%s', 'post type general name', 'kleo_framework' ), $plural ),
            'singular_name' => sprintf( _x( '%s', 'post type singular name', 'kleo_framework' ), $singular ),
            'add_new' => sprintf( _x( 'Add New %s', $token, 'kleo_framework' ), $singular ),
            'add_new_item' => sprintf( __( 'Add New %s', 'kleo_framework' ), $singular ),
            'edit_item' => sprintf( __( 'Edit %s', 'kleo_framework' ), $singular ),
            'new_item' => sprintf( __( 'New %s', 'kleo_framework' ), $singular ),
            'all_items' => sprintf( __( 'All %s', 'kleo_framework' ), $plural ),
            'view_item' => sprintf( __( 'View %s', 'kleo_framework' ), $singular ),
            'search_items' => sprintf( __( 'Search %s', 'kleo_framework' ), $plural ),
            'not_found' =>  sprintf( __( 'No %s found', 'kleo_framework' ), strtolower( $plural ) ),
            'not_found_in_trash' => sprintf( __( 'No %s found in Trash', 'kleo_framework' ), strtolower( $plural ) ),
            'parent_item_colon' => '',
            'menu_name' => sprintf( __( '%s', 'kleo_framework' ), $menu )
          );

        return $labels;
    } // End get_labels()

}

/**
 * Show other post types in tag archive page
 *
 * @param object $query
 * @return object
 */
if (! function_exists( 'kleo_archive_add_custom_types' ) ) {
    function kleo_archive_add_custom_types( $query )
    {
        if (is_tag() && empty($query->query_vars['suppress_filters'])) {
            /*$query->set( 'post_type', array('post', 'portfolio', 'product'));*/
            $query->set('post_type', 'any');
            return $query;
        }
    }
}
add_filter( 'pre_get_posts', 'kleo_archive_add_custom_types' );
