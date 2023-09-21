<main class="auth">

    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Coloca tu nueva contraseña de DevWebCamp</p>


    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <?php if($token_valido) { ?>

        <form method="POST" class="formulario">
            
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Contraseña</label>
                <input type="password" class="formulario__input" placeholder="Tu nueva contraseña" id="password" name="password">   
            </div>


            <input type="submit" class="formulario__submit" value="Guardar Contraseña">
        </form>

        <?php } ?>

        <div class="acciones">
            <a href="/login" class="acciones__enlaces">Ya tienes cuenta? Iniciar Sesión</a>
            <a href="/registro" class="acciones__enlaces">Aún no tienes cuenta? Crea una</a>
        </div>

</main>