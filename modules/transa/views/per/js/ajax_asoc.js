//función
$(document).ready(function(){    
    
    var getCBCo = function(){
        $.post(_root_ + 'transa/per/gcb','co=' + $("#co").val(), function(datos){
            $("#cb").html('');//vamos a limpiar el select de ciudad
            $("#cb").append('<option value="">-Seleccione-</option>');
            $("#cb").append('<option value="sr">Sin relación</option>');
            for(var i = 0; i < datos.length; i++){
                $("#cb").append('<option value="' + datos[i].a + '">' + datos[i].b + '</option>');
            }
        }, 'json');
    }; 
    
    
    $("#co").change(function(){
        if(!$("#co").val()){// si el select tiene value cero
            $("#cb").html('');
        }else{
            getCBCo();
        }
    });
});