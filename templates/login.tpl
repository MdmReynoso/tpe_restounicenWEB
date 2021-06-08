{include file="header.tpl"}

<div class="login-box">

    <h1>Login</h1>
    <form action="verificar" method="POST">
        <label for="username">Username</label>
        <input name="username" type="text" placeholder="Enter Username">
        <label for="password">Password</label>
        <input name="password" type="password" placeholder="Enter Password">
        <input type="submit" value="Log In">
        <a href="home">Ingresar como invitado</a>
        {if $error}
            <div class="error_login">
                *{$error}
            </div>
        {/if}
    </form>
</div>