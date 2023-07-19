<?php


function mycustom_theme_support(){

    add_theme_support("title-tag");
    // $defaults = array(
	// 	'height'               => 100,
	// 	'width'                => 400,
	// 	'flex-height'          => true,
	// 	'flex-width'           => true,
	// 	'header-text'          => array( 'site-title', 'site-description' ),
	// 	'unlink-homepage-logo' => true, 
	// );
    // add_theme_support( 'custom-logo',$defaults );
    add_theme_support( 'custom-logo' );
    add_theme_support("post-thumbnails");

}

add_action("after_setup_theme" , "mycustom_theme_support");


function mycustom_navbar_menu_fun(){
    $location= array(
        "primary"=>"Sidebar Nav Menu",
        "footer"=>"footer menu"
    );
    register_nav_menus($location);

}

add_action("init" , "mycustom_navbar_menu_fun");

function mycustomtheme_styles_fun()
{

    $path = get_template_directory_uri() . "/style.css";

    $dep = array("My_custom_style_boostrap");
    $ver = wp_get_theme()->get("Version");

    wp_enqueue_style("My_custom_style", $path, $dep, $ver, "all");
    wp_enqueue_style("My_custom_style_boostrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), $ver, "all");
    wp_enqueue_style("My_custom_style_fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), $ver, "all");

    wp_enqueue_script("my_custom_script_jquery", "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", true);
    wp_enqueue_script("my_custom_script_popper", "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "3.4.1", true);
    wp_enqueue_style("my_custom_script_bootstrapcdn", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "3.4.1", true);
    wp_enqueue_script("my_custom_script_myjs", get_template_directory_uri() . "/assets/js/main.js", array(), "1.0", true);

}

add_action("wp_enqueue_scripts", "mycustomtheme_styles_fun");

function mycustomtheme_script_fun()
{

   
    wp_enqueue_script("my_custom_script_jquery", "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", true);
    wp_enqueue_script("my_custom_script_popper", "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "1.16.0", true);
    wp_enqueue_style("my_custom_script_bootstrapcdn", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "4.4.1", true);
    wp_enqueue_script("my_custom_script_myjs", get_template_directory_uri() . "/assets/js/main.js", array(), "1.0", true);

}


add_action("wp_enqueue_scripts", "mycustomtheme_script_fun");





?>