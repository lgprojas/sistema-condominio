<div class="container">
<h3>Editar Informativo</h3>
<h4>{$datos.Nom_info}</h4>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar este informativo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function df(formObj) {
                if(confirm("¿Desea quitar este archivo del informativo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function sf(formObj) {
                if(confirm("¿Desea agregar el archivo al informativo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
<div class="col-lg-6">
<form name="form1" method="post">
    <input type="hidden" name="guardar" value="1" />
    {if $sadmin == 1}
    <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select  name="co" id="co" class="form-control">
            {if $datos.Id_cond != 0}
                <option value="{$datos.Id_cond}">{$datos.Nom_cond}</option>
                {foreach from=$cond item=co}
                    {if $co.Id_cond != $datos.Id_cond}
                        <option value="{$co.Id_cond}">{$co.Nom_cond}</option>
                    {/if}
                {/foreach}
            {else}
                <option value="">-Seleccione-</option>
                             {foreach from=$cond item=co}
                                <option value="{$co.Id_cond}">{$co.Nom_cond}</option>
                             {/foreach}
            {/if}            
        </select>
    </div>
    {else}
        <input type="hidden" name="co" id="co" value="{$co}" />
    {/if}
        <label class="control-label">Título:</label>
        <input class="form-control" type="text" name="nom" value="{if isset($datos.Nom_info)}{$datos.Nom_info}{/if}" placeholder="Ingrese título informativo"/>
        <label class="control-label">Descripción:</label>
        <textarea class="form-control" name="desc" cols="3" rows="6" placeholder="Ingrese información">{if isset($datos.Desc_info)}{$datos.Desc_info}{/if}</textarea>
        <label class="control-label">Fch. creación: </label><input data-role="date" data-inline="true" id="datepicker1" name="fchc" value="{$datos1.fchc|default:$datos.Fch_cinfo}" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>        
        <label class="control-label">Fch. finalización: </label><input data-role="date" data-inline="true" id="datepicker2" name="fchf" value="{$datos1.fchf|default:$datos.Fch_tinfo}" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>         
    {if $_acl->permiso('editar_info')}
        <input class="btn btn-small btn-primary" type="submit" value="Editar" onclick='return cb(this);'/>
    {/if}
</form>
<br>
<hr>
 <div class="form-horizontal well small col-lg-12">        
  <fieldset>
    <legend>Archivo adjunto</legend>
    {if count($datos.Adj_info) == 0}
        <p>No posee archivo.</p>
        <form name="form1" method="post" enctype="multipart/form-data">
        <input type="hidden" name="subirfile" value="1" />
        <input type="hidden" name="inf" value="{$Id_encrypt}" />
        <input type="file" name="archivo" value="{$datos.archivo|default:""}" class="btn btn-default form-control" style="padding-bottom:40px;"/>
        <br>
        <input class="btn btn-small btn-primary" type="submit" value="Agregar" onclick='return sf(this);'/>
        </form>
    {else}
        <p><a href="{$_layoutParams.root}public/files/file_informativos/{$datos.Adj_info}" target="_blank" class="btn btn-success btn-sm" style="margin:2px;"><i title="Archivo adjunto" class="glyphicon glyphicon-floppy-disk"></i> {$datos.Adj_info}</a>
        <a href="{$_layoutParams.root}info/index/delFileInfo/{$Id_encrypt}" class="btn btn-danger btn-sm" onclick='return df(this);' style="margin:2px;">
                    <i title="Archivo adjunto" class="glyphicon glyphicon-floppy-remove"></i>
        </a></p>
    {/if}
   </fieldset>
</div>
<div class="clearfix"></div>
<br/>
<br/>
<br/>
<p><a class="btn btn-default" href="{$_layoutParams.root}info/"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>