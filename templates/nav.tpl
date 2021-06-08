<div class="container-fluid">
    <div class="row">
        <div class="col-3">

            <nav>
                <ul class="nav flex-column">
                    <a class="navbar-brand" href="#">
                        <div class="img-container">
                            <img src="imagenes/resto unicen3.jpg" alt="logo" alt="" width=200px>
                    </a>
                    <div class="nav">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="platos">Nuestra Carta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="historia">Nuestra historia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ubicacion">Dónde estamos?</a>
                        </li>
                        {if $username}
                            <li class="nav-item">
                                <a class="nav-link" href="admin">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout">Logout</a>
                            </li>
                            <p class="alert alert-light">{$username}</p>
                        {else}
                            <li class="nav-item">
                                <a class="nav-link" class="botones" href="formRegistro">Registrarse</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login">Login</a>
                            </li>
                        {/if}
                </ul>
            </nav>
        </div>