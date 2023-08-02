//función
$(document).ready(function(){

    $(document).on("click",".pagina", function(){
        paginacion($(this).attr('pagina'));
    });
    
    var paginacion = function(pagina){
        var pagina = 'pagina=' + pagina;
        var co = '&co=' + $("#c").val();
        var registros = '&registros=' + $("#registros").val();
        
        $.post(_root_ + 'historial/observacion/pafo', pagina + co + registros, function(data){
            $('#lista_registros').html('');
            $('#lista_registros').html(data);
        });
    };
    
    $("#c").change(function(){
        paginacion();
    });
    
    $("#registros").change(function(){
        paginacion();
    }); 
    
//Datetimepicker


//    $(function(){
//        $('#fecha').datetimepicker();
//    });

//Datepicker
		$( "#fchi" ).datetimepicker({
			inline: true,
                       monthNames:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
                       monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                       dayNamesShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
                       dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                       dateFormat: "dd-mm-yy",
                       timeFormat: 'HH:mm:ss',
                       closeText: 'Listo',
                       currentText: 'Ahora',
                       timeText: 'Tiempo',
			hourText: 'Hora',
			minuteText: 'Minuto',
                        maxDate: "+0m +0d"
                       
		});                   
//------------------------------------------------------------------------------    
    $(document).on("click","#btn_saveobs", function () {
        
            if(confirm("¿Desea registrar esta observación?")) {  
                    showPleaseWait();

                    var valores = "";
                    var c = 'co='+$("#co").val();
                    var fi = '&fi='+$("#fchi").val();
                    var n = '&n='+$("#n").val();  
                    var to = '&to=' + $("#tobs").val();
                        valores = c + fi + n + to;                    
                    $.ajax({
                            type: "POST",
                            url: _root_ + 'historial/observacion/soc',
                            data: valores,
                            success: function(data){ 
                                if(data["valor"] === "0"){
                                  hidePleaseWait();
                                  $('#mssg').html('<div class="alert alert-warning"><a class="close" data-dismiss="alert">x</a>' + data["mssg"] +'</div>');                                    
                                }
                                if(data["valor"] === "1"){
                                  var url = _root_ + 'historial/observacion'; 
                                  $(location).attr('href',url);
                                  hidePleaseWait();
                                }
                            }
                    }); 
            };
    });
//------------------------------------------------------------------------------

    $('#limpiar_modal1').on('click', function() {
        $("#form_modal1")[0].reset();
        $("#c").val();
        $("#fchi").val();
        $("#n").val();  
        $("#to").val();
        //$("#tmul").html('');
        $('#mssg').html('');
    });
    
//------------------------------------------------------------------------------
function showPleaseWait() {
     waitingDialog.show('Procesando...');
     //waitingDialog.show('Custom message', {dialogSize: 'sm', progressType: 'warning'});

}
function hidePleaseWait() {
        setTimeout(function () {
      waitingDialog.hide();
    }, 1000);
}
//------------------------------------------------------------------------------
});