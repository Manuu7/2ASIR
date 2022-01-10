<?php

#Variables metodo POST
$numrecog1=$_POST["operando1"];

$selector=$_POST["operador"];


#Funcion Decimal a binario.
function debi($numrecog1){
    $res=decbin($numrecog1);
    echo "El número " . $numrecog1 . " es " . $res . " en binario";
}


#Funcion Decimal a octal.
function deoc($numrecog1){
    $res= decoct($numrecog1);
    echo "El número " . $numrecog1 . " es " . $res . " en octal";
}

#Funcion Decimal a hexadecimal.
function dehe($numrecog1){
    $res= dechex($numrecog1);
    echo "El número " . $numrecog1 . " es " . $res . " en hexadecimal";
}

#Funcion Binario a decimal.
function bide($numrecog1){
    $res= bindec($numrecog1);
    echo "El número " . $numrecog1 . " es " . $res . " en decimal";
}

#Funcion Octal a deciaml.
function ocde($numrecog1){
    $res= octdec($numrecog1);
    echo "El número " . $numrecog1 . " es " . $res . " en decimal";
}

#Funcion Hexadecimal a decimal.
function hede($numrecog1){
    $res= hexdec($numrecog1);
    echo "El número " . $numrecog1 . " es " . $res . " en decimal";
}


#Realizacion de variables
switch ($selector) {
    case 'Decbin': 
        debi($numrecog1);
    break;
    
    case 'Decoct': 
        deoc($numrecog1);
    break;
    
    case 'Dechex': 
        dehe($numrecog1);
    break;

    case 'Bindec': 
        bide($numrecog1);
    break;

    case 'Ocdec': 
        ocde($numrecog1);
    break;

    case 'Hexdec': 
        hede($numrecog1);
    break;

}


?>
</body>
</html>