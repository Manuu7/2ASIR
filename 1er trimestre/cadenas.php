<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas</title>
</head>
<body>
<?php

$text1=$_POST["texto1"];
$text2=$_POST["texto2"];
$text3=$_POST["texto3"];
$selector=$_POST["texto"];


function cuentaletras($text1){

    $res=strlen($text1);

    print "El resultado es ".$res."<br>";

}

function cuentapalabras($text1){
    
    $res=str_word_count($text1);

    print "el resultado es ".$res."<br>";
}

function invierte($text1){
    $res=strrev($text1);
    print "el resultado es ".$res."<br>"."<br>";

 }

function reemplazar($text3,$text2,$text1){
    $res=str_replace($text3,$text2,$text1);
    print "Ahora es: ".$res."<br>";


}
function buscar($text1,$text2){
    
    $res=strpos($text1,$text2);
    if ($res==True) {
        print "La palabra se encuentra en el texto";
    }

        else {
            print "La palabra no esta en el texto";
        }
    
    
    
    }


switch ($selector) {
    case 'cuentalet':
       cuentaletras($text1);
    break;
    case 'cuentapal':
        cuentapalabras($text2);
    break;
    case 'invertir':
        invierte($text1,$text2,$text3);
    break;
    case 'reemplazar':
        reemplazar($text3,$text2,$text1);
    break;
    case 'buscar':
        buscar($text1,$text2);
    break;
    default:
        
    break;
}




?>

</body>
</html>