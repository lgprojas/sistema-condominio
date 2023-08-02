<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}transa/per">Lista personas</a></li>
        <li class="active">Viviendas asociadas</li>
    </ol>
<h3>Viviendas asociadas</h3>
<h4>{$datosPer.Nom1_per} {$datosPer.Nom1_per} {$datosPer.Ape1_per} {$datosPer.Ape2_per}</h4>
{literal}
    <script type="text/javascript">
{/literal}
    {if $_acl->permiso('asoc_viv_per')}
    function ceb(formObj) {
                if(confirm("¿Desea asociar esta vivienda a esta persona?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    {/if}
    {if $_acl->permiso('desasoc_viv_per')}
    function dec(formObj) {
                if(confirm("¿Desea quitar esta vivienda de la lista?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    {/if}
{literal}
    </script>
{/literal}
{if $_acl->permiso('asoc_viv_per')}
<form name="form1" method="post">
    <input type="hidden" name="guardar" value="1" />
<div class="row">
{*if $sadmin == 1}
<div class="col-md-2">
    <label class="control-label" style="margin: 5px">Condominio: </label>
    <select id="co" name="co" class="form-control" style="margin: 5px">
            <option value=""> - seleccione condominio - </option>
            {foreach from=$cond item=ps}
                <option value="{$ps.Id_cond}">{$ps.Nom_cond}</option>
            {/foreach}
    </select>
</div>
{else*}
    <input type="hidden" id="co" name="co" value="{$co}"/>
{*/if*}

<div class="col-md-2">
    <label class="control-label" style="margin: 5px">Block/Torre: </label>    
    <select name="cb" id="cb" class="form-control" style="margin: 5px">  
                    <option value="">-Seleccione-</option>
                    {foreach from=$cb item=a}
                            <option value="{$a.a}">{$a.b}</option>
                    {/foreach}
    </select>
</div>
<div class="col-md-2">
    <label class="control-label" style="margin: 5px">Vivienda: </label>    
    <select name="viv" id="viv" class="form-control" style="margin: 5px">  
    </select>
</div>

{if isset($trelviv) && count($trelviv)}
<div class="col-md-2">
    <label class="control-label" style="margin: 5px">Tipo relación: </label>    
    <select name="trel" id="trel" class="form-control" style="margin: 5px">  
                    <option value="">-Seleccione-</option>
                    {foreach from=$trelviv item=b}
                            <option value="{$b.Id_trel}">{$b.Nom_trel}</option>
                    {/foreach}
    </select>
</div>
{else}
    <p><i title="Info" class="glyphicon glyphicon-ok-sign"></i> Ha asignado todas las viviendas disponibles.</p>
{/if}
<div class="col-md-3">
    <button  type="submit" id="btn_save" class="btn btn-primary" style="margin: 35px" onclick='return ceb(this);'>Asociar</button>
</div>
</div>
</form>
{/if}
{if isset($carga) && count($carga)}
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">N° Viv.</th>
        <th style="text-align: center;">Calle/Block</th>
        <th style="text-align: center;">Tipo relación</th>
        {if $_acl->permiso('desasoc_vehi_per')}<th style="text-align: center;">Quitar</th>{/if}
    </thead>
    
    {foreach item=ca from=$carga}
        <tr>
            <td style="text-align: center;">{$ca.Id_viv}</td>
            <td style="text-align: center;">{$ca.Num_viv}</td>
            <td style="text-align: center;">{$ca.Nom_cb}</td>
            <td style="text-align: center;">{$ca.Nom_trel}</td>
            {if $_acl->permiso('desasoc_vehi_per')}<td style="text-align: center;"><a href="{$_layoutParams.root}transa/per/deleteVivRelPer/{$ca.Id_viv_encrypt}/{$Id_encrypt}" onclick='return dec(this);'><i title="Quitar de la lista" class="glyphicon glyphicon-trash"></i></a></td>{/if}            
        </tr>        
    {/foreach}
    
</table>
{else}
    <p><i title="Info" class="glyphicon glyphicon-info-sign"></i> La persona no se encuentra asociada a ninguna vivienda.</p>
{/if}
<br/>
<p><a class="btn btn-default" href="{$_layoutParams.root}transa/per"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>