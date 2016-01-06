<?php
/**
Plugin Name: Preload & Pjax Faster Page Load
Plugin URI: http://wordpress.org/extend/plugins/wp-preload-pjax/
Description: About 0.5 seconds faster page load of the site, even after you've taken the various means for faster site, without making any changes.
Version: 0.4.3
Author: falsandtru
Author URI: https://github.com/falsandtru
License: GPL2
*/
/*	Copyright 2014 falsandtru

		This program is free software; you can redistribute it and/or modify
		it under the terms of the GNU General Public License, version 2, as
		published by the Free Software Foundation.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.	See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program; if not, write to the Free Software
		Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA	02110-1301	USA
*/


function WP_PRELOAD_PJAX(){
	wp_enqueue_script( 'preload', plugins_url().'/wp-preload-pjax/jquery.preload.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'pjax', plugins_url().'/wp-preload-pjax/jquery.pjax.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'WP-PRELOAD-PJAX', plugins_url().'/wp-preload-pjax/accelerate.js', array('preload', 'pjax'), false, true );
}
if ( !is_admin() ) add_action( 'init', 'WP_PRELOAD_PJAX' );
