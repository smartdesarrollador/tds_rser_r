$(document).ready(function(){
    $("#tabla-data").on('submit','form-eliminar', function(){
        event.preventDefault();
        const form = $(this);
        swal({
            title: '¿ Esta seguro que desea eliminar el registro',
            text: 'Esta acción no se puede deshacer!',
            icon: 'warning',
            buttons: {
                cancel: "Cancelar",
                Confirm: "Aceptar"
            }, 
        }).then((value) => {
            if(value) {
                ajaxRequest(form);
            }
        });
    });

    function ajaxRequest(form) {
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            success: function(respuesta){
                form.parents('tr').remove();
                Biblioteca.notificaciones('El registro fue eliminado correctamente', 'Biblioteca','success');
            } else{
                Biblioteca.notificaciones('El registro no pudo ser eliminado, hay recursos usandolo', 'Biblioteca', 'error');
            },
            error: function(){

            }
        });
    }

});