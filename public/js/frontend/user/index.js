let Users = {
    init: function () {
        $('#modalEdit-role').on('show.bs.modal', function (event){
            
            var button = $(event.relatedTarget);
            var name = button.data('name');
            var id = button.data('id');

            var modal = $(this);

            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #id').val(id);

        });

        $('#modalDelete-user').on('show.bs.modal', function (event){
            
            var button = $(event.relatedTarget);
            var id = button.data('id');

            var modal = $(this);

            modal.find('.modal-footer #id').val(id);

        });

        $('#modalDelete-role').on('show.bs.modal', function (event){
            
            var button = $(event.relatedTarget);
            var id = button.data('id');

            var modal = $(this);

            modal.find('.modal-footer #id').val(id);

        });

        $('#user_table').DataTable({
            "scrollY": 250,
            "scrollX": true
        });
    }
};

jQuery(document).ready(function () {
    Users.init();
});