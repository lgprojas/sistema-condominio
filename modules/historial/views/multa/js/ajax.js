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
        
        $.post(_root_ + 'historial/multa/pav', pagina + co + cb + registros, function(data){
            $('#lista_registros').html('');
            $('#lista_registros').html(data);
        });
    }
    
    $("#co").change(function(){
        $.post(_root_ + 'historial/multa/gcbv','co=' + $("#co").val(),function(datos){
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
        $.post(_root_ + 'historial/multa/getCBCond','cond=' + $("#cond").val(), function(datos1){
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
    
//Datepicker
		$( "#fchi" ).datepicker({
			inline: true,
                       monthNames:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
                       monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                       dayNamesShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
                       dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                       dateFormat: "dd-mm-yy"
                       
		});  
                $( "#fchp" ).datepicker({
			inline: true,
                       monthNames:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
                       monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                       dayNamesShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
                       dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                       dateFormat: "dd-mm-yy"
                       
		}); 
        
var getTMul = function(){
        $.post(_root_ + 'historial/multa/gettmul','ctmul=' + $("#ctmul").val(), function(datos){
            $("#tmul").html('')//vamos a limpiar el select de ciudad
            $("#tmul").append('<option value="">-Seleccione-</option>')
            for(var i = 0; i < datos.length; i++){
                $("#tmul").append('<option value="' + datos[i].a + '">' + datos[i].b + '</option>');
            }
        }, 'json');
    }  
//evento
    $("#ctmul").change(function(){
        if(!$("#ctmul").val()){// si el select tiene value cero
            $("#tmul").html('');//muestra ciudad vacio
        }else{
            getTMul();//sino muestra ciudades relacionadas
        }
    }); 
//------------------------------------------------------------------------------    
    $(document).on("click","#btn_savem", function () {
        
            if(confirm("¿Desea registrar esta multa?")) {  
                    showPleaseWait();

                    var valores = "";
                    var cod = 'cod='+$("#cod").val();
                    var fchi = '&fi='+$("#fchi").val();
                    var nota = '&n='+$("#nota").val();  
                    var fchp = '&fp=' + $("#fchp").val();
                    var m = '&m='+$("#m").val();
                    var tmul = '&tmul='+$("#tmul").val();
                    var viv = '&viv='+$("#viv").val();
                        valores = cod + fchi + nota + fchp + m + tmul + viv;                    
                    $.ajax({
                            type: "POST",
                            url: _root_ + 'historial/multa/smv',
                            data: valores,
                            success: function(data){ 
                                if(data["valor"] === "0"){
                                  hidePleaseWait();
                                  $('#mssg').html('<div class="alert alert-warning"><a class="close" data-dismiss="alert">x</a>' + data["mssg"] +'</div>');                                    
                                }
                                if(data["valor"] === "1"){
                                  var url = _root_ + 'historial/multa/indexMultas/' + data["r1"] +'/'+data["r2"]; 
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
        $("#cod").val();
        $("#fchi").val();
        $("#nota").val();  
        $("#fchp").val();
        $("#m").val();
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
    }, 3000);
}
//------------------------------------------------------------------------------
});