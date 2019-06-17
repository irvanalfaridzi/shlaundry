let Employees = {
    init: function () {
        $('#modalDelete-employee').on('show.bs.modal', function (event){
            
            var button = $(event.relatedTarget);
            var id = button.data('id');

            var modal = $(this);

            modal.find('.modal-footer #id').val(id);

        });

        $('#employee_table').DataTable({
            "scrollY": 450,
            "scrollX": true
        });
    }
};

jQuery(document).ready(function () {
    Employees.init();
});