<?php

/**
 * @link              http://scottwyden.com
 * @since             1.0.0
 * @package           nextgen_fa_on
 *
 * @wordpress-plugin
 * Plugin Name:       NextGEN Font Awesome On
 * Plugin URI:        http://scottwyden.com/nextgen-fa-on
 * Description:       Activate NextGEN Gallery’s eneque of Font Awesome always on your site. Take advantage of an amazing font library.
 * Version:           1.0.1
 * Author:            Scott Wyden Kivowitz
 * Author URI:        http://scottwyden.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nextgen-fa-on
 */

// Makes sure the plugin is defined before trying to use it
if ( ! function_exists('is_plugin_inactive')) {
    require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
}

// Checks is NextGEN Gallery is installed and active
if (is_plugin_inactive('nextgen-gallery/nggallery.php')) {
    echo '<div class="updated">';
    echo "Please install and activate NextGEN Gallery to allow NextGEN Font Awesome On to work";
    echo '</div>';
}

// Load NextGEN's Font Awesome Constantly */
function enqueue_fa_scripts()
{
  if (class_exists('M_Gallery_Display')) {
    M_Gallery_Display::enqueue_fontawesome();
  }
}
add_action('wp_enqueue_scripts', 'enqueue_fa_scripts');

?>