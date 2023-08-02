$(document).ready(function(){
    
var gpc = function(){
        $.post(_root_ + 'usuarios/registro/gpc','cond=' + $("#cond").val(), function(datos1){
            $("#per").html('')//vamos a limpiar el select de ciudad
            $("#per").append('<option value="">-Seleccione-</option>')
            for(var i = 0; i < datos1.length; i++){
                $("#per").append('<option value="' + datos1[i].a + '">' + datos1[i].b + ' ' + datos1[i].c + ' ' + datos1[i].d + ' ' + datos1[i].e +'</option>');
            }
        }, 'json');
    } 
var grc = function(){
        $.post(_root_ + 'usuarios/registro/grc','cond=' + $("#cond").val(), function(datos2){
            $("#role").html('')//vamos a limpiar el select de ciudad
            $("#role").append('<option value="">-Seleccione-</option>')
            for(var i = 0; i < datos2.length; i++){
                $("#role").append('<option value="' + datos2[i].a + '">' + datos2[i].b + '</option>');
            }
        }, 'json');
    } 
    
        $("#cond").change(function(){
        if(!$("#cond").val()){// si el select tiene value cero
            $("#per").html('');
            $("#role").html('');
        }else{
            gpc();
            grc();
        }
    }); 
    
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
});

