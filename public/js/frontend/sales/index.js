let Sales = {
    init: function () {

        $('#sales_table').DataTable({
            "scrollY": 450,
            "scrollX": true
        });

        $('#modalDelete-sales').on('show.bs.modal', function (event){
            
            var button = $(event.relatedTarget);
            var id = button.data('id');

            var modal = $(this);

            modal.find('.modal-footer #id').val(id);

        });

    }
};

jQuery(document).ready(function () {
    Sales.init();
});