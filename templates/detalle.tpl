{include file="header.tpl"}
<div class="contenedor">
    <div class="encabezado">

    </div>
    <h1 class="text-center">{$plato->nombre}</h1>
    <div class="row">
        <div class="col-4 row justify-content-center">
            {include file="listacategorias.tpl"}
        </div>
        <div class="col-8 row justify-content-center">
            {include file="tarjetadetalle.tpl"}
        </div>
    </div>
</div>
{include file="footer.tpl"}