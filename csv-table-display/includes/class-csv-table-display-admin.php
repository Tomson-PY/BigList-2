<?php
class CSV_Table_Display_Admin {
    public function run() {
        add_action('admin_menu', array($this, 'add_settings_page'));
        add_action('admin_init', array($this, 'register_settings'));
    }

    public function add_settings_page() {
        add_options_page(
            __('CSV Table Display Settings', 'csv-table-display'),
            __('CSV Table Display', 'csv-table-display'),
            'manage_options',
            'csv-table-display',
            array($this, 'render_settings_page')
        );
    }

    public function register_settings() {
        register_setting('csv_table_display_settings', 'csv_table_display_directory');
    }

    public function render_settings_page() {
        ?>
        <div class="wrap">
            <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
            <form action="options.php" method="post">
                <?php
                settings_fields('csv_table_display_settings');
                do_settings_sections('csv_table_display_settings');
                ?>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row"><?php _e('CSV Directory', 'csv-table-display'); ?></th>
                        <td>
                            <input type="text" name="csv_table_display_directory" value="<?php echo esc_attr(get_option('csv_table_display_directory', WP_CONTENT_DIR . '/uploads/csv-data/')); ?>" class="regular-text" />
                            <p class="description"><?php _e('Enter the full server path to the directory containing your CSV files.', 'csv-table-display'); ?></p>
                        </td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    }
}