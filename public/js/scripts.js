
//modal formulari


//
$('#flexCheckDefault').change(function(){
    if ($('#flexCheckDefault').is(':checked') == true){
        $('#selectFormCursa').val('160').prop('disabled', true);
    } else {
        $('#selectFormCursa').val('').prop('disabled', false);
    }
});



$(document).ready(function() {
    $('.table').DataTable({
        "language": {
            "search": "Buscador:",
            "paginate": {
                "first": "Primer",
                "last": "Ultim",
                "next": "Seguent",
                "previous": "Anterior"
            },
            "aria": {
                "sortAscending": ": Filtra ascendent",
                "sortDescending": ": Filtra descendent"
            },
            "processing": "carregant",
            "loadingRecords": "Carregan...",
            "lengthMenu": "Mostra _MENU_ Entrades",
            "emptyTable": "Taula vuida",
            "zeroRecords": "No s'han trobat registres",
            "info": "Mostran _PAGE_ - _PAGES_ de _PAGES_ pagines",
        },
    });
});