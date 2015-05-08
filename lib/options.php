<?php

/**
	Options panel Config File
**/


/* ----------------------------------------------------------------
  DEFAULT Header Colors
-----------------------------------------------------------------*/

//Description
$style_defaults['header']['desc'] = "Style your Header section(Logo, menu) with color and background settings. This affects the Top bar section too";
//Text color
$style_defaults['header']['text'] = "#444444";
//Background color 
$style_defaults['header']['bg'] = "#ffffff";
//Link color
$style_defaults['header']['link'] = "#444444";
//Hover link color
$style_defaults['header']['link_hover'] = "#777777";
//Highlight color
$style_defaults['header']['high_color'] = "#ffffff";
//Highlight hover color
$style_defaults['header']['high_bg'] = "#00b9f7";
//Border color
$style_defaults['header']['border'] = "#e5e5e5";

//Alternate Background color
$style_defaults['header']['alt_bg'] = "#f7f7f7";
//Alternate Border color
$style_defaults['header']['alt_border'] = "#e5e5e5";



/* ----------------------------------------------------------------
    Main Colors
-----------------------------------------------------------------*/

//Description
$style_defaults['main']['desc'] = "Style your Main site section with color and background settings. This includes the sidebar too.";
//Text color
$style_defaults['main']['text'] = "#777777";
//Background color 
$style_defaults['main']['bg'] = "#ffffff";
//Link color
$style_defaults['main']['link'] = "#367bb7";
//Hover link color
$style_defaults['main']['link_hover'] = "#00b9f7";
//Highlight color
$style_defaults['main']['high_color'] = "#ffffff";
//Highlight hover color
$style_defaults['main']['high_bg'] = "#00b9f7";
//Border color
$style_defaults['main']['border'] = "#e5e5e5";

//Alternate Background color
$style_defaults['main']['alt_bg'] = "#f7f7f7";
//Alternate Border color
$style_defaults['main']['alt_border'] = "#e5e5e5";



/* ----------------------------------------------------------------
    Alternate Colors
-----------------------------------------------------------------*/

//Description
$style_defaults['alternate']['desc'] = "Style your Title / Breadcrumb / Extra information section with color and background settings.";
//Text color
$style_defaults['alternate']['text'] = "#777777";
//Background color 
$style_defaults['alternate']['bg'] = "#f7f7f7";
//Link color
$style_defaults['alternate']['link'] = "#367bb7";
//Hover link color
$style_defaults['alternate']['link_hover'] = "#00b9f7";
//Highlight color
$style_defaults['alternate']['high_color'] = "#ffffff";
//Highlight hover color
$style_defaults['alternate']['high_bg'] = "#00b9f7";
//Border color
$style_defaults['alternate']['border'] = "#e5e5e5";

//Alternate Background color
$style_defaults['alternate']['alt_bg'] = "#ffffff";
//Alternate Border color
$style_defaults['alternate']['alt_border'] = "#e5e5e5";


/* ----------------------------------------------------------------
    Side Menu Colors
-----------------------------------------------------------------*/

//Description
$style_defaults['side']['desc'] = "Style your Side menu section with color and background settings. This appears from left/right side of the site";
//Text color
$style_defaults['side']['text'] = "#777777";
//Background color
$style_defaults['side']['bg'] = "#1c1c1c";
//Link color
$style_defaults['side']['link'] = "#cccccc";
//Hover link color
$style_defaults['side']['link_hover'] = "#777777";
//Highlight color
$style_defaults['side']['high_color'] = "#ffffff";
//Highlight hover color
$style_defaults['side']['high_bg'] = "#00b9f7";
//Border color
$style_defaults['side']['border'] = "#333333";

//Alternate Background color
$style_defaults['side']['alt_bg'] = "#272727";
//Alternate Border color
$style_defaults['side']['alt_border'] = "#333333";


/* ----------------------------------------------------------------
    Footer Colors
-----------------------------------------------------------------*/

//Description
$style_defaults['footer']['desc'] = "Style your Footer section with color and background settings. This is the section with the four columns at the bottom of your site.";
//Text color
$style_defaults['footer']['text'] = "#777777";
//Background color 
$style_defaults['footer']['bg'] = "#1c1c1c";
//Link color
$style_defaults['footer']['link'] = "#cccccc";
//Hover link color
$style_defaults['footer']['link_hover'] = "#777777";
//Highlight color
$style_defaults['footer']['high_color'] = "#ffffff";
//Highlight hover color
$style_defaults['footer']['high_bg'] = "#00b9f7";
//Border color
$style_defaults['footer']['border'] = "#333333";

//Alternate Background color
$style_defaults['footer']['alt_bg'] = "#272727";
//Alternate Border color
$style_defaults['footer']['alt_border'] = "#333333";



/* ----------------------------------------------------------------
    Socket Colors
-----------------------------------------------------------------*/

//Description
$style_defaults['socket']['desc'] = "Style your Socket area with color and background settings. This is the last section of your site with the Credits information.";
//Text color
$style_defaults['socket']['text'] = "#515151";
//Background color 
$style_defaults['socket']['bg'] = "#171717";
//Link color
$style_defaults['socket']['link'] = "#515151";
//Hover link color
$style_defaults['socket']['link_hover'] = "#777777";
//Highlight color
$style_defaults['socket']['high_color'] = "#ffffff";
//Highlight hover color
$style_defaults['socket']['high_bg'] = "#00b9f7";
//Border color
$style_defaults['socket']['border'] = "#333333";

//Alternate Background color
$style_defaults['socket']['alt_bg'] = "#f7f7f7";
//Alternate Border color
$style_defaults['socket']['alt_border'] = "#272727";


global $kleo_config;
$style_sets = $kleo_config['style_sets'];

$style_elements = array(
    array('slug' => 'desc', 'desc' => 'ss', 'type' => 'info'),
    array('slug' => 'text', 'title' => 'Text color', 'subtitle' => '', 'type' => 'color'),
    array('slug' => 'bg', 'title' => 'Background color', 'subtitle' => '', 'type' => 'color'),
    array('slug' => 'bg_image', 'title' => 'Background image', 'subtitle' => '', 'type' => 'background', 'default' => array()),
    array('slug' => 'border', 'title' => 'Border color', 'subtitle' => '', 'type' => 'color', 'default' => ''),
    array('slug' => 'link', 'title' => 'Link color', 'subtitle' => 'Select your color for text elements', 'type' => 'color'),
    array('slug' => 'link_hover', 'title' => 'Hover link color', 'subtitle' => '', 'type' => 'color'),
    array('slug' => 'high_color', 'title' => 'Highlight color', 'subtitle' => '', 'type' => 'color'),
    array('slug' => 'high_bg', 'title' => 'Highlight background color', 'subtitle' => '', 'type' => 'color'),
    array('slug' => 'alt_bg', 'title' => 'Alternate background color', 'subtitle' => '', 'type' => 'color'),
    array('slug' => 'alt_border', 'title' => 'Alternate border color', 'subtitle' => '', 'type' => 'color')
);




$args = array();

// For use with a tab example below
$tabs = array();

// BEGIN Config

// Setting dev mode to true allows you to view the class settings/info in the panel.
// Default: true
$args['dev_mode'] = false;
// Set the icon for the dev mode tab.
// If $args['icon_type'] = 'image', this should be the path to the icon.
// If $args['icon_type'] = 'iconfont', this should be the icon name.
// Default: info-sign
//$args['dev_mode_icon'] = 'info-sign';

// Set the class for the dev mode tab icon.
// This is ignored unless $args['icon_type'] = 'iconfont'
// Default: null
$args['dev_mode_icon_class'] = 'icon-large';

// Set a custom option name. Don't forget to replace spaces with underscores!
$args['opt_name'] = "kleo_" . KLEO_DOMAIN;

// Setting system info to true allows you to view info useful for debugging.
// Default: false
$args['system_info'] = true;

$args['global_variable'] = false;
$args['compiler'] = false;
$args['output'] = false;
$args['customizer'] = false;
$args['disable_tracking'] = true;
$theme = wp_get_theme();

$args['display_name'] = $theme->get('Name');
//$args['database'] = "theme_mods_expanded";
$args['display_version'] = $theme->get('Version');

// If you want to use Google Webfonts, you MUST define the api key.
$args['google_api_key'] = 'AIzaSyAX_2L_UzCDPEnAHTG7zhESRVpMPS4ssII';


// Set the class for the import/export tab icon.
// This is ignored unless $args['icon_type'] = 'iconfont'
// Default: null
$args['import_icon_class'] = 'icon-large';

/**
 * Set default icon class for all sections and tabs
 * @since 3.0.9
 */
$args['default_icon_class'] = 'icon-large';


// Set a custom menu icon.
//$args['menu_icon'] = '';

// Set a custom title for the options page.
// Default: Options
$args['menu_title'] = __('Theme options', 'kleo_framework');

// Set a custom page title for the options page.
// Default: Options
$args['page_title'] = __('Theme options', 'kleo_framework');

// Set a custom page slug for options page (wp-admin/themes.php?page=***).
// Default: redux_options
$args['page_slug'] = 'kleo_options';

$args['default_show'] = true;
$args['default_mark'] = '*';

// Add HTML before the form.
$demo_link = admin_url( 'themes.php?page=kleo_import' );
$args['intro_text'] = sprintf( __('<p>Theme customisations are done here. Make sure to <a target="_blank" href="%s">Import Demo Content</a> first</p>', 'kleo_framework'), $demo_link );

// Set footer/credit line.
$args['footer_credit'] = ' ';


$sections = array();              

//Background Patterns Reader
$sample_patterns_path = THEME_DIR . '/assets/img/patterns/';
$sample_patterns_url  = THEME_URI. '/assets/img/patterns/';
$sample_patterns      = array();

if ( is_dir( $sample_patterns_path ) ) :
	
  if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) :
  	$sample_patterns = array();

    while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

      if( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false || stristr( $sample_patterns_file, '.gif' ) !== false  ) {
      	$name = explode(".", $sample_patterns_file);
      	$name = str_replace('.'.end($name), '', $sample_patterns_file);
      	$sample_patterns[] = array( 'alt'=>$name,'img' => $sample_patterns_url . $sample_patterns_file );
      }
    }
  endif;
endif;


$sections[] = array(
		'icon' => 'el-icon-home',
		'icon_class' => 'icon-large',
		'title' => __('General settings', 'kleo_framework'),
		'desc' => __('<p class="description">Here you will set your site-wide preferences.</p>', 'kleo_framework'),
		'fields' => array(
				
			array(
					'id' => 'maintenance_mode',
					'type' => 'switch',
					'title' => __('Enable maintenance mode.', 'kleo_framework'), 
					'subtitle' => __('Site visitors will see a banner with the message you set bellow.', 'kleo_framework'),
					'default' => '0' // 1 = checked | 0 = unchecked
			),
			array(
					'id' => 'maintenance_msg',
					'type' => 'textarea',
					'required' => array('maintenance_mode','equals','1'),	
					'title' => __('Message to show in maintenance mode', 'kleo_framework'), 
					'subtitle' => '',
					'desc' => '',
					'default' => 'We are currently in maintenance mode. Please check back later.'
			),				
				
			array(
					'id' => 'logo',
					'type' => 'media',
					'url'=> true,
					'readonly' => false,
					'title' => __('Logo', 'kleo_framework'), 
					'subtitle' => __('Upload your own logo.', 'kleo_framework'),
					'default' => ''
			),
			array(
					'id' => 'logo_retina',
					'type' => 'media',
					'url'=> true,
					'readonly' => false,
					'title' => __('Logo Retina', 'kleo_framework'), 
					'subtitle' => __('Upload retina logo. This is optional and should be double in size than normal logo.', 'kleo_framework'),
			),
			array(
					'id' => 'favicon',
					'type' => 'media',
					'url'=> true,
					'readonly' => false,
					'title' => __('Favicon', 'kleo_framework'), 
					'subtitle' => __('image that will be used as favicon (32px32px).', 'kleo_framework'),
					'default' => array('url'=> get_template_directory_uri().'/assets/ico/favicon.png')
			),
			array(
					'id' => 'apple57',
					'type' => 'media',
					'url'=> true,
					'readonly' => false,
					'title' => __('Apple Iphone Icon', 'kleo_framework'), 
					'subtitle' => __('Apple Iphone Icon (57px 57px).', 'kleo_framework'),
					'default' => array('url'=> get_template_directory_uri().'/assets/ico/apple-touch-icon-57-precomposed.png')
			),
			array(
					'id' => 'apple114',
					'type' => 'media',
					'url'=> true,
					'readonly' => false,
					'title' => __('Apple Iphone Retina Icon', 'kleo_framework'), 
					'subtitle' => __('Apple Iphone Retina Icon (114px 114px).', 'kleo_framework'),
					'default' => array('url'=> get_template_directory_uri().'/assets/ico/apple-touch-icon-114-precomposed.png')
			),     
			array(
					'id' => 'apple72',
					'type' => 'media',
					'url'=> true,
					'readonly' => false,
					'title' => __('Apple iPad Icon', 'kleo_framework'), 
					'subtitle' => __('Apple Iphone Retina Icon (72px 72px).', 'kleo_framework'),
					'default' => array('url'=> get_template_directory_uri().'/assets/ico/apple-touch-icon-72-precomposed.png')
			),    
			array(
					'id' => 'apple144',
					'type' => 'media',
					'url'=> true,
					'readonly' => false,
					'title' => __('Apple iPad Retina Icon', 'kleo_framework'), 
					'subtitle' => __('Apple iPad Retina Icon (144px 144px).', 'kleo_framework'),
					'default' => array('url'=> get_template_directory_uri().'/assets/ico/apple-touch-icon-144-precomposed.png')
			),

			array(
					'id' => 'analytics',
					'type' => 'textarea',
					'title' => __('JavaScript code', 'kleo_framework'), 
					'subtitle' => __('Paste your Google Analytics, other tracking code or any script you need.<br/> This will be loaded in the footer.', 'kleo_framework'),
					'desc' => ''
			),
			
			array(
					'id' => 'quick_css',
					'type' => 'textarea',
					'title' => __('Quick css', 'kleo_framework'), 
					'subtitle' => __('Place you custom css here', 'kleo_framework'),
					'desc' => ''
			),   
				
			array(
					'id' => 'socket_enable',
					'type' => 'switch',
					'title' => __('Enable socket text', 'kleo_framework'), 
					'subtitle' => __('Enable text under the footer widgets area', 'kleo_framework'),
					'default' => '1' // 1 = checked | 0 = unchecked
			),
				
			array(
				'id'=>'footer_text',
				'type' => 'editor',
				'required' => array('socket_enable','equals','1'),	
				'title' => __('Footer Text', 'kleo_framework'), 
				'subtitle' => __('You can use shortcodes in your footer text like: [site-url] [current-year]', 'kleo_framework'),
				'default' => '<p style="text-align: center;"><strong>&copy;[current-year] KLEO Template</strong> a premium and multipurpose theme from <a href="http://www.seventhqueen.com" target="_blank">Seven<sup>th</sup> Queen</a></p>',
				),

		)
);

$sections[] = array(
		'icon' => 'el-icon-website',
		'icon_class' => 'icon-large',
		 'title' => __('Layout settings', 'kleo_framework'),
		'desc' => __('<p class="description">Here you set options for the layout.</p>', 'kleo_framework'),   

		'fields' => array(

            array(
                    'id' => 'site_style',
                    'type' => 'button_set',
                    'title' => __('Site Layout', 'kleo_framework'),
                    'subtitle' => __('Select between wide or boxed site layout', 'kleo_framework'),
                    'options' => array(
                            'wide' => 'Wide', 'boxed' => 'Boxed'
                    ),
                    'default' => 'wide'
            ),
            array(
                'id' => 'boxed_size',
                'type' => 'select',
                'required' => array('site_style','equals','boxed'),
                'title' => __('Site Width', 'kleo_framework'),
                'subtitle' => 'Select the width for the site when using boxed version',
                'options' => array('1440' => '1440px', '1200' => '1200px', '1024' => '1024px'),
                'default' => '1440'
            ),

			//BOXED BACKGROUND
			array(
					'id'=>'body_bg',
					'type' => 'background', 
					'tiles' => true,
					'required' => array('site_style','equals','boxed'),	
					'title' => __('- Background', 'kleo_framework'),
					'subtitle'=> __('Select your boxed background', 'kleo_framework'),
					'default' => array('background-image' => get_template_directory_uri() . '/assets/img/bg-body.gif', 'background-repeat' => 'repeat' ),
					'preview' => false,
					'preview_media' => true
				),

            array(
                    'id' => 'global_sidebar',
                    'type' => 'image_select',
                    'compiler'=>true,
                    'title' => __('Main Layout', 'kleo_framework'),
                    'subtitle' => __('Select main content and sidebar alignment. Choose between 1, 2 or 3 column layout.', 'kleo_framework'),
                    'options' => array(
                            'no' => array('alt' => 'No sidebar', 'img' => ReduxFramework::$_url.'assets/img/1col.png'),
                            'left' => array('alt' => '2 Column Left', 'img' => ReduxFramework::$_url.'assets/img/2cl.png'),
                            'right' => array('alt' => '2 Column Right', 'img' => ReduxFramework::$_url.'assets/img/2cr.png'),
                            '3lr' => array('alt' => '3 Column Middle', 'img' => ReduxFramework::$_url.'assets/img/3cm.png'),
                            '3ll' => array('alt' => '3 Column Left', 'img' => ReduxFramework::$_url.'assets/img/3cl.png'),
                            '3rr' => array('alt' => '3 Column Right', 'img' => ReduxFramework::$_url.'assets/img/3cr.png')
                        ),
                    'default' => 'right'
            ),
				
				array(
					'id' => 'main_width_2cols',
					'type' => 'select',
					'title' => __('Main content width for one sidebar templates', 'kleo_framework'), 
					'subtitle' => 'Select the width for the main container used in templates with just one sidebar like "Right Sidebar"',
					'options' => array('6' => '50%', '7' => '58.3%', '8' => '67%',  '9' => '75%'),
					'default' => '9'
				),
				array(
					'id' => 'main_width_3cols',
					'type' => 'select',
					'title' => __('Main content width for two sidebars templates', 'kleo_framework'), 
					'subtitle' => 'Select the width for the main container used in templates with two sidebars like "Two left sidebars"',
					'options' => array('4' => '33%', '6' => '50%', '8' => '67%'),
					'default' => '6'
				),
				
				array(
						'id' => 'go_top',
						'type' => 'switch',
						'title' => __('Enable Go Up button', 'kleo_framework'), 
						'subtitle' => __('Enable or disable the button in the right down corner that takes you to the top of the screen.', 'kleo_framework'),
						'default' => '1' // 1 = checked | 0 = unchecked
				),

			 array(
						'id' => 'title_location',
						'type' => 'button_set',
						'compiler'=>true,
						'title' => __('Page Title location', 'kleo_framework'),
						'subtitle' => __('Choose where to show page title. In the breadcrumb section or in the main content', 'kleo_framework'),
						'options' => array('breadcrumb' => 'Breadcrumb section', 'main' => 'Main section'),
						'default' => 'breadcrumb'
				),

				array(
						'id' => 'contact_form',
						'type' => 'switch',
						'title' => __('Enable Contact form', 'kleo_framework'), 
						'subtitle' => __('Enable or disable the contact form bottom screen', 'kleo_framework'),
						'default' => '1' // 1 = checked | 0 = unchecked
				),
			array(
				'id' => 'contact_form_to',
				'type' => 'text',
				'required' => array('contact_form','equals','1'),
				'title' => __('TO email', 'kleo_framework'),
				'subtitle' => __('Enter a valid email address where the emails are sent to', 'kleo_framework'),
				'desc' => '',
				'default' => ''
				),
				
			array(
				'id' => 'contact_form_title',
				'type' => 'text',
				'required' => array('contact_form','equals','1'),
				'title' => __('Contact form title', 'kleo_framework'),
				'sub_desc' => "",
				'desc' => '',
				'default' => 'CONTACT US'
				),
			array(
				'id' => 'contact_form_text',
				'type' => 'textarea',
				'required' => array('contact_form','equals','1'),
				'title' => __('Contact form text', 'kleo_framework'),
				'sub_desc' => "",
				'desc' => '',
				'default' => "We're not around right now. But you can send us an email and we'll get back to you, asap."
				),
				
		)

);


/* Get post types for Search scope */
$scope_atts = array();
$scope_atts['extra'] = array();
if ( function_exists( 'bp_is_active' ) ) {
    $scope_atts['extra']['members'] =  'Members';
    $scope_atts['extra']['groups'] =  'Groups';
}
$scope_atts['extra']['post'] = 'Posts';
$scope_atts['extra']['page'] = 'Pages';
$scope_atts['exclude'] = array('kleo_clients', 'kleo-testimonials', 'topic', 'reply');

$sections[] = array(
		'icon' => 'el-icon-lines',
		'icon_class' => 'icon-large',
		'title' => __('Header options', 'kleo_framework'),
		'desc' => __('<p class="description">Customize header appearance</p>', 'kleo_framework'),
		'fields' => array(
            array(
                'id' => 'header_layout',
                'type' => 'image_select',
                'title' => __('Header Layout', 'kleo_framework'),
                'subtitle' => __('Select how you want your header format', 'kleo_framework'),
                'options' => array(
                    'normal' => array('alt' => 'Normal header', 'img' => KLEO_FW_URI . '/assets/img/normal-logo.png'),
                    'right_logo' => array('alt' => 'Right logo', 'img' => KLEO_FW_URI . '/assets/img/right-logo.png'),
                    'center_logo' => array('alt' => 'Center logo', 'img' => KLEO_FW_URI . '/assets/img/center-logo.png'),
                    'left_logo' => array('alt' => 'Left logo and menu', 'img' => KLEO_FW_URI . '/assets/img/left-logo.png'),
                ),
                'default' => 'normal'
            ),
            array(
                'id'=>'header_banner',
                'type' => 'editor',
                'required' => array('header_layout','equals','left_logo'),
                'title' => __('Header Banner content', 'kleo_framework'),
                'subtitle' => 'You can add content to the banner section in the menu. It can include shortcodes as well.<br> Examples: <br>- show main sidebar: [vc_widget_sidebar sidebar_id="sidebar-1"]',
                'default' => 'Banner text/AD here',
            ),
            array(
                'id' => 'menu_size',
                'type' => 'text',
                'title' => __('Main Menu Font size', 'kleo_framework'),
                'subtitle' => __('Font size in pixels. Default: 12', 'kleo_framework'),
                'default' => ''
            ),
            array(
                'id' => 'menu_height',
                'type' => 'text',
                'title' => __('Main Menu Height', 'kleo_framework'),
                'subtitle' => __('Set your header height expressed in pixels. Example: 88', 'kleo_framework'),
                'default' => '88'
            ),
            array(
                    'id' => 'show_top_bar',
                    'type' => 'switch',
                    'title' => __('Display top bar', 'kleo_framework'),
                    'subtitle' => __('Enable or disable the top bar.<br> See Social icons tab to enable the social icons inside it.<br> Set a Top menu from  Appearance - Menus ', 'kleo_framework'),
                    'default' => '1' // 1 = checked | 0 = unchecked
            ),
            array(
                    'id' => 'show_lang',
                    'type' => 'switch',
                    'title' => __('Show language switch', 'kleo_framework'),
                    'subtitle' => __('Works only when WPML plugin is enabled.', 'kleo_framework'),
                    'default' => '1' // 1 = checked | 0 = unchecked
            ),
				array(
						'id' => 'sticky_menu',
						'type' => 'switch',
						'title' => __('Sticky Top menu', 'kleo_framework'), 
						'subtitle' => __('Enable or disable the sticky menu.', 'kleo_framework'),
						'default' => '1' // 1 = checked | 0 = unchecked
				),
				array(
						'id' => 'resize_logo',
						'type' => 'switch',
						'required' => array('sticky_menu','equals','1'),
						'title' => __('Resize logo on scroll', 'kleo_framework'), 
						'subtitle' => __('Enable or disable logo resizing when scrolling down the page', 'kleo_framework'),
						'default' => '1' // 1 = checked | 0 = unchecked
				),
				array(
						'id' => 'transparent_logo',
						'type' => 'switch',
						'required' => array('sticky_menu','equals','1'),
						'title' => __('Transparent Main Menu', 'kleo_framework'),
						'subtitle' => __('Enable or disable main menu background transparency', 'kleo_framework'),
						'default' => '0' // 1 = checked | 0 = unchecked
				),
            array(
                    'id' => 'ajax_search',
                    'type' => 'button_set',
                    'title' => __('Ajax Search in menu', 'kleo_framework'),
                    'options' => array( '0' => 'OFF', '1' => 'ON', 'logged_in' => 'For logged users' ),
                    'subtitle' => __('Enable or disable the button for search.', 'kleo_framework'),
                    'default' => '1' // 1 = checked | 0 = unchecked
            ),
            array(
                'id' => 'search_context',
                'type' => 'select',
                'multi' => true,
                'required' => array('ajax_search','equals','1'),
                'title' => __('Search context', 'kleo_framework'),
                'subtitle' => 'Leave unchecked to search in all content, otherwise check the content you want to appear in the search',
                'options' => kleo_post_types( $scope_atts ),
                'default' => ''
            ),

            array(
                'id' => 'section-title-breadcrumb',
                'type' => 'section',
                'title' => __( 'Title/Breadcrumb Section', 'kleo_framework' ),
                'subtitle' => __( 'Settings for the title/breadcrumb section that comes just after the menu.<br>To <strong>Style this section</strong> go to Styling options - Alternate', 'kleo_framework' ),
                'indent' => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id' => 'breadcrumb_status',
                'type' => 'switch',
                'title' => __('Show breadcrumb', 'kleo_framework'),
                'subtitle' => __('Enable or disable the site path under the page title.', 'kleo_framework'),
                'default' => '1' // 1 = checked | 0 = unchecked
            ),
            array(
                'id' => 'title_info',
                'type' => 'textarea',
                'title' => __('Main menu info', 'kleo_framework'),
                'sub_desc' => __('This text displays next to the main menu. To disable it just delete the whole text.', 'kleo_framework'),
                'desc' => '',
                'default' => '<em class="muted">feel free to call us</em> &nbsp;&nbsp;<i class="icon-phone"></i> +91.33.26789234 &nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-mail-alt"></i> youremail@yourdomain.com'
            ),
            array(
                'id' => 'title_layout',
                'type' => 'image_select',
                'title' => __('Title/Breadcrumb layout', 'kleo_framework'),
                'subtitle' => __('Select the appearance for the title and breadcrumb section', 'kleo_framework'),
                'options' => array(
                    'normal' => array('alt' => 'Normal', 'img' => KLEO_FW_URI . '/assets/img/normal-title.png'),
                    'right_breadcrumb' => array('alt' => 'Right Breadcrumb', 'img' => KLEO_FW_URI . '/assets/img/right-breadcrumb.png'),
                    'center' => array('alt' => 'Centered', 'img' => KLEO_FW_URI . '/assets/img/center-title.png'),
                ),
                'default' => 'normal'
            ),
            
            array(
                'id' => 'title_padding',
                'type' => 'spacing',
                'output' => array( '.main-title' ),
                // An array of CSS selectors to apply this font style to
                'mode' => 'padding',
                // absolute, padding, margin, defaults to padding
                //'all' => true,
                // Have one field that applies to all
                //'top' => false, // Disable the top
                'right' => false, // Disable the right
                //'bottom' => false, // Disable the bottom
                'left' => false, // Disable the left
                'units' => 'px', // You can specify a unit value. Possible: px, em, %
                //'units_extended'=> 'true', // Allow users to select any type of unit
                'display_units' => 'true', // Set to false to hide the units if the units are specified
                'title' => __( 'Padding', 'kleo_framework' ),
                'subtitle' => __( 'Set a top/bottom padding for the title section', 'kleo_framework' ),
                'desc' => __( 'Defined in px. Enter values without px', 'kleo_framework' ),
                'default' => array(
                    'padding-top' => '10px',
                    'padding-bottom' => '10px'
                )
            ),

            array(
                'id' => 'section-title-breadcrumb-end',
                'type' => 'section',
                'indent' => false, // Indent all options below until the next 'section' option is set.
            ),



						
		)
);

$sections[] = array(
    'icon' => 'el-icon-chevron-right',
    'icon_class' => 'icon-large',
    'title' => __('Side Menu', 'kleo_framework'),
    'desc' => __('<p class="description">Here you can enable side menu.</p>', 'kleo_framework'),
    //'subsection' => true,
    'fields' => array(
        array(
            'id' => 'side_menu',
            'type' => 'switch',
            'title' => __('Enable side menu on your site', 'kleo_framework'),
            'subtitle' => __('This will load the side menu functionality', 'kleo_framework'),
            'description' => 'Make sure to assign a menu from Appearance - Menus - Manage Locations',
            'default' => '0' // 1 = checked | 0 = unchecked
        ),
        array(
            'id' => 'side_menu_button',
            'type' => 'switch',
            'required' => array('side_menu','equals','1'),
            'title' => __('Add toggle button on your main menu', 'kleo_framework'),
            'subtitle' => __('It will appear at the end of your primary menu', 'kleo_framework'),
            'description' => 'Another way to toggle it is by adding this class to any element on the page: open-sidebar<br> You can even <strong>add this class to a menu item</strong> by putting in the Title Attribute input: class=open-sidebar ',
            'default' => '1' // 1 = checked | 0 = unchecked
        ),
        array(
            'id' => 'side_menu_mobile',
            'type' => 'switch',
            'required' => array('side_menu','equals','1'),
            'title' => __('Replace the default Mobile Menu with the Side Menu', 'kleo_framework'),
            'subtitle' => __('When you click the menu icon on mobile, the side menu will open instead of the normal menu', 'kleo_framework'),
            'default' => '0' // 1 = checked | 0 = unchecked
        ),
        array(
            'id' => 'side_menu_position',
            'type' => 'select',
            'required' => array('side_menu','equals','1'),
            'title' => __('Side menu position', 'kleo_framework'),
            'subtitle' => __('Where the side menu will appear', 'kleo_framework'),
            'options' => array('left' => 'Left', 'right' => 'Right'),
            'default' => 'left'
        ),
        array(
            'id' => 'side_menu_type',
            'type' => 'select',
            'required' => array('side_menu','equals','1'),
            'title' => __('Side menu type', 'kleo_framework'),
            'subtitle' => __('Type of side menu appearance', 'kleo_framework'),
            'options' => array('default' => 'Default', 'overlay' => 'Overlay'),
            'default' => 'default'
        ),
        array(
            'id'=>'side_menu_before',
            'type' => 'editor',
            'required' => array('side_menu','equals','1'),
            'title' => __('Before Menu text', 'kleo_framework'),
            'subtitle' => 'You can add a text to show before the menu. It can include shortcodes as well.<br> Examples: <br>- show main sidebar: [vc_widget_sidebar sidebar_id="sidebar-1"]<br> - show social icons: [kleo_social_icons]',
            'default' => '',
        ),
        array(
            'id'=>'side_menu_after',
            'type' => 'editor',
            'required' => array('side_menu','equals','1'),
            'title' => __('After Menu text', 'kleo_framework'),
            'subtitle' => 'You can add a text to show after the menu. It can include shortcodes as well.<br> Examples: <br>- show main sidebar: [vc_widget_sidebar sidebar_id="sidebar-1"]<br> - show social icons: [kleo_social_icons]',
            'default' => '[kleo_social_icons]',
        ),

    )
);

$sections[] = array(
		'icon' => 'el-icon-pencil-alt',
		'icon_class' => 'icon-large',
		'title' => __('Blog', 'kleo_framework'),
		'desc' => __('<p class="description">Settings related to blog</p>', 'kleo_framework'),
		'fields' => array(
				
			 array(
                'id' => 'blog_layout',
                'type' => 'image_select',
                'title' => __('Blog Page Layout', 'kleo_framework'),
                'subtitle' => __('Select your blog layout. Choose between 1, 2 or 3 column layout.', 'kleo_framework'),
                'options' => array(
                        'no' => array('alt' => 'No sidebar', 'img' => ReduxFramework::$_url.'assets/img/1col.png'),
                        'left' => array('alt' => '2 Column Left', 'img' => ReduxFramework::$_url.'assets/img/2cl.png'),
                        'right' => array('alt' => '2 Column Right', 'img' => ReduxFramework::$_url.'assets/img/2cr.png'),
                        '3lr' => array('alt' => '3 Column Middle', 'img' => ReduxFramework::$_url.'assets/img/3cm.png'),
                        '3ll' => array('alt' => '3 Column Left', 'img' => ReduxFramework::$_url.'assets/img/3cl.png'),
                        '3rr' => array('alt' => '3 Column Right', 'img' => ReduxFramework::$_url.'assets/img/3cr.png')
                    ),
                'default' => 'right'
				),
			 array(
                'id' => 'cat_layout',
                'type' => 'image_select',
                'title' => __('Categories/Archives Layout', 'kleo_framework'),
                'subtitle' => __('Select your blog categories layout. Choose between 1, 2 or 3 column layout.', 'kleo_framework'),
                'options' => array(
                        'no' => array('alt' => 'No sidebar', 'img' => ReduxFramework::$_url.'assets/img/1col.png'),
                        'left' => array('alt' => '2 Column Left', 'img' => ReduxFramework::$_url.'assets/img/2cl.png'),
                        'right' => array('alt' => '2 Column Right', 'img' => ReduxFramework::$_url.'assets/img/2cr.png'),
                        '3lr' => array('alt' => '3 Column Middle', 'img' => ReduxFramework::$_url.'assets/img/3cm.png'),
                        '3ll' => array('alt' => '3 Column Left', 'img' => ReduxFramework::$_url.'assets/img/3cl.png'),
                        '3rr' => array('alt' => '3 Column Right', 'img' => ReduxFramework::$_url.'assets/img/3cr.png')
                    ),
                'default' => 'right'
				),
            array(
                'id' => 'blog_post_layout',
                'type' => 'select',
                'compiler'=>true,
                'title' => __('Single Post page Layout', 'kleo_framework'),
                'subtitle' => __('Select your Blog post page layout. Choose between 1, 2 or 3 column layout.', 'kleo_framework'),
                'options' => array(
                    'default' => 'Default as in Layout Settings',
                    'no' => 'Full width',
                    'left' => 'Left Sidebar',
                    'right' => 'Right Sidebar',
                    '3lr' => '3 Column, Left and Right Sidebars',
                    '3ll' => '3 Column, 2 Left sidebars',
                    '3rr' => '3 Column, 2 Right sidebars'
                ),
                'default' => 'default'
            ),
				
			array(
				'id' => 'blog_type',
				'type' => 'select',
				'title' => __('Display type', 'kleo_framework'), 
				'subtitle' => __('How your blog posts will display', 'kleo_framework'),
				'options' => $kleo_config['blog_layouts'],
				'default' => 'masonry'
			),
            array(
                'id' => 'blog_columns',
                'type' => 'select',
                'required' => array('blog_type','equals','masonry'),
                'title' => __('Posts per row', 'kleo_framework'),
                'subtitle' => __('How many columns to have in the grid', 'kleo_framework'),
                'options' => array( '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6' ),
                'default' => '3'
            ),
            array(
                'id' => 'blog_switch_layout',
                'type' => 'switch',
                'title' => __('Enable Layout Switcher Icons', 'kleo_framework'),
                'subtitle' => __('Let your visitors switch the layout of the Blog page', 'kleo_framework'),
                'default' => '0' // 1 = checked | 0 = unchecked
            ),
            array(
                'id' => 'blog_enabled_layouts',
                'type' => 'select',
                'multi' => true,
                'title' => __('Enabled Layouts', 'kleo_framework'),
                'required' => array('blog_switch_layout','equals','1'),
                'subtitle' => 'What layouts are available for the user to switch.',
                'options' => $kleo_config['blog_layouts'],
                'default' => array_values(array_flip($kleo_config['blog_layouts']))
            ),
			array(
				'id' => 'featured_content_layout',
				'type' => 'select',
				'title' => __('Featured content display type', 'kleo_framework'), 
				'subtitle' => 'Featured articles can be displayed on your Blog page just above regular articles. Just add them a tag named Featured. Change default tag name <a href="' . admin_url( 'customize.php' ) . '">here</a><br>This setting affects the way they are displayed',
				'options' => array('carousel' => 'Carousel', 'grid' => 'Grid'),
				'default' => 'carousel'
			),
            array(
                'id' => 'featured_grid_columns',
                'type' => 'select',
                'title' => __('Featured articles per row', 'kleo_framework'),
                'required' => array('featured_content_layout','equals','grid'),
                'subtitle' => 'Number of articles to show per row.',
                'options' => array( '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6' ),
                'default' => '3'
            ),
			array(
				'id' => 'blog_meta_elements',
				'type' => 'select',
				'multi' => true,
				'title' => __('Display Meta Fields', 'kleo_framework'),
				'subtitle' => __('What fields do you want displayed? Link fields will only work if BuddyPress is active.', 'kleo_framework'),
				'options' => $kleo_config['blog_meta_elements'],
				'default' => $kleo_config['blog_meta_defaults']
			),
			array(
				'id' => 'blog_archive_meta',
				'type' => 'switch',
				'title' => __('Display post meta on archive listing', 'kleo_framework'),
				'subtitle' => __('If you want to show meta info in Blog posts listing like Author, Date, Category', 'kleo_framework'),
				'default' => '1' // 1 = checked | 0 = unchecked
			),
			array(
				'id' => 'blog_meta_status',
				'type' => 'switch',
				'title' => __('Display post meta in Single post page', 'kleo_framework'),
				'subtitle' => __('If enabled it will show post info like author, categories', 'kleo_framework'),
				'default' => '1' // 1 = checked | 0 = unchecked
			),
			array(
					'id' => 'blog_media_status',
					'type' => 'switch',
					'title' => __('Display media on post page', 'kleo_framework'), 
					'subtitle' => __('If you want to show image/gallery/video/audio before the post on single page', 'kleo_framework'),
					'default' => '1' // 1 = checked | 0 = unchecked
			),
			array(
					'id' => 'blog_get_image',
					'type' => 'switch',
					'title' => __('Get Featured image from content', 'kleo_framework'), 
					'subtitle' => __('If you have not set a Featured image allow the system to show the first image from post content on archive pages', 'kleo_framework'),
					'default' => '1' // 1 = checked | 0 = unchecked
			),
			array(
					'id' => 'blog_default_image',
					'type' => 'media',
					'url'=> true,
					'readonly' => false,
					'title' => __('Default Featured Image Placeholder', 'kleo_framework'), 
					'subtitle' => __('If your post does not have a Featured image set then show a default image on archive pages.', 'kleo_framework'),
			),
			array(
					'id' => 'related_posts',
					'type' => 'switch',
					'title' => __('Enable related posts', 'kleo_framework'),
					'subtitle' => __('Display related posts in single blog entry', 'kleo_framework'),
					'default' => '1' // 1 = checked | 0 = unchecked
			),
            array(
					'id' => 'related_custom_posts',
					'type' => 'switch',
					'title' => __('Enable custom posts related', 'kleo_framework'),
					'subtitle' => __('Display related posts in custom post type single entry', 'kleo_framework'),
					'default' => '0' // 1 = checked | 0 = unchecked
			)
		)
);

$sections[] = array(
    'icon' => 'el-icon-file-alt',
    'icon_class' => 'icon-large',
    'title' => __('Pages', 'kleo_framework'),
    'desc' => __('<p class="description">Settings related to Pages</p>', 'kleo_framework'),
    'fields' => array(
        array(
            'id' => 'page_media',
            'type' => 'switch',
            'title' => __('Enable Media on single page', 'kleo_framework'),
            'subtitle' => __('Video, Sound or Image Thumbnail will appear before post content', 'kleo_framework'),
            'default' => '0' // 1 = checked | 0 = unchecked
        ),
        array(
            'id' => 'page_comments',
            'type' => 'switch',
            'title' => __('Enable Page comments', 'kleo_framework'),
            'subtitle' => __('If you enable this make sure you have checked also Settings - Discussion - Allow people to post comments on new articles ', 'kleo_framework'),
            'default' => '0' // 1 = checked | 0 = unchecked
        ),
    )
);


$scope_atts = array();
$scope_atts['extra'] = array();
$scope_atts['extra']['post'] = 'Posts';
$scope_atts['extra']['page'] = 'Pages';

$sections[] = array(
    'icon' => 'el-icon-share',
    'icon_class' => 'icon-large',
    'title' => __('Social Share', 'kleo_framework'),
    'desc' => __('<p class="description">Settings related to Social sharing that appear after post/page content<br>' .
        'NOTE: Woocommerce Wishlist share options are configured from plugin page: WP admin - Woocommerce - Settings - Wishlist</p>', 'kleo_framework'),
    'fields' => array(
        array(
            'id' => 'blog_social_share',
            'type' => 'switch',
            'title' => __('Enable Social share', 'kleo_framework'),
            'subtitle' => __('Display social share icons after single blog entry.', 'kleo_framework'),
            'default' => '1' // 1 = checked | 0 = unchecked
        ),
        array(
            'id' => 'blog_share_types',
            'type' => 'select',
            'multi' => true,
            'required' => array('blog_social_share','equals','1'),
            'title' => __('Social share Post types', 'kleo_framework'),
            'subtitle' => 'Select the post types to enable social sharing for.',
            'options' => kleo_post_types( $scope_atts ),
            'default' => array( 'post', 'product' )
        ),
        array(
            'id' => 'blog_share_exclude',
            'type' => 'text',
            'required' => array('blog_social_share','equals','1'),
            'title' => __('Exclude social share by Post IDs', 'kleo_framework'),
            'subtitle' => __('List of Post IDs separated by comma to exclude from showing.', 'kleo_framework'),
            'default' => ''
        ),

			array(
                'id' => 'likes_status',
                'type' => 'switch',
                'title' => __('Enable post likes', 'kleo_framework'),
                'subtitle' => __('Allow people to like your post', 'kleo_framework'),
                'default' => '1' // 1 = checked | 0 = unchecked
            ),
			array(
                'id' => 'likes_exclude',
                'type' => 'text',
                'required' => array('likes_status','equals','1'),
                'title' => __('Exclude IDs', 'kleo_framework'),
                'subtitle' => __('List of Post IDs separated by comma to exclude from showing likes', 'kleo_framework'),
                'default' => ''
            ),
			array(
                'id' => 'likes_ajax',
                'type' => 'switch',
                'required' => array('likes_status','equals','1'),
                'title' => __('Enable Likes by Ajax', 'kleo_framework'),
                'subtitle' => __('Get the likes count by Ajax if you have cached content. <br> NOTE: Not recommended. This will increase page load DRAMATICALLY.', 'kleo_framework'),
                'default' => '0' // 1 = checked | 0 = unchecked
            ),
			array(
                'id' => 'likes_zero_text',
                'type' => 'text',
                'required' => array('likes_status','equals','1'),
                'title' => __('0 likes text', 'kleo_framework'),
                'subtitle' => __('Text to show in case the post has no likes', 'kleo_framework'),
                'default' => 'likes' // 1 = checked | 0 = unchecked
            ),

			array(
                'id' => 'likes_one_text',
                'type' => 'text',
                'required' => array('likes_status','equals','1'),
                'title' => __('1 like text', 'kleo_framework'),
                'subtitle' => __('Text to show in case the post has 1 like', 'kleo_framework'),
                'default' => 'like' // 1 = checked | 0 = unchecked
            ),
			array(
                'id' => 'likes_more_text',
                'type' => 'text',
                'required' => array('likes_status','equals','1'),
                'title' => __('More than 1 like text', 'kleo_framework'),
                'subtitle' => __('Text to show in case the post has more than 1 like', 'kleo_framework'),
                'default' => 'likes' // 1 = checked | 0 = unchecked
            ),
			array(
                'id' => 'likes_already',
                'type' => 'text',
                'required' => array('likes_status','equals','1'),
                'title' => __('More than 1 like text', 'kleo_framework'),
                'subtitle' => __('Text to show in case user has already liked the post', 'kleo_framework'),
                'default' => 'You already like this' // 1 = checked | 0 = unchecked
            ),
            array(
                'id' => 'like_this_text',
                'type' => 'text',
                'required' => array('likes_status','equals','1'),
                'title' => __('Text on icon hover', 'kleo_framework'),
                'subtitle' => __('Text that shows when hovering the icon', 'kleo_framework'),
                'default' => 'Like this' // 1 = checked | 0 = unchecked
            )
    )
);


$font_fields = array();
$font_sections = array(
		'h1' => array('size' => '36','height' => '48', 'font' => 'Roboto Condensed', 'weight' => '300'),
		'h2' => array('size' => '28','height' => '36', 'font' => 'Roboto Condensed', 'weight' => '300'),
		'h3' => array('size' => '22','height' => '28', 'font' => 'Roboto Condensed', 'weight' => '300'),
		'h4' => array('size' => '18','height' => '28', 'font' => 'Roboto Condensed', 'weight' => '300'),
		'h5' => array('size' => '17','height' => '27', 'font' => 'Roboto Condensed', 'weight' => '300'),
		'h6' => array('size' => '16','height' => '24', 'font' => 'Roboto Condensed', 'weight' => '300'),
		'body' => array('size' => '13','height' => '20', 'font' => 'Open Sans', 'weight' => '400')
	);
	
foreach ($font_sections as $k => $font) {
	$font_fields[] =	array(
			'id'=>'font_'.$k,
			'type' => 'typography', 
			'title' => ucwords($k),
			//'compiler'=>true, // Use if you want to hook in your own CSS compiler
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'=>true, // Select a backup non-google font in addition to a google font
			'font-style'=>true, // Includes font-style and weight. Can use font-style or font-weight to declare
			//'subsets'=>false, // Only appears if google is true and subsets not set to false
			//'font-size'=>false,
			//'line-height'=>false,
			//'word-spacing'=>true, // Defaults to false
			//'letter-spacing'=>true, // Defaults to false
			'color'=>false,
			//'preview'=>false, // Disable the previewer
			'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
			'output' => array(), // An array of CSS selectors to apply this font style to dynamically
			'units'=>'px', // Defaults to px
			'subtitle'=> "",
			'default'=> array(
				'font-weight'=>$font['weight'], 
				'font-family'=>$font['font'],
				'google' => 'true',
				'font-size'=>$font['size'].'px', 
				'line-height'=>$font['height'].'px'),
		);
}


$sections[] = array(
    'icon' => 'el-icon-adjust',
    'icon_class' => 'icon-large',
    'title' => __('Styling options', 'kleo_framework'),
    'desc' => '',
    'fields' => array(
        array(
            'id' => 'styling-info',
            'type' => 'info',
            'notice' => true,
            'style' => 'success',
            'desc' => 'Style colors and backgrounds for each section of your site.<br>Start by selecting a submenu from the left.',
        ),
    )
);
$style_fields = array();
foreach($style_sets as $set)
{
    $style_fields = array();

    foreach($style_elements as $elem) {
        if ($elem['type'] == 'color') {
            $style_fields[] = array(
                'id'=>'st__'.$set.'__'.$elem['slug'],
                'type' => $elem['type'],
                'title' =>  $elem['title'],
                'subtitle' => $elem['subtitle'],
                'default' => $style_defaults[$set][$elem['slug']]
            );
        }
        elseif($elem['type'] == 'background') {
            $style_fields[] = array(
                'id'=>'st__'.$set.'__'.$elem['slug'],
                'type' => $elem['type'],
                'title' =>  $elem['title'],
                'subtitle' => $elem['subtitle'],
                'default' => $elem['default'],
                'background-color' =>  false,
                'preview' => false,
                'preview_media' => true
            );
        }
        elseif($elem['type'] == 'info') {
            $style_fields[] = array(
                'id'=>'st__'.$set.'__'.$elem['slug'],
                'type' => 'info',
                'notice' => true,
                'style' => 'success',
                'desc' => $style_defaults[$set]['desc']
            );
        }
    }

    $sections[] = array(
        'icon' => 'el-icon-adjust',
        'icon_class' => 'icon-large',
        'title' => ucfirst($set),
        'desc' => '',
        'fields' => $style_fields,
        'subsection' => true
    );
}


$sections[] = array(
		'icon' => 'el-icon-fontsize',
		'icon_class' => 'icon-large',
		'title' => __('Fonts', 'kleo_framework'),
		'desc' => __('<p class="description">Customize font options for body text and headings.</p>', 'kleo_framework'),
		'fields' => $font_fields
);

$sections[] = array(
    'icon' => 'el-icon-th-large',
    'icon_class' => 'icon-large',
    'title' => __('Portfolio', 'kleo_framework'),
    'desc' => __('<p class="description">Portfolio related settings. Please re-save permalinks when changing slugs or archive page.</p>', 'kleo_framework'),
    'fields' => array(

        array(
            'id' => 'portfolio_custom_archive',
            'type' => 'switch',
            'title' => __('Custom page for Portfolio Archive', 'kleo_framework'),
            'subtitle' => 'This means you need to create a page and assign it below. Re-save permalinks from Settings - Permalinks',
            'description' => 'Setting it to ON will take the name and slug from the page assigned.',
            'default' => '0' // 1 = checked | 0 = unchecked
        ),
        array(
            'id' => 'portfolio_page',
            'type' => 'select',
            'data' => 'pages',
            'required' => array('portfolio_custom_archive', 'equals' , '1'),
            'title' => __('Portfolio Page', 'kleo_framework'),
            'subtitle' => "You need to add [kleo_portfolio] shortcode to the page or using Visual Composer.",
            'default' => ''
        ),
        array(
            'id' => 'portfolio_name',
            'type' => 'text',
            'required' => array('portfolio_custom_archive', 'equals' , '0'),
            'title' => __('Portfolio name', 'kleo_framework'),
            'subtitle' => "You can replace the name with something else",
            'default' => 'Portfolio'
        ),
        array(
            'id' => 'portfolio_slug',
            'type' => 'text',
            'required' => array('portfolio_custom_archive', 'equals' , '0'),
            'title' => __('Portfolio link', 'kleo_framework'),
            'subtitle' => "You can replace the name with something else. This affects your permalink structure so after changing this you must re-save options in Settings - Permalinks",
            'default' => 'portfolio'
        ),
        array(
            'id' => 'portfolio_style',
            'type' => 'select',
            'required' => array('portfolio_custom_archive', 'equals' , '0'),
            'title' => __('Display style for Portfolio page', 'kleo_framework'),
            'subtitle' => 'How to display the portfolio listed items ',
            'options' => array(
                'default' => 'Default',
                'overlay' => 'Overlay'
            ),
            'default' => 'default'
        ),
        array(
            'id' => 'portfolio_title_style',
            'type' => 'select',
            'required' => array(
                array('portfolio_custom_archive','equals','0'),
                array('portfolio_style','equals','overlay')
            ),
            'title' => __('Title style', 'kleo_framework'),
            'subtitle' => '',
            'options' => array(
                'normal' => 'Normal',
                'hover' => 'Shown only on item hover'
            ),
            'default' => 'normal' // 1 = checked | 0 = unchecked
        ),
        array(
            'id' => 'portfolio_excerpt',
            'type' => 'switch',
            'required' => array('portfolio_custom_archive', 'equals' , '0'),
            'title' => __('Show/Hide subtitle', 'kleo_framework'),
            'subtitle' => 'Display item excerpt on portfolio page',
            'default' => '1' // 1 = checked | 0 = unchecked
        ),
        array(
            'id' => 'portfolio_per_row',
            'type' => 'text',
            'required' => array('portfolio_custom_archive', 'equals' , '0'),
            'title' => __('Number of items per row', 'kleo_framework'),
            'subtitle' => "A number between 2 and 6",
            'default' => '4'
        ),
        array(
            'id' => 'portfolio_filter',
            'type' => 'select',
            'required' => array('portfolio_custom_archive', 'equals' , '0'),
            'title' => __('Show categories filter on portfolio page', 'kleo_framework'),
            'subtitle' => '',
            'options' => array(
                'yes' => 'Yes',
                'no' => 'No'
            ),
            'default' => 'yes'
        ),
        array(
            'id' => 'portfolio_image',
            'type' => 'text',
            'required' => array('portfolio_custom_archive', 'equals' , '0'),
            'title' => __('Thumbnail image size', 'kleo_framework'),
            'subtitle' => __('Set your portfolio image size in portfolio list. Defined in pixels. If you are using video items, use a 16:9 size format', 'kleo_framework'),
            'default' => $kleo_config['post_gallery_img_width'] . "x" . $kleo_config['post_gallery_img_height']
        ),
        array(
            'id' => 'section-title-porto-single',
            'type' => 'section',
            'title' => __( 'Portfolio Single Item Page', 'kleo_framework' ),
            'subtitle' => __( 'Settings for portfolio item page', 'kleo_framework' ),
            'indent' => true, // Indent all options below until the next 'section' option is set.
        ),
        array(
            'id' => 'portfolio_media_status',
            'type' => 'switch',
            'title' => __('Display media on single portfolio page', 'kleo_framework'),
            'subtitle' => __('If you want to show image/gallery/video before the content on single portfolio page', 'kleo_framework'),
            'default' => '1' // 1 = checked | 0 = unchecked
        ),
        array(
            'id' => 'portfolio_back_to',
            'type' => 'switch',
            'title' => __('Show back to Portfolio icon(bottom of single portfolio item page)', 'kleo_framework'),
            'subtitle' => '',
            'default' => '1' // 1 = checked | 0 = unchecked
        ),
        array(
            'id' => 'portfolio_comments',
            'type' => 'switch',
            'title' => __('Enable comments on portfolio single page)', 'kleo_framework'),
            'subtitle' => '',
            'default' => '0' // 1 = checked | 0 = unchecked
        ),
        array(
            'id' => 'section-title-porto-single-end',
            'type' => 'section',
            'indent' => false, // Indent all options below until the next 'section' option is set.
        ),
    )
);

$sections[] = array(
		'icon' => 'el-icon-torso',
		'icon_class' => 'icon-large',
		'title' => __('Buddypress', 'kleo_framework'),
		'desc' => __('<p class="description">Buddypress related settings</p>', 'kleo_framework'),
		'fields' => array(

			array(
					 'id' => 'bp_layout',
					 'type' => 'image_select',
					 'compiler'=>true,
					 'title' => __('Default Layout', 'kleo_framework'), 
					 'subtitle' => __('Select your Buddypress pages layout. Choose between 1, 2 or 3 column layout.', 'kleo_framework'),
					 'options' => array(
							 'no' => array('alt' => 'No sidebar', 'img' => ReduxFramework::$_url.'assets/img/1col.png'),
							 'left' => array('alt' => '2 Column Left', 'img' => ReduxFramework::$_url.'assets/img/2cl.png'),
							 'right' => array('alt' => '2 Column Right', 'img' => ReduxFramework::$_url.'assets/img/2cr.png'),
							 '3lr' => array('alt' => '3 Column Middle', 'img' => ReduxFramework::$_url.'assets/img/3cm.png'),
							 '3ll' => array('alt' => '3 Column Left', 'img' => ReduxFramework::$_url.'assets/img/3cl.png'),
							 '3rr' => array('alt' => '3 Column Right', 'img' => ReduxFramework::$_url.'assets/img/3cr.png')
						 ),
					 'default' => 'right'
			 ),
			array(
					 'id' => 'bp_layout_members_dir',
					 'type' => 'select',
					 'compiler'=>true,
					 'title' => __('Members Directory Layout', 'kleo_framework'), 
					 'subtitle' => __('Select your Buddypress Members directory layout. Choose between 1, 2 or 3 column layout.', 'kleo_framework'),
					 'options' => array(
							 'default' => 'Default layout as set above',
							 'no' => 'Full width',
							 'left' => 'Left Sidebar',
							 'right' => 'Right Sidebar',
							 '3lr' => '3 Column, Left and Right Sidebars',
							 '3ll' => '3 Column, 2 Left sidebars',
							 '3rr' => '3 Column, 2 Right sidebars'
						 ),
					 'default' => 'default'
			 ),
			array(
					 'id' => 'bp_layout_profile',
					 'type' => 'select',
					 'compiler'=>true,
					 'title' => __('Member Profile Layout', 'kleo_framework'), 
					 'subtitle' => __('Select your Member profile layout. Choose between 1, 2 or 3 column layout.', 'kleo_framework'),
					 'options' => array(
							 'default' => 'Default layout as set above',
							 'no' => 'Full width',
							 'left' => 'Left Sidebar',
							 'right' => 'Right Sidebar',
							 '3lr' => '3 Column, Left and Right Sidebars',
							 '3ll' => '3 Column, 2 Left sidebars',
							 '3rr' => '3 Column, 2 Right sidebars'
						 ),
					 'default' => 'default'
			 ),
			array(
					 'id' => 'bp_layout_groups',
					 'type' => 'select',
					 'compiler'=>true,
					 'title' => __('Groups Layout', 'kleo_framework'), 
					 'subtitle' => __('Select your Groups pages layout. Choose between 1, 2 or 3 column layout.', 'kleo_framework'),
					 'options' => array(
							 'default' => 'Default layout as set above',
							 'no' => 'Full width',
							 'left' => 'Left Sidebar',
							 'right' => 'Right Sidebar',
							 '3lr' => '3 Column, Left and Right Sidebars',
							 '3ll' => '3 Column, 2 Left sidebars',
							 '3rr' => '3 Column, 2 Right sidebars'
						 ),
					 'default' => 'default'
			 ),
			array(
					 'id' => 'bp_layout_activity',
					 'type' => 'select',
					 'compiler'=>true,
					 'title' => __('Activity Layout', 'kleo_framework'), 
					 'subtitle' => __('Select your Activity pages layout. Choose between 1, 2 or 3 column layout.', 'kleo_framework'),
					 'options' => array(
							 'default' => 'Default layout as set above',
							 'no' => 'Full width',
							 'left' => 'Left Sidebar',
							 'right' => 'Right Sidebar',
							 '3lr' => '3 Column, Left and Right Sidebars',
							 '3ll' => '3 Column, 2 Left sidebars',
							 '3rr' => '3 Column, 2 Right sidebars'
						 ),
					 'default' => 'default'
			 ),
			array(
					 'id' => 'bp_layout_register',
					 'type' => 'select',
					 'compiler'=>true,
					 'title' => __('Register page Layout', 'kleo_framework'), 
					 'subtitle' => __('Select your Register page layout. Choose between 1, 2 or 3 column layout.', 'kleo_framework'),
					 'options' => array(
							 'default' => 'Default layout as set above',
							 'no' => 'Full width',
							 'left' => 'Left Sidebar',
							 'right' => 'Right Sidebar',
							 '3lr' => '3 Column, Left and Right Sidebars',
							 '3ll' => '3 Column, 2 Left sidebars',
							 '3rr' => '3 Column, 2 Right sidebars'
						 ),
					 'default' => 'default'
			 ),

            array(
						'id' => 'bp_title_location',
						'type' => 'button_set',
						'compiler'=>true,
						'title' => __('Page Title location', 'kleo_framework'),
						'subtitle' => __('Choose where to show page title. In the breadcrumb section or in the main content', 'kleo_framework'),
						'options' => array('breadcrumb' => 'Breadcrumb section', 'main' => 'Main section', 'disabled' => "Disabled"),
						'default' => 'breadcrumb'
            ),
            array(
                    'id' => 'bp_breadcrumb_status',
                    'type' => 'switch',
                    'title' => __('Show breadcrumb', 'kleo_framework'),
                    'subtitle' => __('Enable or disable the site path under the page title.', 'kleo_framework'),
                    'default' => '1' // 1 = checked | 0 = unchecked
            ),
            array(
                'id' => 'bp_custom_info',
                'type' => 'switch',
                'title' => __('Custom main menu info', 'kleo_framework'),
                'subtitle' => __('Add a custom text in the main menu to show only on Buddypress pages.', 'kleo_framework'),
                'default' => '0' // 1 = checked | 0 = unchecked
            ),
            array(
                'id' => 'bp_title_info',
                'type' => 'textarea',
                'title' => __('Main menu info', 'kleo_framework'),
                'required' => array('bp_custom_info', '=' , '1'),
                'subtitle' => __('This text displays next to the main menu', 'kleo_framework'),
                'desc' => '',
                'default' => '<em class="muted">feel free to call us</em> &nbsp;&nbsp;<i class="icon-phone"></i> +91.33.26789234 &nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-mail-alt"></i> support@seventhqueen.com'
            ),
            array(
                'id' => 'bp_profile_breadcrumb_disable',
                'type' => 'switch',
                'title' => __('Hide Breadcrumb section for Profile pages', 'kleo_framework'),
                'subtitle' => __('If enabled the breadcrumb section will be hidden. Best used when you enable full width profile page below', 'kleo_framework'),
                'default' => '0' // 1 = checked | 0 = unchecked
            ),
            array(
                'id' => 'bp_full_profile',
                'type' => 'switch',
                'title' => __('Enable Full width Profile Header', 'kleo_framework'),
                'subtitle' => __('If enabled it will show the profile Photo full width', 'kleo_framework'),
                'default' => '0' // 1 = checked | 0 = unchecked
            ),
            array(
					'id' => 'bp_online_status',
					'type' => 'switch',
					'title' => __('Enable online status', 'kleo_framework'), 
					'subtitle' => __('If enabled it will show a colored dot next to each member avatar', 'kleo_framework'),
					'default' => '1' // 1 = checked | 0 = unchecked
			),
			array(
					'id' => 'bp_notif_interval',
					'type' => 'text',
					'title' => __('Live Notifications interval', 'kleo_framework'), 
					'subtitle' => 'Refresh time in miliseconds for the live menu notification. Default is 20000 which means 20 seconds. Put 0 to disable notifications refresh. Add it to the menu from Appearance - Menus - KLEO section.',
					'default' => '20000' // 1 = checked | 0 = unchecked
			),
			array(
					'id' => 'bp_members_perpage',
					'type' => 'text',
					'title' => __('Members per page', 'kleo_framework'), 
					'subtitle' => __('How many members to show per page in the Members Directory', 'kleo_framework'),
					'default' => '24' // 1 = checked | 0 = unchecked
			),
			array(
					'id' => 'bp_groups_perpage',
					'type' => 'text',
					'title' => __('Groups per page', 'kleo_framework'), 
					'subtitle' => __('How many groups to show per page in the Groups Directory', 'kleo_framework'),
					'default' => '24' // 1 = checked | 0 = unchecked
			),
				

		)
);


if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

    $sections[] = array(
        'icon' => 'el-icon-shopping-cart',
        'icon_class' => 'icon-large',
        'title' => __('Woocommerce', 'kleo_framework'),
        'desc' => '',
        'fields' => array(
            array(
                'id' => 'woo_sidebar',
                'type' => 'select',
                'compiler' => true,
                'title' => __('Woocommerce Pages Layout', 'kleo_framework'),
                'subtitle' => __('Select the layout to use in Woocommerce pages.', 'kleo_framework'),
                'options' => array(
                    'default' => 'Default site layout',
                    'no' => 'Full width',
                    'left' => 'Left Sidebar',
                    'right' => 'Right Sidebar',
                    '3lr' => '3 Column, Left and Right Sidebars',
                    '3ll' => '3 Column, 2 Left sidebars',
                    '3rr' => '3 Column, 2 Right sidebars'
                ),
                'default' => 'default'
            ),
            array(
                'id' => 'woo_cat_sidebar',
                'type' => 'select',
                'compiler' => true,
                'title' => __('Woocommerce Category Layout', 'kleo_framework'),
                'subtitle' => __('Select the layout to use in Woocommerce product listing pages.', 'kleo_framework'),
                'options' => array(
                    'default' => 'Default as set above',
                    'no' => 'Full width',
                    'left' => 'Left Sidebar',
                    'right' => 'Right Sidebar',
                    '3lr' => '3 Column, Left and Right Sidebars',
                    '3ll' => '3 Column, 2 Left sidebars',
                    '3rr' => '3 Column, 2 Right sidebars'
                ),
                'default' => 'default'
            ),
            array(
                'id' => 'woo_cart_location',
                'type' => 'button_set',
                'title' => __('Menu cart location', 'kleo_framework'),
                'subtitle' => __('Shopping Cart in header menu location', 'kleo_framework'),
                'options' => array(
                    'off' => 'Disabled', 'primary' => 'Primary menu', 'top' => 'Top menu'
                ),
                'default' => 'primary'
            ),

            array(
                'id' => 'woo_mobile_cart',
                'type' => 'switch',
                'title' => __('Mobile menu Cart Icon', 'kleo_framework'),
                'subtitle' => __('This will show on mobile menu a shop icon with the number of cart items', 'kleo_framework'),
                'default' => '1' // 1 = checked | 0 = unchecked
            ),

            array(
                'id' => 'woo_image_effect',
                'type' => 'button_set',
                'title' => __('Product image effect', 'kleo_framework'),
                'subtitle' => __('The effect on products listing when hovering an image.', 'kleo_framework'),
                'options' => array(
                    'default' => 'Bottom-Top', 'fade' => 'Fade', 'alt' => 'Left-Right', 'single' => 'No effect'
                ),
                'default' => 'default'
            ),

            array(
                'id' => 'woo_product_animate',
                'type' => 'switch',
                'title' => __('Enable product listing Appear Animation', 'kleo_framework'),
                'subtitle' => __('On product listing the products will have a appear animation.', 'kleo_framework'),
                'default' => '1' // 1 = checked | 0 = unchecked
            ),

            array(
                'id' => 'woo_percentage_badge',
                'type' => 'switch',
                'title' => __('Show percentage badge on products list', 'kleo_framework'),
                'subtitle' => __('This will replace the "Sale" badge with "SAVE UP TO xx%"', 'kleo_framework'),
                'default' => '0' // 1 = checked | 0 = unchecked
            ),
            array(
                'id' => 'woo_percent_color',
                'type' => 'color',
                'required' => array('woo_percentage_badge', '=', '1'),
                'title' => __('Custom Badge color', 'kleo_framework'),
                'subtitle' => '',
                'default' => '#ffffff' // 1 = checked | 0 = unchecked
            ),
            array(
                'id' => 'woo_percent_bg',
                'type' => 'color',
                'required' => array('woo_percentage_badge', '=', '1'),
                'title' => __('Custom Badge Background', 'kleo_framework'),
                'subtitle' => '',
                'default' => '#000000' // 1 = checked | 0 = unchecked
            ),

            array(
                'id' => 'woo_new_badge',
                'type' => 'switch',
                'title' => __('Show NEW badge for new products added', 'kleo_framework'),
                'subtitle' => '',
                'default' => '1' // 1 = checked | 0 = unchecked
            ),
			array(
				'id' => 'woo_show_excerpt_single',
				'type' => 'switch',
				'title' => __('Show excerpt on product page', 'kleo_framework'),
				'subtitle' => '',
				'default' => '0' // 1 = checked | 0 = unchecked
			),
			array(
				'id' => 'woo_buddypress_menus',
				'type' => 'switch',
				'title' => __('Manage account in Buddypress', 'kleo_framework'),
				'subtitle' => __('Integrates "My Account" into Buddypress profile tabs', 'kleo_framework'),
				'default' => '1' // 1 = checked | 0 = unchecked
			),
            array(
                'id' => 'woo_new_days',
                'type' => 'text',
                'required' => array('woo_new_badge', '=', '1'),
                'title' => __('Number of days to treat a product as new', 'kleo_framework'),
                'subtitle' => __('For how many days to show the NEW badge once a product is added to the shop.', 'kleo_framework'),
                'default' => '7' // 1 = checked | 0 = unchecked
            ),

            array(
                'id' => 'woo_catalog',
                'type' => 'button_set',
                'title' => __('Catalog mode', 'kleo_framework'),
                'subtitle' => __('If you enable catalog mode will disable Add To Cart buttons, Checkout and Shopping cart.', 'kleo_framework'),
                'options' => array(
                    '0' => 'No', '1' => 'Yes'
                ),
                'default' => '0'
            ),
            array(
                'id' => 'woo_disable_prices',
                'type' => 'button_set',
                'title' => __('Disable prices', 'kleo_framework'),
                'subtitle' => __('Disable prices on category pages and product page', 'kleo_framework'),
                'options' => array(
                    '0' => 'No', '1' => 'Yes'
                ),
                'required' => array('woo_catalog', '=', '1'),
                'default' => '0'
            ),
            array(
                'id' => 'woo_shop_columns',
                'type' => 'select',
                'title' => __('Shop Products Columns', 'kleo_framework'),
                'subtitle' => __('Select the number of columns to use for products display.', 'kleo_framework'),
                'options' => array(
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6'
                ),
                'default' => '3'
            ),
            array(
                'id' => 'woo_shop_products',
                'type' => 'text',
                'title' => __('Shop Products per page', 'kleo_framework'),
                'subtitle' => __('How many products to show per page', 'kleo_framework'),
                'default' => '15' // 1 = checked | 0 = unchecked
            ),
            array(
                'id' => 'woo_related_columns',
                'type' => 'select',
                'title' => __('Related Products number', 'kleo_framework'),
                'subtitle' => __('Select the number of related products to show on product page.', 'kleo_framework'),
                'options' => array(
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6'
                ),
                'default' => '3'
            ),
            array(
                'id' => 'woo_upsell_columns',
                'type' => 'select',
                'title' => __('Upsell Products number', 'kleo_framework'),
                'subtitle' => __('Select the number of upsell products to show on product page.', 'kleo_framework'),
                'options' => array(
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6'
                ),
                'default' => '3'
            ),
            array(
                'id' => 'woo_cross_columns',
                'type' => 'select',
                'title' => __('Cross-sell Products number', 'kleo_framework'),
                'subtitle' => __('Select the number of Cross-sell products to show on cart page.', 'kleo_framework'),
                'options' => array(
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6'
                ),
                'default' => '3'
            )
        )
    );
}

if ( class_exists('bbPress') ) {

	$sections[] = array(
			'icon' => 'el-icon-comment-alt',
			'icon_class' => 'icon-large',
			'title' => __('bbPress', 'kleo_framework'),
			'desc' => '',
			'fields' => array(
					array(
							 'id' => 'bbpress_sidebar',
							 'type' => 'select',
							 'title' => __('bbPress Pages Layout', 'kleo_framework'), 
							 'subtitle' => __('Select the layout to use in bbPress pages.', 'kleo_framework'),
							 'options' => array(
									 'default' => 'Default site layout',
									 'no' => 'Full width',
									 'left' => 'Left Sidebar',
									 'right' => 'Right Sidebar',
									 '3lr' => '3 Column, Left and Right Sidebars',
									 '3ll' => '3 Column, 2 Left sidebars',
									 '3rr' => '3 Column, 2 Right sidebars'
								 ),
							 'default' => 'default'
					 )
				)
			);		
}


if (function_exists('pmpro_url')):

		
    $sections[] = array(
				
			'icon' => 'el-icon-group',
			'icon_class' => 'icon-large',
			'title' => __('Memberships', 'kleo_framework'),
			'desc' => __('<p class="description">Settings related to membership. You need to have Paid Memberships Pro plugin activated</p>', 'kleo_framework'),
			'fields' => array(
				array(
					'id' => 'membership',
					'type' => 'callback',
					'title' => __('Membership settings', 'kleo_framework'), 
					'sub_desc' => '',
					'callback' => 'pmpro_data_set',
				)
			)
		);

endif;




$sections[] = array(

	'icon' => 'el-icon-cogs',
	'icon_type' => 'iconfont',
	'icon_class' => 'icon-large',
	'title' => __('Miscellaneous', 'kleo_framework'),
	'desc' => "",
	'fields' => array(
			array(
					'id' => 'admin_bar',
					'type' => 'switch',
					'title' => __('Admin toolbar', 'kleo_framework'), 
					'subtitle' => __('Enable or disable wordpress default top toolbar', 'kleo_framework'),
					'default' => '1' // 1 = checked | 0 = unchecked
			),
            array(
                'id' => 'login_redirect',
                'type' => 'select',
                'title' => __('Login redirect for Popup', 'kleo_framework'),
                'subtitle' => __('Select the redirect action taken when members login from the popup window.', 'kleo_framework'),
                'options' => array(
                    'default' => __( 'Default WordPress redirect', 'kleo_framework' ),
                    'reload' => __( 'Reload the current page' ,'kleo_framework' ),
                ),
                'default' => 'default'
            ),
			array(
					'id' => 'facebook_login',
					'type' => 'switch',
					'title' => __('Facebook integration', 'kleo_framework'), 
					'subtitle' => __('Enable or disable Login/Register with Facebook', 'kleo_framework'),
					'default' => '0', // 1 = checked | 0 = unchecked
			),
			array(
					'id' => 'fb_app_id',
					'type' => 'text',
					'title' => __('Facebook APP ID', 'kleo_framework'), 
					'subtitle' => __('In order to integrate with Facebook you need to enter your Facebook APP ID<br/>If you don\'t have one, you can create it from: <a target="_blank" href="https://developers.facebook.com/apps">HERE</a> ', 'kleo_framework'),
					'default' => '',
					'required' => array('facebook_login', '=' , '1'),
			),
			array(
					'id' => 'facebook_avatar',
					'type' => 'switch',
					'title' => __('Show Facebook avatar', 'kleo_framework'), 
					'subtitle' => __('If you enable this, users that registered with Facebook will display Facebook profile image as avatar.', 'kleo_framework'),
					'default' => '0', // 1 = checked | 0 = unchecked
					'required' => array('facebook_login', '=' , '1'),
			),
			array(
					'id' => 'facebook_register',
					'type' => 'switch',
					'title' => __('Enable Registration via Facebook', 'kleo_framework'), 
					'subtitle' => __('If you enable this, users will be able to register a new account using Facebook. This skips the registration page including required profile fields', 'kleo_framework'),
					'default' => '0', // 1 = checked | 0 = unchecked
					'required' => array('facebook_login', '=' , '1'),
			),

            array(
                'id' => 'let_it_snow',
                'type' => 'switch',
                'title' => __('Let it snow', 'kleo_framework'),
                'subtitle' => __('If you enable this, a beautiful snowing effect will cover the whole site', 'kleo_framework'),
                'default' => '0', // 1 = checked | 0 = unchecked
            ),
        array(
            'id' => 'dev_mode',
            'type' => 'switch',
            'title' => __('Development mode', 'kleo_framework'),
            'subtitle' => __('If you enable this, CSS and JS resources will not be loaded minified', 'kleo_framework'),
            'default' => '0', // 1 = checked | 0 = unchecked
        ),
	)
);


$sections[] = array(
	'icon_type' => 'iconfont',
	'icon_class' => 'el-icon-twitter',
	'title' => __('Social Info', 'kleo_framework'),
	'desc' => __('<p class="description">Here you can set your contact info that will display in the top bar.</p>', 'kleo_framework'),
	'fields' => array(
			
			array(
					'id' => 'show_social_icons',
					'type' => 'switch',
					'title' => __('Display social icons', 'kleo_framework'), 
					'subtitle' => __('Enable or disable the social icons in top bar.', 'kleo_framework'),
					'default' => '1' // 1 = checked | 0 = unchecked
			),
			
			array(
				'id' => 'social_twitter',
				'type' => 'text',
				'title' => __('Twitter', 'kleo_framework'),
				'subtitle' => "Your Twitter link",
				'desc' => '',
				'default' => ''
				),
			array(
				'id' => 'social_facebook',
				'type' => 'text',
				'title' => __('Facebook', 'kleo_framework'),
				'subtitle' => "Your Facebook page/profile link",
				'desc' => '',
				'default' => ''
				),
			array(
				'id' => 'social_dribbble',
				'type' => 'text',
				'title' => __('Dribbble', 'kleo_framework'),
				'subtitle' => "Your Dribbble link",
				'desc' => '',
				'default' => ''
				),
			array(
				'id' => 'social_vimeo-squared',
				'type' => 'text',
				'title' => __('Vimeo', 'kleo_framework'),
				'subtitle' => "Your Vimeo link",
				'desc' => '',
				'default' => ''
				),
			array(
				'id' => 'social_tumblr',
				'type' => 'text',
				'title' => __('Tumblr', 'kleo_framework'),
				'subtitle' => "Your Tumblr link",
				'desc' => '',
				'default' => ''
				),
			array(
				'id' => 'social_linkedin',
				'type' => 'text',
				'title' => __('LinkedIn', 'kleo_framework'),
				'subtitle' => "Your LinkedIn link",
				'desc' => '',
				'default' => ''
				),
			array(
				'id' => 'social_gplus',
				'type' => 'text',
				'title' => __('Google+', 'kleo_framework'),
				'subtitle' => "Your Google+ link",
				'desc' => '',
				'default' => ''
				),
			array(
				'id' => 'social_flickr',
				'type' => 'text',
				'title' => __('Flickr', 'kleo_framework'),
				'subtitle' => "Your Flickr page link",
				'desc' => '',
				'default' => ''
				),
			array(
				'id' => 'social_youtube',
				'type' => 'text',
				'title' => __('YouTube', 'kleo_framework'),
				'subtitle' => "Your YouTube link",
				'desc' => '',
				'default' => ''
				),
			array(
				'id' => 'social_pinterest-circled',
				'type' => 'text',
				'title' => __('Pinterest', 'kleo_framework'),
				'subtitle' => "Your Pinterest link",
				'desc' => '',
				'default' => ''
				),
			array(
				'id' => 'social_foursquare',
				'type' => 'text',
				'title' => __('Foursquare', 'kleo_framework'),
				'subtitle' => "Your Foursqaure link",
				'desc' => '',
				'default' => ''
				),
			array(
				'id' => 'social_instagramm',
				'type' => 'text',
				'title' => __('Instagram', 'kleo_framework'),
				'subtitle' => "Your Instagram link",
				'desc' => '',
				'default' => ''
				),
			array(
				'id' => 'social_github',
				'type' => 'text',
				'title' => __('GitHub', 'kleo_framework'),
				'subtitle' => "Your GitHub link",
				'desc' => '',
				'default' => ''
				),
			array(
				'id' => 'social_xing',
				'type' => 'text',
				'title' => __('Xing', 'kleo_framework'),
				'subtitle' => "Your Xing link",
				'desc' => '',
				'default' => ''
				)
		)
	);	

$sections[] = array(
		'icon' => 'el-icon-key',
		'icon_class' => 'icon-large',
		'title' => __('Theme update', 'kleo_framework'),
		'desc' => __('<p class="description">To automatically get theme updates you need to enter the username and API KEY from your Themeforest account.<br>Please make a backup of current files each time you do a theme update.</p>', 'kleo_framework'),
		'fields' => array(
				array(
						'id' => 'tf_username',
						'type' => 'text',
						'title' => __('Themeforest Username', 'kleo_framework'), 
						'subtitle' => __('', 'kleo_framework'),
						'default' => ''
				),
				array(
						'id' => 'tf_apikey',
						'type' => 'text',
						'title' => __('Themeforest API KEY', 'kleo_framework'), 
						'subtitle' => '',
						'default' => ''
				)
		)
);

/**
 * Get an array of registered post types with different options
 *
 * @param array $args
 * @return array
 */
function kleo_post_types($args = array())
{
    $kleo_post_types = array();

    if (isset($args['extra'])) {
        $kleo_post_types = $args['extra'];
    }

    $post_args = array(
        'public' => true,
        '_builtin' => false
    );

    $types_return = 'objects'; // names or objects, note names is the default
    $post_types = get_post_types($post_args, $types_return);

    if (isset($args['exclude'])) {
        $except_post_types = array('kleo_clients', 'kleo-testimonials', 'topic', 'reply');
    }

    foreach ($post_types as $post_type) {
        if (isset($except_post_types) && in_array($post_type->name, $except_post_types)) {
            continue;
        }
        $kleo_post_types[$post_type->name] = $post_type->labels->name;
    }

    return $kleo_post_types;
}



/* When theme options are saved, re-write the css file */
function kleo_write_dynamic_css_file() {
    global $kleo_theme;
    add_filter('kleo_add_dynamic_style', array($kleo_theme,'add_font_css'));

    kleo_generate_dynamic_css();
    delete_transient( KLEO_DOMAIN.'_google_link' );
}
if( (isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] == 'true')
    || isset($_POST["kleo_".KLEO_DOMAIN]['defaults-section'])
    || isset($_POST["kleo_".KLEO_DOMAIN]['defaults'])
) {
    kleo_write_dynamic_css_file();
}

global $ReduxFramework;
$ReduxFramework = new ReduxFramework($sections, $args, $tabs);

// END Config