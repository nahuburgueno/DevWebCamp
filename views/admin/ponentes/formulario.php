<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Personal</legend>

        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="formulario__input" value="<?php echo $ponente->nombre ?? ''; ?>" placeholder="Nombre ponente">
        </div>

        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
                <input type="text" id="apellido" name="apellido" class="formulario__input" value="<?php echo $ponente->apellido ?? ''; ?>" placeholder="Apellido ponente">
        </div>

        <div class="formulario__campo">
            <label for="ciudad" class="formulario__label">Ciudad</label>
                <input type="text" id="ciudad" name="ciudad" class="formulario__input" value="<?php echo $ponente->ciudad ?? ''; ?>" placeholder="Ciudad ponente">
        </div>

        <div class="formulario__campo">
            <label for="pais" class="formulario__label">País</label>
                <input type="text" id="pais" name="pais" class="formulario__input" value="<?php echo $ponente->pais ?? ''; ?>" placeholder="Pais ponente">
        </div>

        <div class="formulario__campo">
            <label for="imagen" class="formulario__label formulario__input--file">Imagen</label>
                <input type="file" id="imagen" name="imagen" class="formulario__input">
        </div>

        <?php if(isset($ponente->imagen_actual)) { ?>
            <p class="formulario__texto">Imagen actual:</p>
                <div class="formulario__imagen">
                    <picture>
                        <source srcset="<?php echo $_ENV['HOST'] . "/img/speakers/" . $ponente->imagen; ?>.webp" type="image/webp">
                        <source srcset="<?php echo $_ENV['HOST'] . "/img/speakers/" . $ponente->imagen; ?>.png" type="image/png">
                        <img src="<?php echo $_ENV['HOST'] . "/img/speakers/" . $ponente->imagen; ?>.png" alt="Imagen ponente" >
                    </picture>
                </div>
        <?php } ?>



</fieldset>


<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

        <div class="formulario__campo">
            <label for="tags_input" class="formulario__label">Áreas de experiencia (separadas por coma) </label>
                <input type="text" id="tags_input" class="formulario__input" placeholder="Ej: Node.js, PHP, CSS, Laravel, UX / UI">

                <div id="tags" class="formulario__listado"></div>
                <input type="hidden" name="tags" value="<?php echo $ponente->tags ?? ''; ?>">
        </div>


</fieldset>



<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

    
    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-facebook"></i>
            </div>
                <input type="text" class="formulario__input--sociales" name="redes[facebook]" placeholder="Facebook" value="<?php echo $redes->facebook ?? ''; ?>">
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-twitter"></i>
            </div>
                <input type="text" class="formulario__input--sociales" name="redes[twitter]" placeholder="Twitter" value="<?php echo $redes->twitter ?? ''; ?>">
        </div>
    </div>

    
    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-youtube"></i>
            </div>
                <input type="text" class="formulario__input--sociales" name="redes[youtube]" placeholder="YouTube" value="<?php echo $redes->youtube ?? ''; ?>">
        </div>
    </div>

    
    
    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-instagram"></i>
            </div>
                <input type="text" class="formulario__input--sociales" name="redes[instagram]" placeholder="Instagram" value="<?php echo $redes->instagram ?? ''; ?>">
        </div>
    </div>

        
    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-tiktok"></i>
            </div>
                <input type="text" class="formulario__input--sociales" name="redes[tiktok]" placeholder="TikTok" value="<?php echo $redes->tiktok ?? ''; ?>">
        </div>
    </div>

        
    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-github"></i>
            </div>
                <input type="text" class="formulario__input--sociales" name="redes[github]" placeholder="GitHub" value="<?php echo $redes->github ?? ''; ?>">
        </div>
    </div>

</fieldset>    
