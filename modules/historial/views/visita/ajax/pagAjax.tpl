{if isset($visitas) && count($visitas)}
    {literal}
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    {/literal}
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

{$paginacion1|default:""}