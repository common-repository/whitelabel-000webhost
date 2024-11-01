<?php

/**
 * The plugin bootstrap file
 *
 * @package           whitelabel-000webhost
 * @author            Expertwolf
 * @license           GPL-2.0
 *
 * Plugin Name:       Whitelabel for 000webhost
 * Plugin URI:        https://github.com/sakthiwebdev/whitelabel-000webhost
 * Description:       Remove or Disable 000webhost Branding & Ad promotions on both Wordpress Front-end & Back-end.
 * Version:           1.1
 * Author:            Expertwolf
 * Author URI:        https://expertwolf.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       whitelabel-000webhost
**/
/*
This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see <https://www.gnu.org/licenses/>.
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

class whitelabel_000webhost
{	
	function __construct() 
	{
    	add_action('wp_enqueue_scripts',array( $this,'enqueue_front_scripts_and_styles'));  
    	add_action('admin_enqueue_scripts',array( $this,'enqueue_back_scripts_and_styles'));
    	add_action('login_enqueue_scripts',array( $this,'enqueue_login_scripts_and_styles'));

    }
	
	//Adding JS/CSS in the Front End
	function enqueue_front_scripts_and_styles()
	{
        wp_enqueue_style('wwh_styles', plugins_url('/public/custom.css', __FILE__));
        wp_enqueue_script('wwh_script', plugins_url( '/public/custom.js' , __FILE__ ), array('jquery','jquery-ui-droppable','jquery-ui-draggable', 'jquery-ui-sortable'));
    }

	//Adding JS/CSS in WP Admin Area
	function enqueue_back_scripts_and_styles()
	{
        wp_enqueue_style('wwh_styles', plugins_url('/admin/custom.css', __FILE__));
        wp_enqueue_script('wwh_script', plugins_url( '/admin/custom.js' , __FILE__ ), array('jquery','jquery-ui-droppable','jquery-ui-draggable', 'jquery-ui-sortable'));
    }

    //Adding JS/CSS in Login Admin Area
	function enqueue_login_scripts_and_styles()
	{
        wp_enqueue_style('wwh_styles', plugins_url('/login/custom.css', __FILE__));
        wp_enqueue_script('wwh_script', plugins_url( '/login/custom.js' , __FILE__ ), array('jquery','jquery-ui-droppable','jquery-ui-draggable', 'jquery-ui-sortable'));
    }
}

new whitelabel_000webhost();