<div class="container-fluid">
    {include file="header.tpl"}
    {include file="nav.tpl"}
    <div class="col-1">
    </div>
    <div class="col-9">
        <h1>Panel Admin</h1>

        <div class="contenedor_admin">
            {include file="editar.categorias.admin.tpl"}
            {include file="agregar.categoria.tpl"}
            {include file="eliminar.categoria.tpl"}
        </div>
        <div class="contenedor_admin">
            {include file="editar.platos.admin.tpl"}
            {include file="agregar.plato.tpl"}
            {include file="eliminar.plato.tpl"}
        </div>

    </div>

    {include file="footer.tpl"}