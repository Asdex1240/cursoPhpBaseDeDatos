<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Env&iacuteo de datos por GET y POST</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <hgroup><h1>Formulario enviado por el m&eacutetodo GET</h1></hgroup>
        <form name="envia-get_frm" action="envia-Datos.php" method="get" enctype="application/x-www-form-urlencoded">
            <label>Ingresea tu nombre: </label>
            <input type="text" name="nombre_txt"/>
            <br/><br/>
            <label>Ingresea tu password: </label>
            <input type="password" name="password_txt"/>
            <br/><br/>
            <input type="submit" name="enviar_btn" value="Envia-GET"/>
        </form>

        <hgroup><h1>Formulario enviado por el m&eacutetodo POST</h1></hgroup>
        <form name="envia-post_frm" action="envia-Datos.php" method="post" enctype="application/x-www-form-urlencoded">
            <label>Ingresea tu nombre: </label>
            <input type="text" name="nombre_txt"/>
            <br/><br/>
            <label>Ingresea tu password: </label>
            <input type="password" name="password_txt"/>
            <br/><br/>
            <input type="submit" name="enviar_btn" value="Envia-POST"/>
        </form>
    </body>
<html>