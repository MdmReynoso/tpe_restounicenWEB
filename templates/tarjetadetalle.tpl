<div class="card mb-3 bg-success mb-3 " style="max-width: 540px;">
    <div class="row g-0 ">
        <div class="col-md-4">
            <img class="img-thumbnail" src="imagenes/tomaterelleno.jpg" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body ">
                <h5 class="card-title">Plato: {$plato->nombre}</h5>
                <p class="card-text">Detalles: {$plato->detalle}</p>
                <p class="card-text"><small class="text-light">Nacionalidad: {$plato->nacionalidad} </small></p>
                {if $username}
                    <a class="btn btn-warning" href="formEditarPlato/{$plato->id_plato} ">Editar</a>
                    <a class="btn btn-danger" href="eliminarPlato/{$plato->id_plato}">Eliminar</a>
                {/if}
            </div>
        </div>
    </div>
</div>