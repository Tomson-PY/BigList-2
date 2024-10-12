<?php
/**
 * Plugin Name: CSV Table Display
 * Plugin URI: https://example.com/csv-table-display
 * Description: Displays data from a CSV file as a responsive and styled table.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://example.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: csv-table-display
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Define plugin constants
define('CSV_TABLE_DISPLAY_VERSION', '1.0.0');
define('CSV_TABLE_DISPLAY_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CSV_TABLE_DISPLAY_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include necessary files
require_once CSV_TABLE_DISPLAY_PLUGIN_DIR . 'includes/class-csv-table-display.php';
require_once CSV_TABLE_DISPLAY_PLUGIN_DIR . 'includes/class-csv-table-display-admin.php';

// Initialize the plugin
function csv_table_display_init() {
    $plugin = new CSV_Table_Display();
    $plugin->run();

    if (is_admin()) {
        $admin = new CSV_Table_Display_Admin();
        $admin->run();
    }
}
add_action('plugins_loaded', 'csv_table_display_init');