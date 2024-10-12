(function($) {
    'use strict';

    $(document).ready(function() {
        $('.csv-table').each(function() {
            var $table = $(this);
            var $headers = $table.find('th');

            $headers.on('click', function() {
                var $header = $(this);
                var order = $header.data('order') === 'asc' ? 'desc' : 'asc';
                var index = $header.index();

                $headers.data('order', '');
                $header.data('order', order);

                var $tbody = $table.find('tbody');
                var $rows = $tbody.find('tr').toArray();

                $rows.sort(function(a, b) {
                    var aValue = $(a).find('td').eq(index).text();
                    var bValue = $(b).find('td').eq(index).text();

                    if ($.isNumeric(aValue) && $.isNumeric(bValue)) {
                        aValue = parseFloat(aValue);
                        bValue = parseFloat(bValue);
                    }

                    if (order === 'asc') {
                        return aValue > bValue ? 1 : -1;
                    } else {
                        return aValue < bValue ? 1 : -1;
                    }
                });

                $tbody.append($rows);
            });
        });
    });
})(jQuery);