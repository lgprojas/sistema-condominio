$(document).ready(function(){

$(document).on("click",".pagina", function(){
        paginacion($(this).attr('pagina'));
    });
    
    var paginacion = function(pagina){
        var pagina = 'pagina=' + pagina;
        var co = '&co=' + $("#co").val();
        var registros = '&registros=' + $("#registros").val();
        
        $.post(_root_ + 'info/index/pco', pagina + co + registros, function(data){
            $('#lista_registros').html('');
            $('#lista_registros').html(data);
        });
    }
    
    $("#co").change(function(){
            paginacion();
    });
    
    $("#registros").change(function(){
        paginacion();
    });

//Datepicker
		$( "#datepicker1" ).datepicker({
			inline: true,
                       monthNames:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
                       monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                       dayNamesShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
                       dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                       dateFormat: "dd-mm-yy"
                       
		});  
                $( "#datepicker2" ).datepicker({
			inline: true,
                       monthNames:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
                       monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                       dayNamesShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
                       dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                       dateFormat: "dd-mm-yy"
                       
		});  
});