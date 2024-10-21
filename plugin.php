<?php
/**
 * Register the theater-production-statistics module to altis
 *
 * @package           figuren-theater/theater-production-statistics
 * @author            figuren.theater
 * @copyright         2023 figuren.theater
 * @license           GPL-3.0+
 *
 * @wordpress-plugin
 * Plugin Name:       figuren.theater | theater production statistics
 * Plugin URI:        https://github.com/figuren-theater/theater-production-statistics
 * Description:       ... like the figuren.theater WordPress Multisite network.
 * Version:           0.1.0-alpha
 * Requires at least: 6.0
 * Requires PHP:      7.1
 * Author:            figuren.theater
 * Author URI:        https://figuren.theater
 * Text Domain:       figurentheater
 * Domain Path:       /languages
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Update URI:        https://github.com/figuren-theater/theater-production-statistics
 */

namespace Figuren_Theater\Production_Statistics;

use function add_action;

const DIRECTORY = __DIR__;

/**
 * REMOVE
 *
 * @todo Add composer autoloading strategy
 */
require_once DIRECTORY . '/inc/.../namespace.php'; // phpcs:ignore WordPressVIPMinimum.Files.IncludingFile.UsingCustomConstant
require_once DIRECTORY . '/inc/namespace.php'; // phpcs:ignore WordPressVIPMinimum.Files.IncludingFile.UsingCustomConstant

add_action( 'init', __NAMESPACE__ . '\\register', 0 );
