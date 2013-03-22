<?php
/* Plugin Name: Chart.js Embed
 * Plugin URI: https://github.com/psmagicman/chartjs-embed
 * Description: Embeds the Chart.js library made by Nick Downie
 * Version: 1.0
 * Author: Julien Law
 * Author URI: https://github.com/psmagicman/chartjs-embed
 * Author Email: julien.law@ubc.ca
 * License:
 *
 *
 *  Copyright 2013 Julien Law (julien.law@ubc.ca)
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
        add_action( 'wp_head', array( __CLASS__, 'header_print_script' ) );
 		add_action( 'wp_footer', array( __CLASS__, 'footer_print_script' ) );
 	}

 	public function register_script() {
 		wp_register_script( 'embed-chart-js', plugins_url( 'js/Chart.min.js', __FILE__ ), array('jquery'), '1.0', false );
 		wp_register_script( 'embed-chart-js-json', plugins_url( 'js/component.json', __FILE__ ), array('jquery'), '1.0', true );
 	}

    public function header_print_script() {
        wp_print_scripts( 'embed-chart-js' );
    }

 	public function footer_print_script() {
 		wp_print_scripts( 'embed-chart-js-json' );
 	}

 }

 $chartjsembed = new ChartJSEmbed();
