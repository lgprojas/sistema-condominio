<div class="container">
    <h2>Activaci&oacute;n de Cuenta</h2>

    <p> </p>

    <a href="{$_layoutParams.root}">Ir a Inicio</a>

    {if !Session::get('autenticado')}

            | <a href="{$_layoutParams.root}usuario/login">Iniciar Sesi&oacute;n</a> | <a href="{$_layoutParams.root}tienda/carro">Ir al carro de compras</a>

    {/if}
</div>