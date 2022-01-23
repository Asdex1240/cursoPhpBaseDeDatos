<?php
    //Imprimir en pantalla
    echo ("Hola mundo");
    echo("<br/>Hola cruel mundo <br /><h1>estoy aprendiendo PHP</h1>");
    //Variables
    $nombre = "Jonathan";
    $Nombre = "Ulises";

    //Contatenar
    echo $nombre." ".$Nombre;

    echo "<br/ >";
    $num1 = 5;
    $num2 = 78;
    $suma = $num1 + $num2;
    echo $suma;

    echo "<br />La variable \$suma tiene el valor de $suma";
    $modulo = $num2 % 2;

    if($modulo == 0){
        echo "<br />$num2 es par";
    }else{
        echo "<br /> $num2 es impar";
    }
?>