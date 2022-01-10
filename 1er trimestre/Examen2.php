<?php

$text1=$_POST["texto1"];
$text2=$_POST["texto2"];
$text3=$_POST["texto3"];
$selector=$_POST["texto"];



#Texto en mayusculas.
function mayusculas($text1){
    $res= strtoupper($text1);
    print "En mayusculas es: ".$res."<br>";
}


#Desordenar.
function desordenar($text1){
    $res= str_shuffle($text1);
    print "Desordenado es: ".$res."<br>";
}
#Convertir en array.
function convertir($text1){
    $array1 = str_split($text1);
    
    print_r($array1);
    
}
#Contar.
function cuentaletras($text1){

    $res=strlen($text1);

    print "El resultado es ".$res."<br>";

}
#Reemplazar.
function reemplazar($text3,$text2,$text1){
    $res=str_replace($text3,$text2,$text1);
    print "Ahora es: ".$res."<br>";

}



switch ($selector) {
    case 'mayus':
       mayusculas($text1);
    break;
    case 'desord':
        desordenar($text1);
    break;
    case 'convert':
        convertir($text1,$text2,$text3);
    break;
    case 'contar':
        cuentaletras($text1);
    break;
    case 'reemp':
        reemplazar($text3,$text2,$text1);
    break;
    default:
        
    break;
}






?>

</body>
</html>