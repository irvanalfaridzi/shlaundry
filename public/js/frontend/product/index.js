$(document).ready( function () {
    $('#categories_table').DataTable({
        "scrollY": 200,
        "scrollX": true
    });

    $('#units_table').DataTable({
        "scrollY": 200,
    });

    $('#products_table').DataTable({
        "scrollY": 400,
        "scrollX": true
    });

} );