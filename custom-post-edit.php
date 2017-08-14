<?php
/**
 * custom post edit
 *
 * Frontend post edit using angularJS
 *
 * @package   custom-post-edit
 * @author    Christopher Churchill <churchill.c.j@gmail.com>
 * @license   GPL-2.0+
 * @link      http://buildawebdoctor.com
 * @copyright 10-9-2014 http://buildawebdoctor.com
 *
 * @wordpress-plugin
 * Plugin Name: custom post edit
 * Plugin URI:  http://buildawebdoctor.com
 * Description: Front end edit posts form
 * Version:     1.0.4
 * Author:      Christopher Churchill
 * Author URI:  http://buildawebdoctor.com
 * Text Domain: custom-post-edit-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if (!defined("WPINC")) {
	die;
}

require_once(plugin_dir_path(__FILE__) . "customPostEdit.php");

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook(__FILE__, array("customPostEdit", "activate"));
register_deactivation_hook(__FILE__, array("customPostEdit", "deactivate"));

customPostEdit::get_instance();