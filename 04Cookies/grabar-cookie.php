<?php
    //Para que la cookie funcione se tiene que especificar la rita del directorio en el cuarto parametro con "/", se entinde que la
    //cookie existirá en todo el directorio del sitio.
    setcookie("idioma_solicitado",$_GET["idioma"],time()+86400,"/");
    header("Location: usar-cookie.php");
?>