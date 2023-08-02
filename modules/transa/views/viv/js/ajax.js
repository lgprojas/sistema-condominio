//función
$(document).ready(function(){

    $(document).on("click",".pagina", function(){
        paginacion($(this).attr('pagina'));
    });
    
    var paginacion = function(pagina){
        var pagina = 'pagina=' + pagina;
        var co = '&co=' + $("#co").val();
        var cb = '&cb=' + $("#cb").val();
        var registros = '&registros=' + $("#registros").val();
        
        $.post(_root_ + 'transa/viv/pav', pagina + co + cb + registros, function(data){
            $('#lista_registros').html('');
            $('#lista_registros').html(data);
        });
    }
    
    $("#co").change(function(){
        $.post(_root_ + 'transa/viv/gcbv','co=' + $("#co").val(),function(datos){
            $("#cb").html('<option value=""> - seleccione calle/Block - </option>');
            
            for(var i = 0; i < datos.length; i++){
                $("#cb").append('<option value="' + datos[i].a + '">' + datos[i].b + '</option>');
            }
            
        }, 'json');
        
        $("#cb").val('');
        
        paginacion();
    });
    
    $("#co").change(function(){
            paginacion();
    });
    
    $("#cb").change(function(){
            paginacion();
    });
    
    $("#registros").change(function(){
        paginacion();
    });

    var getCBCond = function(){
        $.post(_root_ + 'transa/viv/getCBCond','cond=' + $("#cond").val(), function(datos1){
            $("#cb").html('')//vamos a limpiar el select de ciudad
            $("#cb").append('<option value="">-Seleccione-</option>')
            for(var i = 0; i < datos1.length; i++){
                $("#cb").append('<option value="' + datos1[i].a + '">' + datos1[i].b + '</option>');
            }
        }, 'json');
    }  
//evento
    $("#cond").change(function(){
        if(!$("#cond").val()){// si el select tiene value cero
            $("#cb").html('<option value="">-Seleccione-</option>')
        }else{
            getCBCond();
        }
    });  
});