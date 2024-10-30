<?php
/*
Plugin Name: Featured Member Widget
Plugin URI: http://jeffsayre.com/2010/05/05/buddypress-featured-members-plugin-widget-re-released/
Description: This BuddyPress widget lets you choose one or more members to feature
Version: 1.2
Revision Date: May 5, 2010
Requires at least: WP/MU 2.9.2, BuddyPress 1.2.3
Tested up to: WP/MU 2.9.2, BuddyPress 1.2.3
License: GNU General Public License 3.0 (GPL) http://www.gnu.org/licenses/gpl.html
Author: Jeff Sayre
Author URI: http://jeffsayre.com/
Site Wide Only: true

Copyright 2009, 2010 Jeff Sayre

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3.0 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/**
 * bp_featured_members_widget_load()
 *
 * Only load the Featured Member(s) Widget if BuddyPRess is installed
 * and activated. 
 */
function bp_featured_members_widget_load() {
	
	/* Define the component's current version */
	define( 'WP_FEATURED_MEMBERS_PLUGIN_VERSION', 1.2 );
		
	/* Define the component's parent folder name */
	define( 'WP_FEATURED_MEMBERS_PLUGIN_NAME', 'buddypress-featured-members-widget' );
	
	require( dirname( __FILE__ ) . '/bp-featured-members-widget.php' );
}
add_action( 'bp_init', 'bp_featured_members_widget_load' );

?>