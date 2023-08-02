//función
$(document).ready(function(){    
    
    var getvcb = function(){
        $.post(_root_ + 'transa/per/gvcb','cb=' + $("#cb").val() + '&co=' + $("#co").val(), function(datos){
            $("#viv").html('');//vamos a limpiar el select de ciudad
            $("#viv").append('<option value="">-Seleccione-</option>');
            for(var i = 0; i < datos.length; i++){
                $("#viv").append('<option value="' + datos[i].c + '">' + datos[i].d + '-' + datos[i].e + '</option>');
            }
        }, 'json');
    }; 
    
    
    $("#cb").change(function(){
        if(!$("#cb").val()){// si el select tiene value cero
            $("#viv").html('');
        }else{
            getvcb();
        }
    });
    
});