<div class="container">
<h3>Encuestas</h3>
{literal}
{/literal}
<div>
{if isset($encuestas) && count($encuestas)}
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Pregunta</th>
        <th style="text-align: center;">Fch inicio</th>
        <th style="text-align: center;">Fch termino</th>
        <th style="text-align: center;">Condominio</th>
        <th style="text-align: center;">Estado</th>
        {if $reside == 1 || $reside2 == 1}<th style="text-align: center;">Votar</th>{/if}
    </thead>
    
    {foreach item=ca from=$encuestas}
        <tr>
            <td style="text-align: center;">{$ca.Id_encu}</td>
            <td>{$ca.Nom_encu|substr:0:30}...</td>
            <td style="text-align: center;">{$ca.Fchi_encu|date_format:"%d-%m-%Y"}</td>
            <td style="text-align: center;">{$ca.Fcht_encu|date_format:"%d-%m-%Y"}</td>
            <td style="text-align: center;">{$ca.Nom_cond}</td>
            <td style="text-align: center;">{if $ca.Est_encu == 0}<i title="Info" class="glyphicon glyphicon-question-sign"></i>{else}<i title="Info" class="glyphicon glyphicon-ok-sign"></i>{/if}</td>
            {if $reside == 1 || $puede_votar == $ca.Id_cond}<td style="text-align: center;"><a href="{$_layoutParams.root}info/encuesta/votar/{$ca.Id_encu}"><i title="Opciones" class="glyphicon glyphicon-list"></i></a></td>{/if}
    {/foreach}
{else}
    <br/>
    <p><i title="Info" class="glyphicon glyphicon-info-sign"></i> No hay encuestas.</p>
{/if}

</div>
</div>