{foreach from=$platos item=plato}
    <div class="card bg-secondary mb-3" style="width: 18rem;">
        <img src="imagenes/tomaterelleno.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-info">{$plato->nombre}</h5>
            <h6 class="text-dark">{$plato->nacionalidad}</h6>
            <a href="detalle/{$plato->id_plato}" class="btn btn-light">Detalles</a>
        </div>
    </div>
{/foreach}