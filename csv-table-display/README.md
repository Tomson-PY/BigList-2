# CSV Table Display WordPress Plugin

This plugin allows you to display data from a CSV file as a responsive and styled table on your WordPress website.

## Installation

1. Upload the `csv-table-display` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to Settings > CSV Table Display to configure the plugin.

## Usage

Use the shortcode `[csv_table]` in your posts or pages to display the table. By default, it will look for a file named `data.csv` in the specified CSV directory.

To use a different CSV file, you can specify it in the shortcode:

```
[csv_table file="your-file.csv"]
```

## Configuration

1. Go to Settings > CSV Table Display in your WordPress admin panel.
2. Set the CSV Directory path. This should be the full server path to the directory containing your CSV files.

## Troubleshooting

- If you see an error message saying "CSV file not found", make sure the file exists in the specified directory and has the correct permissions.
- If the table is not displaying correctly, check that your CSV file is properly formatted with consistent column counts across all rows.

## Support

For support or feature requests, please open an issue on the plugin's GitHub repository.