$(document).ready(function(){ 

//--------------------------------
    $('input[type=checkbox][name=seleprop]').on('click', function(){
            $( "input[type=checkbox][name=selevisita]").attr('checked', false);
    });
    $('input[type=checkbox][name=selevisita]').on('click', function(){
            $( "input[type=checkbox][name=seleprop]").attr('checked', false);
    });
    
    $('#limpiar_modal1').on('click', function() {
        $("#form_modal1")[0].reset();
        $("#trel").html('');
        $('#mssg').html('');
    });
    
    $('#limpiar_modal2').on('click', function() {
        $("#form_modal2")[0].reset();
        $("#trelv").html('');
        $('#mssg2').html('');
    });
//------------------------------------------------------------------------------

    var gettrel = function(){
        $.post(_root_ + 'buscar/run/gettrelrun','viv=' + $("#aviv").val() + '&co=' + $("#co").val(), function(datos){
            $("#trel").html('');
            $("#trel").append('<option value="">-Seleccione-</option>');
            for(var i = 0; i < datos.length; i++){
                $("#trel").append('<option value="' + datos[i].a + '">' + datos[i].b + '</option>');
            }
        }, 'json');
    }  

    $("#aviv").change(function(){
        if(!$("#aviv").val()){
            $("#trel").html('');
        }else{
            gettrel();
        }
    });
    
    $(document).on("click","#btn_save1", function () {
        
            if(confirm("¿Desea registrar esta relación?")) {                         
                    var valores = "";
                    var per = 'per=' + $("#per").val();
                    var viv = '&viv='+$( "#aviv").val();
                    var trel = '&trel='+$( "#trel").val();
                    var co =  '&co=' + $("#co").val();                       
                        valores = per + viv + trel + co;                    
                    $.ajax({
                            type: "POST",
                            url: _root_ + 'buscar/run/addRelPerVivRun',
                            data: valores,
                            success: function(data){ 
                                //alert(data["id"]);
                                if(data["valor"] === "0"){
                                  $('#mssg').html('<div class="alert alert-warning"><a class="close" data-dismiss="alert">x</a>' + data["mssg"] +'</div>');  
                                  $('#aviv').val('');
                                  $('#trel').val('');
                                }
                                if(data["valor"] === "1"){
                                  $('#mssg').html('<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>' + data["mssg"] + '</div>');
                                  $('#aviv').val('');
                                  $('#trel').val('');
                                  $("#selviv").append('<option value="' + data["i"] + '" selected="selected">' + data["r1"] + ' ' + data["r2"] + '</option>');
                                }
                                }
                            }); 
            };
    }); 
    
//------------------------------------------------------------------------------
    
    var gettrelv = function(){
        $.post(_root_ + 'buscar/run/gettrelvrun','vehi=' + $("#avehi").val() + '&co=' + $("#co").val(), function(datos){
            $("#trelv").html('');
            $("#trelv").append('<option value="">-Seleccione-</option>');
            for(var i = 0; i < datos.length; i++){
                $("#trelv").append('<option value="' + datos[i].a + '">' + datos[i].b + '</option>');
            }
        }, 'json');
    }  

    $("#avehi").change(function(){
        if(!$("#avehi").val()){
            $("#trelv").html('');
        }else{
            gettrelv();
        }
    });
    
    $(document).on("click","#btn_save2", function () {
        
            if(confirm("¿Desea registrar esta relación?")) {                         
                    var valores = "";
                    var per = 'per=' + $("#per").val();
                    var vehi = '&vehi='+$( "#avehi").val();
                    var trelv = '&trelv='+$( "#trelv").val();
                    var co =  '&co=' + $("#co").val();                       
                        valores = per + vehi + trelv + co;                    
                    $.ajax({
                            type: "POST",
                            url: _root_ + 'buscar/run/addRelPerVehiRun',
                            data: valores,
                            success: function(data){ 
                                //alert(data["id"]);
                                if(data["valor"] === "0"){
                                    //alert("Es cero");
                                  $('#mssg2').html('<div class="alert alert-warning"><a class="close" data-dismiss="alert">x</a>' + data["mssg"] +'</div>');  
                                  $('#avehi').val('');
                                  $('#trelv').val('');
                                }
                                if(data["valor"] === "1"){
                                  $('#mssg2').html('<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>' + data["mssg"] + '</div>');
                                  $('#avehi').val('');
                                  $('#trelv').val('');
                                  $("#selvehi").append('<option value="' + data["i"] + '" selected="selected">[' + data["i"] + '] ' + data["r1"] + ' - ' + data["r2"] + '</option>');
                                }
                            }
                        }); 
            };
    }); 
//------------------------------------------------------------------------------    
    
    $(document).on("click",".selboton", function () {
        
            if(confirm("¿Desea registrar esta visita?")) {
                         
                 var valoresx = "";
                    var per = 'per=' + $("#per").val();
                    var viv = '&viv='+$( "#selviv").val();
                    var act = '&act='+$( "#selact").val();
                    var vehi = '&vehi='+$( "#selvehi").val();
                    var eprop = '&eprop='+$( "input[type=checkbox][name=seleprop]:checked" ).val();
                    var evisi = '&evisita='+$( "input[type=checkbox][name=selevisita]:checked" ).val();
                    var co =  '&co=' + $("#co").val();
                       
                        valoresx = per + viv + act + vehi + eprop + evisi + co;
     
                    $.ajax({
                            type: "POST",
                            url: _root_ + 'buscar/run/regVisitaRun',
                            data: valoresx,
                            success: function(data){  
                                
                                    if(data["valor"] === "0"){
                                      $('#registrado').html('<div class="alert alert-warning"><a class="close" data-dismiss="alert">x</a>' + data["mssg"] +'</div>');  
                                    }
                                    if(data["valor"] === "1"){
                                      $('#registrado').html('<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>' + data["mssg"] + '</div>');
                                    }
     
                                    $('#selviv').val('');
                                    $('#selact').val('');
                                    $('#selvehi').val('');
                                    $( "input[type=checkbox][name=seleprop]").attr('checked', false);
                                    $( "input[type=checkbox][name=selevisita]").attr('checked', false);
                                }
                            });           
            
                } else {
                    return false;
                }
                 
    });
});
