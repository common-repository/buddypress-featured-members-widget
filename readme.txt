=== Plugin Name ===
Contributors: jeffsayre
Donate link: http://jeffsayre.com/2010/05/05/buddypress-featured-members-plugin-widget-re-released/
Tags: buddypress, featured members, widget
Requires at least: WP/MU 2.9.2, BuddyPress 1.2.3
Tested up to: WP/MU 2.9.2, BuddyPress 1.2.3
Stable tag: 1.2

This BuddyPress plugin widget lets you choose one or more members to feature.

== Description ==

The Featured Members Widget is a simple BuddyPress plugin widget that allows you to indicate which BuddyPress members you want to feature (via their unique username). You can feature a single member or multiple members.

It uses core BuddyPress CSS selectors for output formatting. So, the output looks like other standard, core BP widgets. If you want to customize the formatting, you'll need to add your own CSS. You may need to do this if you're using a custom theme. If so, you should use the same CSS that positions the other widgets in your theme.

== Installation ==

Like all WP widgets, this widget is managed via the WPMU admin panel. Just download, unzip, and place it in your /plugins folder. However, as this is a BuddyPress-specific widget, it must be activated like other BP plugins. Widget installation is handled this way so that if BuddyPress is not activated, then this plugin widget will not be loaded, which could cause issues with your WP site. The widget does an internal check to see if BuddyPress is activated, if so then it continues loading. If not, it stops loading and will not be visible in the widget gallery. The widget is automatically activated sitewide so your other members will not see it in their plugins section if you're running a multisite install.

<h4>Installation Instructions:</h4>
1. Upload the `buddypress-featured-members-widget` folder to the `/wp-content/plugins/` directory

2. Visit the WPMU admin panel and activate the plugin by visiting the plugins menu and clicking the "Activate" link for the Featured Members Widget plugin. It will automatically be activated sitewide. There is no need to click the Activate Site Wide link.

3. Navigate to "Appearance > Widgets" and drag the Featured Members Widget from the Available Widgets section to the Sidebar

4. Click the widget's "Edit" button (the small grey triangle to the right of the widget's name) to set the available widget parameters

5. You can change the widget's outputted title and add members to be featured by entering their unique username (the name with which they registered), not their display name

== Changelog ==

= 1.2 =
* May 5, 2010
* Refactored code to use the WordPress Widget API
* Applied security enhancement patch
* Featured members are now set by their username and not user_id
* Removed the ability to choose avatar size as BuddyPress now uses new Avatar functions

= 1.1 =
* June 26, 2009
* Switched out deprecated function call bp_fetch_user_fullname() for bp_core_get_user_displayname()
* Applied security enhancement patch http://trac.buddypress.org/changeset/1473/trunk

= 1.0 =
* April 22, 2009
* Initial public release version
* First version in WordPress Plugin Repository

= 0.75 =
* April 2009
* Added ability to choose avatar display size

= 0.5 =
* April 2009
* Initial pre-release version
