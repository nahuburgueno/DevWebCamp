<main class="auth">

    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Inicia Sesión en DevWebCamp</p>


        <form action="" class="formulario">
            <div class="formulario__campo">
                <label for="email" class="formulario__label">Email</label>
                <input type="email" class="formulario__input" placeholder="Tu email" id="email" name="email">

            </div>

            <div class="formulario__campo">
                <label for="password" class="formulario__label">Contraseña</label>
                <input type="password" class="formulario__input" placeholder="Tu contraseña" id="password" name="password">

            </div>

            <input type="submit" class="formulario__submit" value="Iniciar Sesión">
        </form>

        <div class="acciones">
            <a href="/registro" class="acciones__enlaces">Aún no tienes cuenta? Crea una</a>
            <a href="/olvide" class="acciones__enlaces">Olvidaste tu contraseña?</a>
        </div>

</main>