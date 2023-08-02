<div class="container">
<h3>Historial Registro Visitas</h3>
{literal}
    <script>
    </script>
{/literal}
<div class="well well-small row sm">
    <form id="form1" class="form-inline">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3">
            <label for="from">Desde:</label>
            <input type="text" id="from" name="from" style="width: 100px;margin: 5px;" class="form-control" readonly="readonly">
            </div>
            <div class="col-lg-3">
            <label for="to">Hasta:</label>
            <input type="text" id="to" name="to" style="width: 100px;margin: 5px;" class="form-control" readonly="readonly" disabled="true">
            </div>
            <div class="col-lg-1">
                <button type="button" id="reset" class="btn btn-default" style="margin: 5px;"><i class=" glyphicon glyphicon-refresh"></i></button>
                <button type="button" id="btnEnviar" class="btn btn-info" style="margin: 5px;"><i class=" glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
        {if $sadmin == 1}
        <div class="col">
        <select id="co" name="co" class="form-control input-sm" style="margin:5px;">
            <option value=""> - seleccione condominio - </option>
            {foreach from=$cond item=ps}
                <option value="{$ps.Id_cond}">{$ps.Nom_cond}</option>
            {/foreach}
        </select>
        </div>
        {else}
            <input type="hidden" id="co" value="{$co}"/>
        {/if}        
        <div class="col">            
            <select id="cb" name="cb" class="form-control input-sm" style="margin:5px;">
                <option value=""> - seleccione calle/block - </option>
                {foreach from=$cbl item=cb}
                    <option value="{$cb.a}">{$cb.b}</option>
                {/foreach}
            </select>
        </div>
        <div class="col">
            <select id="viv" name="viv" class="form-control input-sm" style="margin:5px;">
                <option value=""> - seleccione vivienda - </option>
                {foreach from=$viv item=v}
                    <option value="{$v.c}">{$v.d}-{$v.e}</option>
                {/foreach}
            </select>
        </div>
        </div>
    </form>
</div>
<div id="lista_registros">
<form name="form1" method="post">
<input type="hidden" value="{$_datos.pagina1|default:""}" name="pagina1">
{if isset($visitas) && count($visitas)}
    <table class="table table-bordered">
    <thead>
        <th colspan="10" style="background: #E6E6FA;text-align: center;">Listado de personas</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Horario</td>
        <td style="font-weight:bold;text-align: center;">Rut</td>
        <td style="font-weight:bold;text-align: center;">1er Apellido</td>      
        <td style="font-weight:bold;text-align: center;">2do Apellido</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>
        <td style="font-weight:bold;text-align: center;">Vivienda</td>
        <td style="font-weight:bold;text-align: center;">Actividad</td>
        <td style="font-weight:bold;text-align: center;">Vehí/Est.</td>
        {if $sadmin == 1}<td style="font-weight:bold;text-align: center;">Condominio</td>{/if}
    </thead>
{foreach item=datos from=$visitas}
    
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td style="text-align: center;">{$datos.Fch_regv}</td>
        <td style="text-align: center;">{$datos.Rut_per}</td>
        <td>{$datos.Ape1_per}</td>        
        <td>{$datos.Ape2_per}</td>
        <td>{$datos.Nom1_per}</td>
        <td>{$datos.Nom_cb}-{$datos.Num_viv}</td>
        <td>{$datos.Nom_actext}</td>
        <td style="text-align: center;">
            {if isset($datos.Cod_vehi) && count($datos.Cod_vehi)}
                {if isset($datos.Est_prop) && count($datos.Est_prop)}
                    <span class="label label-success">
                        <span>{$datos.Cod_vehi}</span> <span style="border-radius: 10px; background: white;color: black;">{$datos.Nom_esta}</span>
                    </span>
                {else}
                    <span class="label label-info">
                        <span>{$datos.Cod_vehi}</span> 
                    </span>
                {/if}
            {else}
                <span class="label label-default"><i class="glyphicon glyphicon-user"></i></span>
            {/if}
        </td>
        {if $sadmin == 1}<td style="text-align: center;">{$datos.Nom_cond}</td>{/if}
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay visitas registradas!</strong></p>
{/if} 
</form>
{if isset($paginacion1)}{$paginacion1}   {/if} 
</div>
</div>