{if isset($posts) && count($posts)}<!--que si existe posts y además que tenga por lo menos 1 -->
<table>
{foreach item=datos from=$posts}
    
    <tr>
        <td>{$datos.Id_x}</td>
        <td>{$datos.Nom_x}</td>
        
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay post!</strong></p>
{/if}

{if isset($paginacion)}{$paginacion}   {/if}         
