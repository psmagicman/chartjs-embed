<?php
/* Plugin Name: Chart.js Embed
 * Plugin URI:
 * Description: test
 * Version: 1.0
 * Author: null
 * Author URI: 
 * Author Email:
 * License:
 *
 *
 *  Copyright 2013 TODO (email@domain.com)
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License, version 2, as 
 *  published by the Free Software Foundation.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

 class ChartJSEmbed {

 	/*
 	 * Initializes the plugin by setting localization, filters, and administration functions
 	 */
 	function __construct() {

 		add_action( 'init', array( __CLASS__, 'register_script' ) );
 		add_action( 'wp_footer', array( __CLASS__, 'print_script' ) );
 	}

 	public function register_script() {
 		wp_register_script( 'embed-chart-js', plugins_url( 'js/Chart.min.js', __FILE__ ), array('jquery'), '1.0', true );
 		wp_register_script( 'embed-chart-js-json', plugins_url( 'js/component.json', __FILE__ ), array('jquery'), '1.0', true );
 	}

 	public function print_script() {
 		wp_print_scripts( 'embed-chart-js-json' );
 		wp_print_scripts( 'embed-chart-js' );
 	}

 }

 $chartjsembed = new ChartJSEmbed();
