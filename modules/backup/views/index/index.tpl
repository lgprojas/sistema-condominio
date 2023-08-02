<div class="container">
<div class="jumbotron">
<h2>Backup Base de Datos Covecino</h2>
<p class="lead">En esta sección usted podrá realizar respaldos de la Base de Datos del sistema Covecino. Las opciones que dispone son descritas en detalle en las siguientes secciones.</p>
<p>
<a class="btn btn-lg btn-success" role="button" href="{$_layoutParams.root}">Volver al Inicio</a>
</p>
</div>
<div class="row">
<div class="col-lg-4">
    <h4>Respaldo simple</h4>
    <p>Realice un respaldo de su Base de Datos en el servidor, cada respaldo registrará la fecha de creación.</p>
    <p>
    <a class="btn btn-default" role="button" href="{$_layoutParams.root}backup/index/simpleBackup">Iniciar</a>
    </p>
</div>
<div class="col-lg-4">
    <h4>Guardar y descargar respaldo</h4>
    <p>Realice un respaldo en el servidor de su Base de Datos y adicionalmente descargue una copia.</p>
    <p>
    <a class="btn btn-default" role="button" href="{$_layoutParams.root}backup/index/backupDownload">Iniciar</a>
    </p>
</div>
<div class="col-lg-4">
    <h4>Guardar y enviar a Mail</h4>
    <p>Realice un respaldo en el servidor de su Base de Datos y adicionalmente envíe una copia vía Email.</p>
    <p>
    <a class="btn btn-default" role="button" href="{$_layoutParams.root}backup/index/sendEmailBackUp">Iniciar</a>
    </p>
</div>
</div>
<form name="form1" method="post">
<input type="hidden" value="{$_datos.pagina1|default:""}" name="pagina1">
{if isset($backup) && count($backup)}
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado backup</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Fecha</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Tipo</td>
        <td style="font-weight:bold;text-align: center;">Usuario</td>      
    </thead>
{foreach item=datos from=$backup}
    
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td>{$datos.Fch_rb}</td>
        <td>{$datos.Nomfile_rb}</td>
        <td>{$datos.Tipo_rb}</td>
        <td>{$datos.Nom_usu}</td>
    </tr>
    
{/foreach}
</table>
{else}
    <p class="text-center"><strong>No hay backup</strong></p>
{/if} 
</form>
{if isset($paginacion1)}{$paginacion1}   {/if}
<br/>
<br/>
<br/>
</div>