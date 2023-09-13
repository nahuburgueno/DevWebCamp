<main class="auth">

    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Recupera tu acceso a DevWebCamp</p>


        <form action="" class="formulario">
            
            <div class="formulario__campo">
                <label for="email" class="formulario__label">Email</label>
                <input type="email" class="formulario__input" placeholder="Tu email" id="email" name="email">   
            </div>


            <input type="submit" class="formulario__submit" value="Enviar intrucciones">
        </form>

        <div class="acciones">
           
            <a href="/login" class="acciones__enlaces">Ya tienes cuenta? Iniciar Sesión</a>
            <a href="/registro" class="acciones__enlaces">Aún no tienes cuenta? Crea una</a>

        </div>

</main>