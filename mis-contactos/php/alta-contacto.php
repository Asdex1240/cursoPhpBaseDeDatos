<form id="alta-contacto" name="alta_frm" action="php/agregar-contacto.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Alta de contactos</legend>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" class="cambio" name="email_txt" placeholder="Escribe tu email" title="Tu email" require/>
        </div>
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre_txt" id="nombre" class="cambio" placeholder="Escribe tu nombre" title="Tu nombre" require>
        </div>
        <div>
            <label for="m">Sexo: </label>
            <input type="radio" id="m" name="sexo_rdo" title="Tu sexo" value="M" require>&nbsp;<label for="m">Masculino</label>
            &nbsp;&nbsp;
            <input type="radio" id="f" name="sexo_rdo" title="Tu sexo" value="F" require>&nbsp;<label for="f">Femenino</label>
        </div>
        <div>
            <label for="nacimiento">Fecha de nacimiento: </label>
            <input type="date" name="nacimiento_txt" id="nacimiento"  class="cambio" placeholder="Escribe tu cumpleaños" title="Tu cumple" require>
        </div>
        <div>
            <label for="telefono">Telefono: </label>
            <input type="number" name="telefono_txt" id="telefono" class="cambio" placeholder="Escribe tu telefono" title="Tu telefono" require>
        </div>
        <div>
            <label for="pais">Pais: </label>
            <select name="pais_slc" id="pais" class="cambio">
                <option value="">- - -</option>
                <?php include("select-pais.php") ?>
            </select>
        </div>
        <div>
            <label for="foto">Foto: </label>
            <input type="file" id="foto" name="foto_fls" title="Sube tu foto">
        </div>
        <div>
            <input type="submit" name="enviar_btn" id="enviar-alta" class="cambio" value="agregar">
        </div>
        <?php include("php/menajes.php") ?>
    </fieldset>
</form>