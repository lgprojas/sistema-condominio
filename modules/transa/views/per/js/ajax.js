//función
$(document).ready(function(){

    $(document).on("click",".pagina", function(){
        paginacion($(this).attr('pagina'));
    });
    
    var paginacion = function(pagina){
        var pagina = 'pagina=' + pagina;
        var ape = '&ape=' + $("#ape").val();
        var co = '&co=' + $("#co").val();
        var cb = '&cb=' + $("#cb").val();
        var registros = '&registros=' + $("#registros").val();
        
        $.post(_root_ + 'transa/per/pa', pagina + ape + co + cb + registros, function(data){
            $('#lista_registros').html('');
            $('#lista_registros').html(data);
        });
    }
    
//    $("#co").change(function(){
//        $.post(_root_ + 'transa/per/gcb','co=' + $("#co").val(),function(datos){
//            $("#cb").html('<option value=""> - seleccione calle/Block - </option>');
//            
//            for(var i = 0; i < datos.length; i++){
//                $("#cb").append('<option value="' + datos[i].a + '">' + datos[i].b + '</option>');
//            }
//            
//        }, 'json');
//        
//        $("#cb").val('');
//        
//        paginacion();
//    });
    
    $("#btnEnviar").click(function(){
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

    var getVivisCond = function(){
        $.post(_root_ + 'transa/per/getVivisCond','cond=' + $("#cond").val(), function(datos1){
            $("#viv").html('')//vamos a limpiar el select de ciudad
            $("#viv").append('<option value="">-Seleccione-</option>')
            for(var i = 0; i < datos1.length; i++){
                $("#viv").append('<option value="' + datos1[i].a + '">' + datos1[i].b + '-' + datos1[i].c +'</option>');
            }
        }, 'json');
    }  
    var getVehiCond = function(){
        $.post(_root_ + 'transa/per/getVehisCond','cond=' + $("#cond").val(), function(datos2){
            $("#vehi").html('')//vamos a limpiar el select de ciudad
            $("#vehi").append('<option value="">-Seleccione-</option>')
            for(var i = 0; i < datos2.length; i++){
                $("#vehi").append('<option value="' + datos2[i].a + '">' + datos2[i].b + '-' + datos2[i].c +'['+ datos2[i].d +']</option>');
            }
        }, 'json');
    }  
//evento
    $("#cond").change(function(){
        if(!$("#cond").val()){// si el select tiene value cero
            $("#viv").html('<option value="">-Seleccione-</option>')
            $("#vehi").html('<option value="">-Seleccione-</option>')
        }else{
            getVivisCond();//
            getVehiCond();
        }
    });  
    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    
});