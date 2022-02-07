<?php

//Comprobacion de si existe el fichero
if (file_exists("pruebafichero.txt") == true) {
    echo "El fichero exise";
} else {
    echo "No esta el fichero";
}

//Crear un fichero
$miguel= fopen("miguelito.txt","a");
if ($miguel == false) {
    echo "Error no se ha creado";
} else {
    echo "Se ha creado correctamente";
}

fclose($miguel);

$miguel=fopen("miguelito.txt","w+");
if ($miguel == false) {
    echo "Error no se ha creado";
} else {
    //Escribimos el en fichero
    fwrite($miguel,"Miguel Romero Pérez\r\n");
    fwrite($miguel,"Manuel Martine Barranco");
    fflush($miguel);

}
fclose($miguel);

//Leer fichero
echo "<br>";
echo readfile("miguelito.txt");
echo "<br>";
echo filesize("miguelito.txt");
$peso_archivo= filesize("miguelito.txt");

$miguel= fopen("miguelito.txt","r+");
echo fread($miguel,$peso_archivo);
fclose($miguel);









?>