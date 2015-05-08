<?php
/**
 * @package WordPress
 * @subpackage KLEO
 * @author SeventhQueen <themesupport@seventhqueen.com>
 * @since 1.6
 */

  if ( bp_is_active('notifications') ) {
    require_once( KLEO_LIB_DIR . '/plugin-buddypress/menu-notifications.php' );
  }



/* BuddyPress Avatar in menu item */
add_filter('kleo_nav_menu_items', 'kleo_add_user_avatar_nav_item' );
function kleo_add_user_avatar_nav_item( $menu_items ) {
    $menu_items[] = array(
        'name' => __( 'My Account', 'kleo_framework' ),
        'slug' => 'user_avatar',
        'link' => '#',
    );

    return $menu_items;
}

add_filter('kleo_setup_nav_item_user_avatar' , 'kleo_setup_user_avatar_nav');
function kleo_setup_user_avatar_nav( $menu_item ) {

    add_filter( 'walker_nav_menu_start_el_user_avatar', 'kleo_menu_user_avatar', 10, 4 );
    add_filter( 'walker_nav_menu_start_el_li_user_avatar', 'kleo_menu_user_avatar_li', 10, 4 );

    return $menu_item;
}
if ( ! function_exists( 'kleo_menu_user_avatar' ) ) {
    /**
     * Render user avatar menu item
     *
     * @param string $item_output
     * @param  array $item
     * @param  integer $depth
     * @param  object $args
     * @return string
     */
    function kleo_menu_user_avatar( $item_output, $item, $depth, $args ) {

        $output = '';

        if ( is_user_logged_in() ) {

            $url = bp_loggedin_user_domain();

            $attr_title = strip_tags( $item->attr_title );

            $output .= '<a title="' . bp_get_loggedin_user_fullname() . '" class="kleo-bp-user-avatar' . ( $args->has_children && in_array($depth, array(0,1)) ? ' js-activated' : '' ) . '" href="' . $url . '" title="' . $attr_title .'">'
                .  '<img src="' . bp_get_loggedin_user_avatar(array('width' => 25, 'height' => 25, 'html' => false)) . '" class="kleo-rounded" alt="">' . ($item->attr_title != '' ? ' ' . $item->attr_title : '');

            $output .= ( $args->has_children && in_array($depth, array(0,1))) ? ' <span class="caret"></span></a>' : '</a>';

            return $output;
        } elseif ( $args->has_children && in_array( $depth, array( 0, 1 ) ) ) {
            return $item_output;
        } else {
            return '';
        }
    }
}

function kleo_menu_user_avatar_li( $item_output, $item, $depth, $args ) {
    $output = '';
    if ( is_user_logged_in() || ($args->has_children && in_array( $depth, array( 0, 1 ) )) ) {
        $output = $item_output;
    }
    return $output;
}



/* Fix for members search form placeholder */
add_filter( 'bp_directory_members_search_form', 'kleo_bp_fix_members_placeholder' );

function kleo_bp_fix_members_placeholder( $html ) {
    if ( isset($_GET['s']) && $_GET['s'] != '' ) {
        $html = str_replace('placeholder', 'value', $html);
    }

    return $html;
}