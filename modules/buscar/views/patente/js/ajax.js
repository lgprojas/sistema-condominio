//función
$(document).ready(function(){ 
    
        //--------------------------------
                $('#perco').autocomplete({
			source: function(request, response){
                            var a = $("#a").val();
				$.ajax({
                                        type: "POST",
					url:_root_ + "buscar/patente/gpcbp",
					dataType:"json",
					data:{q:request.term,co:a},
					success: function(data){
						response(data);
					}
 
				});
			},
			minLength: 2         
    
		});
//--------------------------------
    
    $('input[type=checkbox][name=seleprop]').on('click', function(){
            $( "input[type=checkbox][name=selevisita]").attr('checked', false);
    });
    $('input[type=checkbox][name=selevisita]').on('click', function(){
            $( "input[type=checkbox][name=seleprop]").attr('checked', false);
    });
    
    $('input[type=checkbox]').on('click', function(){
        var vtrr = $(this).parents("tr").attr('id');
        $("input[type=checkbox][name=eprop_" + vtrr + "]").on('click', function(){        
                $( "input[type=checkbox][name=evisita_" + vtrr + "]").attr('checked', false);
        });
        $("input[type=checkbox][name=evisita_" + vtrr + "]").on('click', function(){
                $( "input[type=checkbox][name=eprop_" + vtrr + "]").attr('checked', false);
        });
    });
    
    $(document).on("click",".boton", function () {
        
            if(confirm("¿Desea registrar esta visita?")) {
                         
                 var valores = "";
                 var vtr = $(this).parents("tr").attr('id');
                 //alert(valortr);

		if(!$( "#vivasoc_" + vtr ).val()){
                    alert("Debe seleccionar la vivienda");
                    return false;
                }

                if(!$( "#actext_" + vtr ).val()){
                    alert("Debe seleccionar motivo de la visita");
                    return false;
                }

                $(this).parents("tr").find("td").each(function () {

                    var per = 'per=' + $("#per_" + vtr ).val();
                    var viv = '&vivasoc='+$( "#vivasoc_" + vtr ).val();
                    var act = '&act='+$( "#actext_" + vtr ).val();
                    var vehi = '&vehi='+$( "#vehi").val();
                    var usu = '&usu=' + $("#usu").val();
                    var eprop = '&eprop='+$( "input[type=checkbox][name=eprop_" + vtr + "]:checked" ).val();
                    var evisi = '&evisita='+$( "input[type=checkbox][name=evisita_" + vtr + "]:checked" ).val();
                    var co =  '&co=' + $("#co").val();
                       
                        valores = per + viv + act + vehi + usu + eprop + evisi + co;

                });
                    //var padre = $(this).parent("tr").attr('id');
                    //alert(vtr);
                    //alert(valores);
                                    //$('#reg_'+ vtr).html('');
                                    //$('#reg_'+ vtr).append('<span class="label label-success"><i class="glyphicon glyphicon-ok-circle"></i></span>').fadeIn('slow');
                                    
                    $.ajax({
                            type: "POST",
                            url: _root_ + 'buscar/patente/regVisitaPer',
                            data: valores,
                            success: function(data){                                
                                if(data["valor"] === "0"){
                                  $('#rega_'+ vtr).html('<div class="alert alert-warning"><a class="close" data-dismiss="alert">x</a>' + data["mssg"] +'</div>');                                    
                                }
                                if(data["valor"] === "1"){
                                  //$('#reg_'+ vtr).html('<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>' '</div>');
                                  //$('#rega_'+ vtr).html('<div class="alert alert-success"><i class="glyphicon glyphicon-ok-circle"></i>' + data["mssg"] + '</div>');
                                  $('#rega_'+ vtr).fadeOut(3000).html('<button type="button" class="quitar btn btn-success" disabled="true">' + data["mssg"] + '<i class="glyphicon glyphicon-ok-circle"></i></button>').fadeOut(1000, function() {
                                    $('#rega_'+ vtr).fadeIn(100).html('<input type="hidden" value="' + data["r1"] +'" id="quitar_'+ vtr +'"/><button type="button" class="quitar btn btn-warning">Deshacer <i class="glyphicon glyphicon-remove-circle"></i></div>');
                                  });
                                                                      
                                }
                                }
                            });           
            
                } else {
                    return false;
                }
                 
    });  
//------------------------------------------------------------------------------    
    $(document).on("click",".quitar", function () {

        if(confirm("¿Desea deshacer el registro de esta visita?")) {
            
            var vtr = $(this).parents("tr").attr('id');
            var idr = $('#quitar_' + vtr).val();
            var co =  '&co=' + $("#co").val();
            var valores = 'idr=' + idr + co;
            
            $.ajax({
                type: "POST",
                url: _root_ + 'buscar/patente/drv',
                data: valores,
                success: function(data){                                
                    if(data["valor"] === "0"){
                      $('#rega_'+ vtr).fadeOut(3000).html('<button type="button" class="quitar btn btn-danger" disabled="true">' + data["mssg"] + '<i class="glyphicon glyphicon-info-sign"></i></button>').fadeOut(1000, function() {
                        $('#rega_'+ vtr).fadeIn(100).html('<input type="hidden" value="' + idr +'" id="quitar_'+ vtr +'"/><button type="button" class="quitar btn btn-warning">Deshacer <i class="glyphicon glyphicon-remove-circle"></i></div>');
                      });                                    
                    }
                    if(data["valor"] === "1"){
                      $('#rega_'+ vtr).fadeOut(3000).html('<button type="button" class="quitar btn btn-default" disabled="true">' + data["mssg"] + '<i class="glyphicon glyphicon-ok-circle"></i></button>').fadeOut(1000, function() {
                        $('#rega_'+ vtr).fadeIn(100).html('<button class="boton btn btn-default btn-sm">Registrar</button>');
                      });

                    }
                    }
                });    
        } else {
            return false;
        }
    });  
    
//------------------------------------------------------------------------------    
    $(document).on("click","#btn_savepp", function () {
        
            if(confirm("¿Desea registrar esta relación?")) {                         
                    var valores = "";
                    var p = 'p='+$("#perco").val();
                    var vehi = '&vehi='+$("#vehi").val();
                    var trel = '&trv='+$("#trelv").val();  
                    var co = '&c=' + $("#a").val();
                        valores = p + vehi + trel + co;                    
                    $.ajax({
                            type: "POST",
                            url: _root_ + 'buscar/patente/arpp',
                            data: valores,
                            success: function(data){ 
                                //alert(data["id"]);
                                if(data["valor"] === "0"){
                                    //alert("Es cero");
                                  $('#mssg').html('<div class="alert alert-warning"><a class="close" data-dismiss="alert">x</a>' + data["mssg"] +'</div>');  
                                  $('#perco').val('');
                                  $('#trelv').val('');
                                }
                                if(data["valor"] === "1"){
                                  $('#mssg').html('<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>' + data["mssg"] + '</div>');
                                  $('#perco').val('');
                                  $('#trelv').val('');
                                  $("#selper").append('<option value="' + data["i"] + '" selected="selected">' + data["r1"] + ' ' + data["r2"] + ' ' + data["r3"] + ' ' + data["r4"] + '</option>');
                                }
                                }
                            }); 
            };
    });
//------------------------------------------------------------------------------    
        $(document).on("click",".selboton", function () {
        
            if(confirm("¿Desea registrar esta visita?")) {
                         
                 var valoresx = "";
                    if(!$("#selper").val()){
                        $('#registrado').fadeIn(2000).append('<div class="col-lg-12 bg-warning h4" style="padding:15px;"><i class="glyphicon glyphicon-info-sign"></i> Seleccione persona</div>').fadeOut(3000);
                        return false;
                    }
                    if(!$("#selviv").val()){
                        $('#registrado').fadeIn(2000).append('<div class="col-lg-12 bg-warning h4" style="padding:15px;"><i class="glyphicon glyphicon-info-sign"></i> Seleccione vivienda</div>').fadeOut(3000);
                        return false;
                    }
                    if(!$("#selrviv").val()){
                        $('#registrado').fadeIn(2000).append('<div class="col-lg-12 bg-warning h4" style="padding:15px;"><i class="glyphicon glyphicon-info-sign"></i> Selecciona relación viv</div>').fadeOut(2000);
                        return false;
                    }
                    if(!$("#selact").val()){
                        $('#registrado').fadeIn(2000).append('<div class="col-lg-12 bg-warning h4" style="padding:15px;"><i class="glyphicon glyphicon-info-sign"></i> Selecciona actividad</div>').fadeOut(2000);
                        return false;
                    }
                    var per = 'per=' + $("#selper").val();
                    var viv = '&viv='+$( "#selviv").val();
                    var rviv = '&relviv='+$( "#selrviv").val();
                    var act = '&act='+$( "#selact").val();
                    var vehi = '&vehi='+$( "#vehi").val();
                    var usu = '&usu=' + $("#usu").val();
                    var eprop = '&eprop='+$( "input[type=checkbox][name=seleprop]:checked" ).val();
                    var evisi = '&evisita='+$( "input[type=checkbox][name=selevisita]:checked" ).val();
                    var co =  '&co=' + $("#co").val();
                       
                        valoresx = per + viv + rviv + act + vehi + usu + eprop + evisi + co;

                    //var padre = $(this).parent("tr").attr('id');
                    //alert(vtr);
                    //alert(valoresx);
                                    //$('#reg_'+ vtr).html('');
                                    //$('#reg_'+ vtr).append('<span class="label label-success"><i class="glyphicon glyphicon-ok-circle"></i></span>').fadeIn('slow');
                                    
                    $.ajax({
                            type: "POST",
                            url: _root_ + 'buscar/patente/regVisitaPerAvan',
                            data: valoresx,
                            success: function(datax){                                
                                    $('#registrado').html('');
                                    $('#registrado').fadeIn(2000).append('<div class="col-lg-12 bg-success h4" style="padding:15px;"><i class="glyphicon glyphicon-ok-circle"></i> Guardado</div>').fadeOut(2000);
                                    $('#selper').val('');
                                    $('#selviv').val('');
                                    $('#selrviv').val('');
                                    $('#selact').val('');
                                    $( "input[type=checkbox][name=seleprop]").attr('checked', false);
                                    $( "input[type=checkbox][name=selevisita]").attr('checked', false);
                                    return(datax);
                                }
                            });           
            
                } else {
                    return false;
                }
                 
    });
    
    $('#limpiar_modal1').on('click', function() {
        $("#form_modal1")[0].reset();
        $("#trel").html('');
        $('#mssg').html('');
    });
    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
});