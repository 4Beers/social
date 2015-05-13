<?php

/*
*
*	parceiros Items Functions
*	KLEO Framework
*
*/

/* parceiros ITEMS
================================================== */
if (!function_exists('kleo_parceiros_items')) {

    function kleo_parceiros_items( $display_type = 'default', $title_style = 'normal', $columns = 4, $item_count = NULL, $pagination = "no", $filter = 'yes', $excerpt = 'yes', $img_width = '', $img_height = '', $category = '', $exclude_categories = array() ) {

        /* OUTPUT VARIABLE
        ================================================== */
        $parceiros_items_output = "";
        $count = 0;

        /* CATEGORY SLUG
        ================================================== */
        if ($category == "All" || $category == "all") {
            $category = '';
        }
        $category_slug = str_replace('_', '-', $category);


        /* parceiros QUERY
        ================================================== */
        global $post, $wp_query;

        if ( get_query_var('paged') ) {
            $paged = get_query_var('paged');
        } elseif ( get_query_var('page') ) {
            $paged = get_query_var('page');
        } else {
            $paged = 1;
        }

        if ( $exclude_categories == '' ) {
            $exclude_categories = array();;
        }
        $parceiros_args = array(
            'post_type' => 'parceiros',
            'post_status' => 'publish',
            'paged' => $paged,
            apply_filters( 'kleo_parceiros_cat_slug', 'parceiros-category' ) => $category_slug,
            'posts_per_page' => $item_count,
            'tax_query' => array(
                    array(
                        'taxonomy' => apply_filters( 'kleo_parceiros_cat_slug', 'parceiros-category' ),
                        'field' => 'id',
                        'terms' => $exclude_categories,
                        'operator' => 'NOT IN'
                    )
                )
        );

        $parceiros_items = new WP_Query( $parceiros_args );


        /* Class config
        ================================================== */
        $classes = '';

        $classes .= ' ' . $display_type . '-style';

        if ( $display_type == 'overlay' ) {
            if ( $title_style == 'hover' ) {
                $classes .= ' anim-title';
            }
        }

        if ( $excerpt == 'no' ) {
            $classes .= ' hide-excerpt';
        }

        $classes .= ' per-row-' . $columns;

        /* IMAGE SIZE
         * Set global variables to be availabe in the parceiros template part
        ================================================== */
        if ( $img_width != "" && $img_height != '' ) {
            global $parceiros_img_width, $parceiros_img_height;
            $parceiros_img_width = $img_width;
            $parceiros_img_height = $img_height;
        }

        /* ITEMS OUTPUT
        ================================================== */

        if ( $filter == 'yes' ) {
            $parceiros_items_output = kleo_parceiros_filter( $category, $exclude_categories );
        }

        $parceiros_items_output .= '<ul class="parceiros-items responsive-cols kleo-masonry ' . $classes . '">'. "\n";

        while ( $parceiros_items->have_posts() ) : $parceiros_items->the_post();

            ob_start();
            get_template_part( 'page-parts/parceiros-masonry');
            $parceiros_items_output .= ob_get_clean();

            $count++;

        endwhile;

        wp_reset_postdata();

        $parceiros_items_output .= '</ul>'. "\n";


        /* PAGINATION OUTPUT
        ================================================== */
        if ($pagination == "yes") {
            $parceiros_items_output .= '<div class="pagination-wrap">';
            $parceiros_items_output .= kleo_pagination( $parceiros_items->max_num_pages, false);
            $parceiros_items_output .= '</div>';
        }


        /* FUNCTION OUTPUT
        ================================================== */
        return $parceiros_items_output;
    }
}


/* parceiros FILTER
================================================== */
if ( ! function_exists( 'kleo_parceiros_filter' ) ) {
    function kleo_parceiros_filter( $parent_category = "", $exclude_categories = array() ) {

        $filter_output = $tax_terms = "";

        if ( $parent_category == "" || $parent_category == "all" ) {
            $tax_terms = kleo_get_category_list( 'parceiros-category', 1 );
        } else {
            $tax_terms = kleo_get_category_list( 'parceiros-category', 1, $parent_category );
        }

        $filter_output .= '<div class="filter-wrap row clearfix">'. "\n";
        $filter_output .= '<ul class="parceiros-filter-tabs bar-styling filtering col-sm-12 clearfix">'. "\n";
        $filter_output .= '<li class="all selected"><a data-filter="*" href="#"><span class="item-name">'. __("All", "kleo_framework").'</span></a></li>'. "\n";
        foreach ($tax_terms as $tax_term) {
            $term = get_term_by('name', $tax_term, 'parceiros-category');
            if ( $term && ! in_array( $term->term_id, $exclude_categories ) ) {
                $filter_output .= '<li><a href="#" data-filter=".' . $term->slug . '"><span class="item-name">' . $term->name . '</span></a></li>'. "\n";
            }
        }
        $filter_output .= '</ul></div>'. "\n";

        return $filter_output;
    }
}

// Add parceiros meta box
add_filter('kleo_meta_boxes', 'kleo_parceiros_meta');

function kleo_parceiros_meta($meta_boxes) {
    $prefix = '_kleo_';
    $meta_boxes[] = array(
        'id'         => 'theme_parceiros',
        'title'      => 'parceiros settings',
        'pages'      => array( 'parceiros' ), // Post type
        'context'    => 'normal',
        'priority'   => 'default',
        'show_names' => true, // Show field names on the left
        'fields'     => array(
            array(
                'name' => 'Show media on single item page',
                'desc' => 'If you want to show image/gallery/video before the content on single parceiros page',
                'id'   => $prefix . 'parceiros_media_status',
                'type' => 'select',
                'options' => array(
                    array('value' => '', 'name' => 'Default'),
                    array('value' => '1', 'name' => 'Yes'),
                    array('value' => '0', 'name' => 'No')
                ),
                'value' => ''
            ),
            array(
                'name' => 'Media type',
                'desc' => '',
                'id'   => $prefix . 'media_type',
                'type' => 'select',
                'options' => array(
                    array('value' => '', 'name' => 'Featured Image'),
                    array('value' => 'slider', 'name' => 'Image Slider'),
                    array('value' => 'hosted_video', 'name' => 'Hosted Video'),
                    array('value' => 'video', 'name' => 'oEmbed Video'),

                ),
                'value' => ''
            ),
            array(
                'name' => 'Slider',
                'desc' => 'Used when you select the Gallery format. Upload an image or enter an URL.',
                'id'   => $prefix . 'slider',
                'type' => 'file_repeat',
                'allow' => 'url'
            ),
            array(
                'name' => 'Video oEmbed URL',
                'desc' => 'Used when you select Video format. Enter a Youtube, Vimeo, Soundcloud, etc URL. See supported services at <a target="_blank" href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.',
                'id'   => $prefix . 'embed',
                'type' => 'oembed',
            ),

            array(
                'name' => 'Video Self hosted(mp4)',
                'desc' => 'Used when you select Video format. Upload your MP4 video file. Setting a self hosted video will ignore Video oEmbed above.',
                'id'   => $prefix . 'video_mp4',
                'type' => 'file',
            ),
            array(
                'name' => 'Video Self hosted(ogv)',
                'desc' => 'Used when you select Video format. Upload your OGV video file.',
                'id'   => $prefix . 'video_ogv',
                'type' => 'file',
            ),
            array(
                'name' => 'Video Self hosted(webm)',
                'desc' => 'Used when you select Video format. Upload your WEBM video file.',
                'id'   => $prefix . 'video_webm',
                'type' => 'file',
            ),
            array(
                'name' => 'Video Self hosted Poster',
                'desc' => 'Used to show before the video loads',
                'id'   => $prefix . 'video_poster',
                'type' => 'file',
            ),
            array(
                'name' => 'Top bar status',
                'desc' => 'Enable/disable site top bar',
                'id'   => $prefix . 'topbar_status',
                'type' => 'select',
                'options' => array(
                    array('value' => '', 'name' => 'Default'),
                    array('value' => '1', 'name' => 'Visible'),
                    array('value' => '0', 'name' => 'Hidden')
                ),
                'value' => ''
            ),
            array(
                'name' => 'Hide Header',
                'desc' => 'Check to hide whole header area',
                'id'   => $prefix . 'hide_header',
                'type' => 'checkbox',
                'value' => '1'
            ),
            array(
                'name' => 'Hide Footer',
                'desc' => 'Check to hide whole footer area',
                'id'   => $prefix . 'hide_footer',
                'type' => 'checkbox',
                'value' => '1'
            ),
            array(
                'name' => 'Hide Socket area',
                'desc' => 'Check to hide the area after footer that contains copyright info.',
                'id'   => $prefix . 'hide_socket',
                'type' => 'checkbox',
                'value' => '1'
            ),
            array(
                'name' => 'Custom Logo',
                'desc' => 'Use a custom logo for this page only',
                'id'   => $prefix . 'logo',
                'type' => 'file',
            ),
            array(
                'name' => 'Custom Logo Retina',
                'desc' => 'Use a custom retina logo for this page only',
                'id'   => $prefix . 'logo_retina',
                'type' => 'file',
            ),
            array(
                'name' => 'Transparent Main menu',
                'desc' => 'Check to have Main menu background transparent.',
                'id'   => $prefix . 'transparent_menu',
                'type' => 'checkbox',
                'value' => '1'
            ),

            array(
                'name' => 'Hide the title',
                'desc' => 'Check to hide the title when displaying the post/page',
                'id'   => $prefix . 'title_checkbox',
                'type' => 'checkbox',
                'value' => '1'
            ),
            array(
                'name' => 'Breadcrumb',
                'desc' => '',
                'id'   => $prefix . 'hide_breadcrumb',
                'type' => 'select',
                'options' => array(
                    array('value' => '', 'name' => 'Default'),
                    array('value' => '0', 'name' => 'Visible'),
                    array('value' => '1', 'name' => 'Hidden')
                ),
                'value' => ''
            ),
            array(
                'name' => 'Hide information',
                'desc' => 'Check to hide contact info in title section',
                'id'   => $prefix . 'hide_info',
                'type' => 'checkbox',
                'value' => '1'
            )

        ),
    );
    return $meta_boxes;
}
