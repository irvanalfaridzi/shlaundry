let Products = {
    init: function () {
        $('#modalEdit-category').on('show.bs.modal', function (event){
            
            var button = $(event.relatedTarget);
            var name = button.data('name');
            var id = button.data('id');

            var modal = $(this);

            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #id').val(id);

        });

        $('#modalEdit-unit').on('show.bs.modal', function (event){
            
            var button = $(event.relatedTarget);
            var name = button.data('name');
            var id = button.data('id');

            var modal = $(this);

            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #id').val(id);

        });

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
    }
};

jQuery(document).ready(function () {
    Products.init();
});