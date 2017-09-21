<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'jquery-fullPageCSS', get_stylesheet_directory_uri() . '/css/jquery.fullPage.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'examples', get_stylesheet_directory_uri() . '/css/spokes-style.css', array(), $the_theme->get( 'Version' ) );
  	wp_enqueue_script( 'spokespeople', get_stylesheet_directory_uri() . '/js/spokes-script.js', array(), $the_theme->get( 'Version' ), true);
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    
    wp_enqueue_script( 'jquery-scrolloverflow', get_stylesheet_directory_uri() . '/js/vendors/scrolloverflow.min.js', array(), $the_theme->get( 'Version' ), true );

    wp_enqueue_script( 'jquery-fullPage', get_stylesheet_directory_uri() . '/js/jquery.fullPage.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'jquery.easings', get_stylesheet_directory_uri() . '/js/vendors/jquery.easings.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'spokespeople-bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
    
}

show_admin_bar( false );

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

	add_action( 'after_setup_theme', 'crb_load' );
	function crb_load() {
	    require_once( 'dist/carbon-fields/vendor/autoload.php' );
	    \Carbon_Fields\Carbon_Fields::boot();
	}

	function crb_attach_theme_options() {
		$basic_options_container = Container::make( 'theme_options', 'Quercus Options' );
	    Container::make( 'theme_options', 'Cases' )
	    ->set_page_parent( $basic_options_container ) // reference to a top level container
	    ->add_fields( array(
	        Field::make( 'complex', 'case' )
	        	->set_collapsed(true)
	        	->add_fields( array(
	        		Field::make('text', 'qr_case_title', 'Case Title' ),
                    Field::make('text', 'qr_case_person', 'Responsible Person'),
	        		Field::make('image', 'qr_case_image', 'Case image')
	        			->set_value_type('url'),
	        		Field::make('rich_text', 'qr_case_content', 'Content'),
	        	))
	    ) );
	    Container::make( 'theme_options', 'Employees')
    	->set_page_parent( $basic_options_container )
    	->add_fields(array(
    		Field::make('complex', 'employee')
    			->set_collapsed(true)
				->add_fields(array(
					Field::make('text', 'qr_employee_name', 'Name'),
					Field::make('text', 'qr_employee_title', 'Job Title'),
					Field::make('text', 'qr_employee_email', 'Email'),
					Field::make('text', 'qr_employee_phone', 'Phone'),
					Field::make('image', 'qr_employee_image', 'Employee image')
	        			->set_value_type('url'),
				))
    	));

	}

    add_action( 'admin_enqueue_scripts', 'enqueue_admin_script' );

    function enqueue_admin_script(){
        $the_theme = wp_get_theme();
        wp_enqueue_script( 'spokespeople-admin-script', get_stylesheet_directory_uri() . '/js/spokes-admin-script.js', array(), $the_theme->get( 'Version' ), true);
    }

    function quercus_add_widgets(){
        register_sidebar(array(
            'name'          => 'Footer widget 1',
            'id'            => 'qr_widget_one',
            'before_widget' => '<div class="col-12 col-sm-6  col-md-6 col-lg-3">',
            'after_widget'  => '</div>',
        ));
        register_sidebar(array(
            'name'          => 'Footer widget 2',
            'id'            => 'qr_widget_two',
            'before_widget' => '<div class="col-12 col-sm-6 col-md-6 col-lg-3">',
            'after_widget'  => '</div>',
        ));
        register_sidebar(array(
            'name'          => 'Footer widget 3',
            'id'            => 'qr_widget_three',
            'before_widget' => '<div class="col-12 col-sm-6 col-md-6 col-lg-3">',
            'after_widget'  => '</div>',
        ));
        register_sidebar(array(
            'name'          => 'Footer widget 4',
            'id'            => 'qr_widget_four',
            'before_widget' => '<div class="col-12 col-sm-6 col-md-6 col-lg-3">',
            'after_widget'  => '</div>',
        ));
        register_sidebar(array(
            'name'          => 'Proud Member 1',
            'id'            => 'qr_widget_member_one',
            'before_widget' => '<div class="col">',
            'after_widget'  => '</div>',
        ));
        register_sidebar(array(
            'name'          => 'Proud Member 2',
            'id'            => 'qr_widget_member_two',
            'before_widget' => '<div class="col">',
            'after_widget'  => '</div>',
        ));
        register_sidebar(array(
            'name'          => 'FProud Member 3',
            'id'            => 'qr_widget_member_tree',
            'before_widget' => '<div class="col">',
            'after_widget'  => '</div>',
        ));
    }
    add_action( 'widgets_init', 'quercus_add_widgets' );