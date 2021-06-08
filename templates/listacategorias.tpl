<ul class="list-group">
    {foreach from=$categorias item=categoria}
        <li class="list-group-item active" aria-current="true"><a class="text-decoration-none text-light"
                href="categoria/{$categoria->id}">{$categoria->nombre}</a>
            {if $username}
                <a class="btn btn-warning" href="formEditarCategoria/{$categoria->id}">Editar</a>
                <a class="btn btn-danger" href="eliminarCategoria/{$categoria->id}">Eliminar</a>
            {/if}
        </li>
    {/foreach}
</ul>