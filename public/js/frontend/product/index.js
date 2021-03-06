let Products = {
    init: function () {
        $('#modalEdit-product').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget);
            var name = button.data('name');
            var id = button.data('id');
            var category = button.data('category');

            var modal = $(this);

            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #category').val(category);

        });

        $('#modalDelete-category').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');

            var modal = $(this);

            modal.find('.modal-footer #id').val(id);

        });

        $('#modalDelete-product').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');

            var modal = $(this);

            modal.find('.modal-footer #id').val(id);

        });

        $('#categories_table').DataTable({
            "scrollY": 400,
            "scrollX": true
        });

        $('#products_table').DataTable({
            "scrollY": 400,
            "scrollX": true
        });
    }
};

jQuery(document).ready(function () {
    Products.init();
});