<?php
class CSV_Table_Display {
    // ... (keep existing code)

    private function generate_table($data) {
        $html = '<div class="csv-table-container company-ratings">';
        $html .= '<table class="csv-table">';
        $html .= '<thead><tr>';
        $html .= '<th>' . esc_html__('Rank', 'csv-table-display') . '</th>';
        $html .= '<th>' . esc_html__('Logo', 'csv-table-display') . '</th>';
        $html .= '<th>' . esc_html__('Company', 'csv-table-display') . '</th>';
        $html .= '<th>' . esc_html__('Rating', 'csv-table-display') . '</th>';
        $html .= '</tr></thead>';
        $html .= '<tbody>';
        for ($i = 1; $i < count($data); $i++) {
            $html .= '<tr>';
            $html .= '<td class="rank">' . esc_html($i) . '</td>';
            $html .= '<td class="logo"><img src="' . esc_url($data[$i][0]) . '" alt="' . esc_attr($data[$i][1]) . ' logo"></td>';
            $html .= '<td class="company">' . esc_html($data[$i][1]) . '</td>';
            $html .= '<td class="rating">' . esc_html($data[$i][2]) . '</td>';
            $html .= '</tr>';
        }
        $html .= '</tbody>';
        $html .= '</table>';
        $html .= '</div>';
        return $html;
    }
}