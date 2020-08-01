
$(document).ready(function(){
    const { toSafeInteger } = require("lodash");

notificaciones: function(mensaje, titulo, tipo){
    toSafeInteger.options = {
        claseButton: true,
        newestOnTop: true,
        positionClass: 'toast-top-right',
        preventDuplicates: true,
        timeOut: '5000'
    };
    if(tipo =='error'){
        toastr.error(mensaje, titulo);
    } else if(tipo == 'success' ){
        toastr.info(mensaje, titulo);
    } else if(tipo == 'warning'){
        toastr.warning(mensaje, titulo);
    }
}


});
