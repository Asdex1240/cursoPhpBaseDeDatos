<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    $conexion=mysqli_connect("localhost","root","","mis_contactos") or die("No se pudo conectar con el servidor de BD");
    echo "Estoy conectado a MySQL <br/>";

    mysqli_select_db($conexion, "mis_contactos") or die("No se pudo conectar a la base de datos");
    echo "BD seleccionada 'mis contactos'";

    echo "<h1>Las 4 operaciones basicas a una BD</h1>";
    echo "<h2>1 Insercion de Datos</h2>";
    //INSERT INTO nombre_tabla (campos_tabla, VALUES(valores_campos))
    $consulta = "INSERT INTO contactos(email, nombre, sexo, nacimiento, telefono, pais, imagen) VALUES ('juan2.@email.com','Juan Moreno','M','2003-02-08','528187994962','México','juan.png')";

    $ejecutar_consulta =  mysqli_query($conexion,$consulta) or die("No se pudo ejecutar la consulta en la BD");
    echo "Se han insertado los datos a la BD <br />";

    echo "<h2>ELIMINACION DE DATOS</h2>";
    // DELETE FROM nombre_tabla WHERE campo = valor
    $consulta = "DELETE FROM contactos WHERE email = 'juan.@email.com'";
    $ejecutar_consulta =  mysqli_query($conexion,$consulta) or die("No se pudo ejecutar la consulta en la BD");
    echo "Datos eliminados <br />";

    echo "<h2>MODIFICACION DE DATOS</h2>";
    // UPDATE nombre_tabla SET nombre_campo = valor_campo, otro_campo = otro_valor WHERE campo = valor
    $consulta = "UPDATE contactos SET email = 'cursos@bextlan.com', nombre = 'bextlan', imagen='bextlan.png' WHERE email = 'juan2.@email.com'";
    $ejecutar_consulta =mysqli_query($conexion,$consulta) or die("No se pudo ejecutar la consulta en la BD");
    echo "Los Datos han sido actializados <br />";

    echo "<h2>CONSULTA (Busqueda) DE DATOS</h2>";
    //SELECT * FROM tabla WHERE campo = valor
    $consulta = "SELECT * FROM contactos WHERE email = 'cursos@bextlan.com'";
    $ejecutar_consulta =mysqli_query($conexion,$consulta) or die("No se pudo ejecutar la consulta en la BD");
    while($registro = mysqli_fetch_array($ejecutar_consulta)){
        echo $registro["email"]."---";
        echo $registro["nombre"]."---";
        echo $registro["sexo"]."---";
        echo $registro["nacimiento"]."---";
        echo $registro["telefono"]."---";
        echo $registro["pais"]."---";
        echo $registro["imagen"]."---";
    }
    mysqli_close($conexion) or die("Ocurrio un error al cerrar la conexion a la BD");
    echo "Conexion cerrada";
?>