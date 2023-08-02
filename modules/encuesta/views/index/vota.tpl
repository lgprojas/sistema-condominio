<div class="container">
    <h3>Resultado votación</h3>
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
<div class="col-md-4">
    <div class="text-justify">
        {$encuesta}
    </div>
    <br/>
    <table class="table form-group">
        <thead>
        <th style="text-align: center;">Votos</th>
        <th style="text-align: center;">Opciones</th>
        <th style="text-align: center;">Archivo adjunto</th>
        </thead>
        <tbody>
{if isset($opciones) && count($opciones)}
    {foreach item=ca from=$opciones}
        <tr>
            <td style="text-align: center;">{$ca.Total_iencu}</label></td>
            <td>{$ca.Nom_iencu}</td>
            <td style="text-align: center;"><a href="{$_layoutParams.root}public/files/{$ca.Adj_iencu}" target="_blank" class="btn btn-info btn-sm"><i title="Archivo adjunto" class="glyphicon glyphicon-download"></i></a></td>
        </tr>
    {/foreach}
        </tbody>
    </table>
{/if}
<br/>
<div class="col-md-4">
    <p><a class="btn btn-default" href="{$_layoutParams.root}encuesta/index"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>
</div>