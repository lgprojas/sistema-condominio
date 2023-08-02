//función
$(document).ready(function(){    

    var getvecb = function(){
        $.post(_root_ + 'transa/per/gvecb','cb=' + $("#cb").val() + '&co=' + $("#co").val(), function(datos){
            $("#vehi").html('');//vamos a limpiar el select de ciudad
            $("#vehi").append('<option value="">-Seleccione-</option>');
            for(var i = 0; i < datos.length; i++){
                $("#vehi").append('<option value="' + datos[i].c + '">' + datos[i].d + '</option>');
            }
        }, 'json');
    }; 
    
    
    $("#cb").change(function(){
        if(!$("#cb").val()){// si el select tiene value cero
            $("#vehi").html('');
        }else{
            getvecb();
        }
    });
    
});