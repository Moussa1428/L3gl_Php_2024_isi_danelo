// DataTables configuration
$.extend(true, $.fn.dataTable.defaults, {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json'
    },
    pageLength: 10,
    processing: true,
    responsive: true
});

// Initialize DataTables
$(document).ready(function() {
    const tables = $('.datatable').each(function() {
        const table = $(this);
        const ajaxUrl = table.data('ajax-url');

        if (ajaxUrl) {
            table.DataTable({
                ajax: {
                    url: ajaxUrl,
                    beforeSend: function() {
                        $('.spinner-overlay').css('display', 'flex');
                    },
                    complete: function() {
                        $('.spinner-overlay').hide();
                    }
                },
                columns: JSON.parse(table.attr('data-columns'))
            });
        } else {
            table.DataTable();
        }
    });
});

// Sidebar toggle for mobile
document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.querySelector('.navbar-toggler');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('show');
        });
    }
});