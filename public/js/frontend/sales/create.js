let CreateSales = {
    init: function () {

        $('#products_table').DataTable({
            "scrollY": 300,
            "scrollX": true
        });

        $('.btn-select').click(function () {
            var $row = $(this).closest("tr"),
                $code = $row.find("td:nth-child(2)"),
                $name = $row.find("td:nth-child(3)"),
                $category = $row.find("td:nth-child(4)"),
                $price = $row.find("td:nth-child(5)")

    
            $.each($code, function () {
                $('#item_code').val($(this).text())
            });
            $.each($name, function () {
                $('#item_name').val($(this).text())
            });
            $.each($category, function () {
                $('#item_category').val($(this).text())
            });
            $.each($price, function () {
                $('#price').val($(this).text())
            });
        })

        $("#products_table").on('click', '.btnDelete', function () {
            $(this).closest('tr').remove();
        });
    }
};

jQuery(document).ready(function () {
    CreateSales.init();
});