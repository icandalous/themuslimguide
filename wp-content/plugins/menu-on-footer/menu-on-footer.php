<?php

	/**
 * Modification of "Build a tree from a flat array in PHP"
 *
 * Authors: @DSkinner, @ImmortalFirefly and @SteveEdson
 *
 * @link https://stackoverflow.com/a/28429487/2078474
 */
function buildTree( array &$elements, $parentId = 0 )
{
    $branch = array();
    foreach ( $elements as &$element )
    {
        if ( $element->menu_item_parent == $parentId )
        {
            $children = buildTree( $elements, $element->ID );
            if ( $children )
                $element->wpse_children = $children;

            $branch[$element->ID] = $element;
            unset( $element );
        }
    }
    return $branch;
}

/**
 * Transform a navigational menu to it's tree structure
 *
 * @uses  buildTree()
 * @uses  wp_get_nav_menu_items()
 *
 * @param  String     $menud_id 
 * @return Array|null $tree 
 */
function wpse_nav_menu_2_tree( $menu_id )
{
    $items = wp_get_nav_menu_items( $menu_id );
    return  $items ? buildTree( $items, 0 ) : null;
}


class WPSE_Nav_Menu_Tree extends Walker_Nav_Menu
{
   public $branch = [];

   public function display_element($element, &$children, $max_depth, $depth = 0, $args, &$output )
   {
      if( 0 == $depth )
         $this->branch[$element->ID] = $element;

      if ( isset($children[$element->ID] ) )
         $element->wpse_children = $children[$element->ID];

      parent::display_element($element, $children, $max_depth, $depth, $args, $output);
   }
}


/*
Plugin Name: Menu on footer
Plugin URI: http://www.devsector.ch/index.php/wordpress
Description: Create a simple configurable unrolled menu on your in a widget or in you wp_footer.
Version: 1.3
Author: Cavimaster
Author URI: http://www.devsector.ch/cavimaster
License: Creative Commons Attribution-ShareAlike (GPLv2) //License
*/


//************************************ Options file
$footer_options_page = get_option('siteurl') . '/wp-admin/options-general.php?page=menu-on-footer/options.php';


//************************************ Add admin options
function menu_on_footer_options_page() {
	add_options_page('Menu on Footer Options', 'Menu on Footer', 10, 'menu-on-footer/options.php');
}


//************************************ The script
function menu_on_footer_scripts()
 { 
   $menu_footer_cat_exclude = get_option("menu_footer_cat_exclude");
   $menu_footer_page_exclude = get_option("menu_footer_page_exclude");
   $menu_footer_cat_show = get_option("cat_switch");
   $menu_footer_page_show = get_option("page_switch");
   $menu_footer_cat_depth = get_option("cat_depth");
   $menu_footer_page_depth = get_option("page_depth");
   $menu_footer_cat_orderby = get_option("cat_orderby");
   
     //echo '<div class="content_footer_menu">';
     //echo '<ul class="footer_menu">';
   if ($menu_footer_cat_show =='show'){
     echo  wp_list_categories('depth='.$menu_footer_cat_depth.'&title_li&orderby='.$menu_footer_cat_orderby .'&exclude='.$menu_footer_cat_exclude);
   }
   if ($menu_footer_page_show =='show'){
     echo  wp_list_pages('depth='.$menu_footer_page_depth.'&title_li=&exclude='.$menu_footer_page_exclude);  
   }
     //echo '</ul>';
     //echo '<div class="cleaner"></div>';
     //echo '</div>';
 }
 if (get_option("use_like")=='plugin'){add_action('wp_footer', 'menu_on_footer_scripts');}

//************************************ The widget
class Menu_On_Footer extends WP_Widget {
 
    function Menu_On_Footer()
    {
        parent::WP_Widget(false, $name = 'Menu on footer', array("description" => 'Include an unrolled menu on a widget'));
    }
 
    function widget($args, $instance)
    {

		extract( $args );
		$title = apply_filters('widget_title', $instance['title']);
		echo $before_widget;
		if($title) {echo $before_title . $title . $after_title;}
	 
	   $menu_footer_cat_exclude = get_option("menu_footer_cat_exclude");
	   $menu_footer_page_exclude = get_option("menu_footer_page_exclude");
	   $menu_footer_cat_show = get_option("cat_switch");
	   $menu_footer_page_show = get_option("page_switch");
	   $menu_footer_cat_depth = get_option("cat_depth");
	   $menu_footer_page_depth = get_option("page_depth");
	   $menu_footer_cat_orderby = get_option("cat_orderby");
	   
		// echo '<div class="content_footer_menu">';
		 //echo '<ul class="footer_menu">';
	   if ($menu_footer_cat_show =='show'){
		 //echo  wp_list_categories('depth='.$menu_footer_cat_depth.'&title_li&orderby='.$menu_footer_cat_orderby .'&exclude='.$menu_footer_cat_exclude);
	   }
	   if ($menu_footer_page_show =='show'){
		   //var_dump(wp_list_pages('depth='.$menu_footer_page_depth.'&title_li=&exclude='.$menu_footer_page_exclude));
		 //echo  wp_list_pages('depth='.$menu_footer_page_depth.'&title_li=&exclude='.$menu_footer_page_exclude);  
		 $menuLocations = get_nav_menu_locations(); 
		 $menuID = $menuLocations['primary']; // Get the *primary* menu ID

		//$primaryNav = wp_get_nav_menu_items($menuID);
		 //var_dump(wpse_nav_menu_2_tree( $menuID ));
		 $w = new WPSE_Nav_Menu_Tree;
		$args = (object) [ 'items_wrap' => '', 'depth' => 0, 'walker' => $w ];
		$items = wp_get_nav_menu_items( $menuID);
		walk_nav_menu_tree( $items, $args->depth, $args );
		//var_dump( $w->branch ); 
		foreach($w->branch as $item){
			
				if(isset($item->wpse_children)){
					echo '<div class="nav-column">';
					 echo '<h3><a href="'.$item->guid.'">'.$item->title.'</a></h3>';
					 
					echo '<ul>';
						 foreach($item->wpse_children as $child){
							 echo '<li role="menuitem"><a href="'.$child->guid.'">'.$child->title.'</a></li>';
						 }
					 echo '</ul>';
					echo '</div>';
				}
			
		}
	   }
		 //echo '</ul>';
		 //echo '<div class="cleaner"></div>';
		 //echo '</div>';
		 
		echo $after_widget;
    }
	

    
 
}
add_action('widgets_init', create_function('', 'return register_widget("Menu_On_Footer");'));


//************************************ Add CSS on header
function menuonfooter_CSS() {
echo '<link rel="stylesheet" type="text/css" href="'.WP_PLUGIN_URL .'/menu-on-footer/menu_on_footer.css" media="screen"/>';
}
add_action( 'wp_head', 'menuonfooter_CSS' );


//************************************ Add settings link
function menu_on_footer_settings_link( $links ) {
		$settings_link = '<a href="' . admin_url( 'options-general.php?page=menu-on-footer/options.php' ) . '">' . __('Settings') . '</a>';
		array_unshift( $links, $settings_link ); // before the other links
	return $links;
}
add_filter( 'plugin_action_links_'.plugin_basename(__FILE__), 'menu_on_footer_settings_link' );


//************************************ Install
function menu_on_footer_install()
{ 
	add_option('menu_footer_cat_exclude', '');
	add_option('menu_footer_page_exclude', '');
	add_option('use_like', 'widget');
	add_option('cat_switch', 'show');
	add_option('page_switch', 'show');
	add_option('cat_depth', '0');
	add_option('page_depth', '0');
	add_option('cat_orderby', 'name');
}
add_action('activate_menu-on-footer/menu-on-footer.php', 'menu_on_footer_install');


//************************************ Uninstall
function menu_on_footer_uninstall()
{ 
	delete_option('menu_footer_cat_exclude');
	delete_option('menu_footer_page_exclude');
	delete_option('use_like');
	delete_option('cat_switch');
	delete_option('page_switch');
	delete_option('cat_depth');
	delete_option('page_depth');
	delete_option('cat_orderby');
}
add_action('deactivate_menu-on-footer/menu-on-footer.php', 'menu_on_footer_uninstall');


//************************************ Admin menu
add_action('admin_menu', 'menu_on_footer_options_page');
?>