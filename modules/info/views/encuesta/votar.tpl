<div class="container">
    <h3>Votar encuesta</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Enviar votación?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
    <div class="text-justify">
        {$encuesta}
    </div>
    <br/>
    <div class="col-lg-4">
{if isset($opciones) && count($opciones)}
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <input type="hidden" name="encu" value="{$encu}" />
    <table class="table">
        <thead>
        <th></th>
        <th style="text-align: center;">Archivo adjunto</th>
        </thead>
    {foreach item=ca from=$opciones}
        <tr>
            <td><label class="control-label"><input type="radio" name="voto" value="{$ca.Id_iencu}" {if $estado == $ca.Id_iencu} checked="true" {/if} {if $estado != 0} disabled="disabled" {/if} /> {$ca.Nom_iencu}</td> <td style="text-align: center;"><a href="{$_layoutParams.root}public/files/{$ca.Adj_iencu}" target="_blank" class="btn btn-info btn-sm"><i title="Opciones" class="glyphicon glyphicon-download"></i></a></label></td>
        </tr>
    {/foreach}
    </table>
    {if $estado == 0}
    <div class="form-group">
        {if $reside == 1}<input type="submit" class="btn btn-small btn-primary" value="Votar" onclick='return cb(this);'/>{/if}
    </div>
    {else}
    <p><i title="Opciones" class="glyphicon glyphicon-ok-circle"></i> Votación realizada con éxito</p>
    {/if}
</form>
{else}
    <p>La encuesta no posee aún opciones para votar.</p>
{/if}

    <p><a class="btn btn-default" href="{$_layoutParams.root}info/encuesta"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>