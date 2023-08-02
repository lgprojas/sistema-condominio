//función
$(document).ready(function(){

    var getCB = function(){
        $.post(_root_ + 'buscar/viv/getCB','cond=' + $("#cond").val(),function(datos1){
            $("#cb").html('')//vamos a limpiar el select de ciudad
            $("#cb").append('<option value="">-Seleccione sector-</option>')
            for(var i = 0; i < datos1.length; i++){
                        $("#cb").append('<option value="' + datos1[i].a + '">' + datos1[i].b + '</option>');                   
            }
        }, 'json');
    };
    
//evento
    $("#cond").change(function(){
        if(!$("#cond").val()){// si el select tiene value cero
            $("#cb").html('');//muestra ciudad vacio
        }else{
            getCB();//sino muestra ciudades relacionadas
        }
    });

    var getNum = function(){
        $.post(_root_ + 'buscar/viv/getNumViv','cb=' + $("#cb").val(), function(datos2){
            $("#num").html('')//vamos a limpiar el select de ciudad
            $("#num").append('<option value="">-Seleccione-</option>')
            for(var i = 0; i < datos2.length; i++){
                $("#num").append('<option value="' + datos2[i].a + '">' + datos2[i].b + '</option>');
            }
        }, 'json');
    }  
//evento
    $("#cb").change(function(){
        if(!$("#cb").val()){// si el select tiene value cero
            $("#cb").html('');//muestra ciudad vacio
        }else{
            getNum();//sino muestra ciudades relacionadas
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
                
//------------------------------------------------------------------------------    
    $(document).on("click","#btn_savem", function () {
        
            if(confirm("¿Desea aplicar esta multa a la vivienda?")) {  
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
                            url: _root_ + 'buscar/viv/smbv',
                            data: valores,
                            success: function(data){ 
                                if(data["valor"] === "0"){
                                  hidePleaseWait();
                                  $('#mssg').html('<div class="alert alert-warning"><a class="close" data-dismiss="alert">x</a>' + data["mssg"] +'</div>');                                    
                                }
                                if(data["valor"] === "1"){
                                  var url = _root_ + 'buscar/viv/'; 
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