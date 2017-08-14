<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   custom-post-edit
 * @author    Christopher Churchill <churchill.c.j@gmail.com>
 * @license   GPL-2.0+
 * @link      http://buildawebdoctor.com
 * @copyright 10-9-2014 http://buildawebdoctor.com
 */

// If uninstall, not called from WordPress, then exit
if (!defined("WP_UNINSTALL_PLUGIN")) {
	exit;
}

// TODO: Define uninstall functionality here