<div class="container">
<ol class="breadcrumb">
    <li><a href="{$_layoutParams.root}info/">Lista informativos</a></li>
    <li class="active">Detalle informativo</li>
</ol>
        
    <div class="h3 text-info">Detalle Informativo</div>
    <div class="h3">{$titinfo}</div>
    <div class="h5 text-info">Fecha publicación: {$fchinfo}</div>
<hr>

<div class="jumbotron">
<p class="lead text-justify">{$descinfo}</p>
{if isset($adjinfo) && count($adjinfo)}
<p><a href="{$_layoutParams.root}public/files/file_informativos/{$adjinfo}" target="_blank" class="btn btn-success btn-sm" style="margin:2px;">Ver archivo</a></p>
{/if}
</div>
<p><a class="btn btn-default" href="{$_layoutParams.root}info/index"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
<br/>
</div>
