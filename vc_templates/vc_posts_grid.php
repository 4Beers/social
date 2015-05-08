<?php
global $kleo_config;

$grid_link = $grid_layout_mode = $title = $filter= '';
$posts = array();
extract(shortcode_atts(array(
    'title' => '',
    'columns' => 4,
    'el_class' => '',
    'orderby' => NULL,
    'order' => 'DESC',
    'loop' => '',
    'post_layout' => 'grid',
    'show_meta' => 'yes',
    'show_excerpt' => 'yes',
    'show_switcher' => 'no',
    'switcher_layouts' => array_values(array_flip($kleo_config['blog_layouts']))
), $atts));


if( empty( $loop ) ) return;
$this->getLoop( $loop );
$my_query = $this->query;
$args = $this->loop_args;

$el_class = $el_class != "" ? " ".$el_class : "";

// Alias for Grid to Masonry
if ( $post_layout == 'grid' ) {
    $post_layout = 'masonry';
}
$post_layout = apply_filters( 'kleo_blog_type', $post_layout, get_the_ID() );

if ( $show_meta == 'yes' ){
    $el_class .= ' with-meta';
} else {
    $el_class .= ' no-meta';
}

if ( $show_excerpt == 'no' ){
    $el_class .= ' no-excerpt';
}

$el_class .= " " . $post_layout . '-listing';

	query_posts($args);

	if ( have_posts() ) : ?>

        <?php if ($show_switcher  == 'yes' ) : ?>

            <?php
            $switcher_layouts = explode( ',',$switcher_layouts );
            kleo_view_switch( $switcher_layouts, $post_layout, get_the_ID() );
            ?>

        <?php endif; ?>

        <?php if ($post_layout == 'masonry') : ?>

            <div class="posts-listing responsive-cols kleo-masonry per-row-<?php echo $columns;?><?php echo $el_class;?>">

        <?php else: ?>

            <div class="posts-listing <?php echo $el_class;?>">

        <?php endif; ?>


        <?php
        while ( have_posts() ) : the_post();

            if ( $post_layout != 'standard' ) {
                get_template_part('page-parts/post-content-' . $post_layout);
            } else {
                get_template_part( 'content', get_post_format() );
            }

        endwhile;
        ?>

        </div> <!-- END post listing -->

<?php
endif;
// Reset Query
wp_reset_query();