//función
$(document).ready(function(){

$( function() {
    var dateFormat = "dd-mm-yy",
      from = $("#from").datepicker({          
          //defaultDate: "+1w",
        dateFormat: 'dd-mm-yy',
          changeMonth: true,
          numberOfMonths: 2,
          maxDate: "+0m +0d",
          monthNames:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
          monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
          dayNamesShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
          dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"]
        }).on("change", function() {
          to.datepicker("option", "minDate", getDate(this));
        }),
      to = $( "#to" ).datepicker({        
        //defaultDate: "+1w",
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        numberOfMonths: 2,
        maxDate: "+0m +0d",
        monthNames:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
        monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
        dayNamesShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
        dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"]
      }).on("change", function() {
        from.datepicker("option", "maxDate", getDate(this));
      });
 
    function getDate(element) {
      var date;
      try{
        date = $.datepicker.parseDate(dateFormat, element.value);
      }catch(error) {
        date = null;
      }
 
      return date;
    }
  });

    $(document).on("click",".pagina", function(){
        paginacion($(this).attr('pagina'));
    });
    
    $('#from').change(function () {
                    var value = $(this).val();
                    if (value.length > 0) {                      
                        $('#to').attr("disabled", false);
                    }
                });
    $('#reset').click(function () {
                    $('#from').val('');
                    $('#to').val('');
                    $("input[id$='from'], input[id$='to']").datepicker( "option", "maxDate", "+0m +0d" );
                    //$("input[id$='to'], input[id$='to']").datepicker( "option", "minDate", null );
                    $('#to').attr("disabled", true);
                    paginacion();
                });
    
    var paginacion = function(pagina){
        var pagina = 'pagina=' + pagina;
        var from = '&from=' + $("#from").val();
        var to = '&to=' + $("#to").val();
        var co = '&co=' + $("#co").val();
        var cb = '&cb=' + $("#cb").val();
        var viv = '&viv=' + $("#viv").val();
        //var registros = '&registros=' + $("#registros").val();
        
        $.post(_root_ + 'historial/visita/gfv', pagina + from + to + co + cb + viv, function(data){
            $('#lista_registros').html('');
            $('#lista_registros').html(data);
        });
    };
    
    $("#co").change(function(){
        $.post(_root_ + 'historial/visita/vgcb','co=' + $("#co").val(),function(datos){
            $("#cb").html('<option value=""> - seleccione calle/Block - </option>');
            
            for(var i = 0; i < datos.length; i++){
                $("#cb").append('<option value="' + datos[i].a + '">' + datos[i].b + '</option>');
            }
            
        }, 'json');
        
        $("#cb").val('');
        
        paginacion();
    });
    
        $("#cb").change(function(){
        $.post(_root_ + 'historial/visita/vgviv','cb=' + $("#cb").val() + '&co=' + $("#co").val(),function(datos){
            $("#viv").html('<option value=""> - seleccione vivienda - </option>');
            
            for(var i = 0; i < datos.length; i++){
                $("#viv").append('<option value="' + datos[i].c + '">' + datos[i].d + '-' + datos[i].e + '</option>');
            }
            
        }, 'json');
        
        $("#viv").val('');
        
        paginacion();
    });
    
    $("#btnEnviar").click(function(){
        paginacion();
    });
    
    $("#co").change(function(){
            paginacion();
    });
    
    $("#cb").change(function(){
            paginacion();
    });
    
    $("#viv").change(function(){
            paginacion();
    });
    
    $("#registros").change(function(){
        paginacion();
    }); 
    
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    }); 
});