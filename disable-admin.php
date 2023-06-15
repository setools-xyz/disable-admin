<?php
/**
 * Plugin Name: Disable Admin Bar
 * Description: This Plugin disables admin bar in front end
 * Version:     0.1
 * Requires at least: 4.9
 * Requires PHP: 5.6 or later
 */

 // Remove the admin bar from the front end
 add_filter('show_admin_bar', '__return_false');
