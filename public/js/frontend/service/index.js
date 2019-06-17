let Services = {
    init: function () {
        $('#modalDelete-service').on('show.bs.modal', function (event){
            
            var button = $(event.relatedTarget);
            var id = button.data('id');

            var modal = $(this);

            modal.find('.modal-footer #id').val(id);

        });

        $('#service_table').DataTable({
            "scrollY": 450,
            "scrollX": true
        });
    }
};

jQuery(document).ready(function () {
    Services.init();
});