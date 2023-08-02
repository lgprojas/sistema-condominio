<div class="container">
<h3>Condominios asignados al usuario</h3>
<h5>Usuario: {$dusu.Nom_usu} | Role: {$dusu.Nom_role}</h5>
{literal}
    <script type="text/javascript">
    function ci(formObj) {
                if(confirm("¿Desea agregar este condominio al usuario?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function cb(formObj) {
                if(confirm("¿Está seguro que desea desasignar este condominio al usuario?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
<div class="col-lg-12">
<form method="post" action="">
    <table class="table table-striped">
        <tr>
            <td style="width: 20%;">
            <input type="hidden" name="guardar" value="1"/>
            Condominio:
            <select name="cond" id="cond" class="form-control">
                <option value="">-Seleccione-</option>
                {foreach from=$conds item=c}
                    <option value="{$c.Id_cond}">{$c.Nom_cond}</option>
                {/foreach}
            </select>
            </td>
<td style="padding: 30px;">
    <input type="submit" value="Agregar" id="btn_insertar" class="btn btn-primary" onclick='return ci(this);'/></td>
    </tr>
    </table>
</form>
</div>
<div class="col-lg-12">
<form name="form1" method="post">
        <input type="hidden" value="{$_datos.pagina1|default:""}" name="pagina1">             
<div id="paginacion_1">
{if isset($pag1) && count($pag1)}<!--que si existe posts y además que tenga por lo menos 1 -->
    <table class="table table-bordered">
        <thead>
        <th colspan="10" style="background: #E6E6FA;text-align: center;">CONDOMINIOS ASIGNADOS AL USUARIO</th>
    </thead>
    <tr style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Condominio</td>
        <td style="font-weight:bold;text-align: center;">Quitar</td>       
    </tr>
    
{foreach item=datos from=$pag1}
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td style="text-align: center;">{$datos.Nom_cond}</td> 
        <td style="font-weight:bold;text-align: center;"><a class="glyphicon glyphicon-trash" href="{$_layoutParams.root}usuarios/gestores/elimCondGestor/{$idusu}/{$datos.Id_encrypt}/" onclick='return cb(this);'></a></td>
    </tr>
{/foreach}
</table>
{else}
            <p><strong>No tiene condominios asignados al usuario.</strong></p>
{/if}
<br/>
{if isset($paginacion1)}
    <p>{$paginacion1|default:""}</p>  
{/if}
</div>
 </form>
</div>
<p>
<a class="btn btn-default" href="{$_layoutParams.root}usuarios/gestores/"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   
</p>
</div>
