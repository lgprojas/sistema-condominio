<div class="container">
<h3>Nuevo Informativo</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear este nuevo Informativo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
<div class="form-horizontal col-lg-3 small">
<form name="form1" method="post" enctype="multipart/form-data">
    <input type="hidden" value="1" name="guardar" />
    {if $sadmin == 1}
        <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select id="co" name="co" class="form-control">
            <option value=""> - seleccione condominio - </option>
            {foreach from=$cond item=ps}
                <option value="{$ps.Id_cond}">{$ps.Nom_cond}</option>
            {/foreach}
        </select>
        </div>
    {else}
        <input type="hidden" name="co" id="co" value="{$co}" />
    {/if}
        <label class="control-label">Título:</label>  
         <input class="form-control" type="text" name="nom" value="{$datos.nom|default:""}" placeholder="Ingrese título informativo"/>       
         <label class="control-label">Descripción:</label>  
         <textarea class="form-control" name="desc" cols="3" rows="6" placeholder="Ingrese información">{$datos.desc|default:""}</textarea>
         <label class="control-label">Fch. creación: </label><input data-role="date" data-inline="true" id="datepicker1" name="fchc" value="{$datos.fchc|default:""}" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>        
         <label class="control-label">Fch. finalización: </label><input data-role="date" data-inline="true" id="datepicker2" name="fchf" value="{$datos.fchf|default:""}" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>    
         <label for="archivo">Archivo: </label>
         <input type="file" name="archivo" value="{$datos.archivo|default:""}" class="btn btn-default"/>
        <br/>
    <p>
        {if $_acl->permiso('crear_info')}
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
        {/if}
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="{$_layoutParams.root}info/"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>