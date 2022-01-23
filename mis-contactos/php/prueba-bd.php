<?php
    /*Pasos para conectarme a una base de datos MySQL con PHP
        1) Conectarme al BD, mysql_connect, necesita 3 pasos
        1) Servidor
        2) Usuario de la BD
        3) Password del usuario de la BD
    */
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    $conexion=mysqli_connect("localhost","root","","mis_contactos") or die("No se pudo conectar con el servidor de BD");
    echo "Estoy conectado a MySQL <br/>";

    //Seleccionar la BD con la que vamos a trabajar
    mysqli_select_db($conexion,"mis_contactos") or die("No se pudo seleccionar la BD 'mis contactos'");
    echo "BD de datos seleccionada, mis_contactos <br/>";

    //Crear una consulta SQL
    $consulta = "SELECT * FROM pais";

   //Ejecutar la consulta SQL
    $ejecutar_consulta = mysqli_query($conexion,$consulta) or die("No se pudo ejecutar la consulta en la BD");
    echo "Se ejecuto la consulta a la BD <br />";

    //Mostrar el resultado de ejecutar la consulta, dentro de un ciclo y en una variable voy a ingresar la funcion mysql fetch array
    while($registro = mysqli_fetch_array($ejecutar_consulta)){
        echo $registro["id_pais"]." - ".$registro["pais"]."<br />";
    }

    //Cerrar la conexion a la BD
    mysqli_close($conexion) or die("Ocurrio un error al cerrar la conexion a la BD");
    echo "Conexion cerrada";
?>