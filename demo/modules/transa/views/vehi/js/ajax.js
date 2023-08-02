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
        
        $.post(_root_ + 'transa/vehi/pave', pagina + co + cb + registros, function(data){
            $('#lista_registros').html('');
            $('#lista_registros').html(data);
        });
    }
    
    $("#co").change(function(){
        $.post(_root_ + 'transa/vehi/gcbve','co=' + $("#co").val(),function(datos){
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
    

    var getMod = function(){
        $.post(_root_ + 'transa/vehi/getMod','mar=' + $("#mar").val(), function(datos){
            $("#mod").html('')//vamos a limpiar el select de ciudad
            $("#mod").append('<option value="">-Seleccione-</option>')
            for(var i = 0; i < datos.length; i++){
                $("#mod").append('<option value="' + datos[i].a + '">' + datos[i].b + '</option>');
            }
        }, 'json');
    }  
//evento
    $("#mar").change(function(){
        if(!$("#mar").val()){// si el select tiene value cero
            $("#mar").html('');//muestra ciudad vacio
        }else{
            getMod();//sino muestra ciudades relacionadas
        }
    });  
});