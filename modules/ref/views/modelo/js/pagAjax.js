$(document).on('ready', function(){
    //$('.pagina').click(function(){
    //    paginacion($(this).attr('pagina'));
    //});
    
    $(document).on("click",".pagina", function(){
        paginacion($(this).attr('pagina'));
    });
    
    var paginacion = function(pagina){
        var pagina = 'pagina=' + pagina;
        var nombre = '&nombre=' + $("#nombre").val();
        var marca = '&marca=' + $("#marca").val();
        var registros = '&registros=' + $("#registros").val();
        
        $.post(_root_ + 'ref/modelo/pa', pagina + nombre + marca + registros, function(data){
            $('#lista_registros').html('');
            $('#lista_registros').html(data);
        });
    }
    
    $("#btnEnviar").click(function(){
        paginacion();
    });
    
    $("#marca").change(function(){
            paginacion();
    });
    
    $("#registros").change(function(){
        paginacion();
    });
});
