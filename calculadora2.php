<?php

#Variables metodo POST
$num1=$_POST["operando1"]
$num2=$_POST["operando2"]
$selector=$POST["operador"]

echo $selector;
echo $num1;
echo $num2;
#Funcion Suma
function suma($num1,$num2){

    $res= $num1 + $num2;

    print "El resultado es ".$res."<br>";
}

#Funcion Resta
function resta($num1,$num2){

    $res= $num1 - $num2;

    print "El resultado es ".$res."<br>";
}

#Funcion multiplicacion
function multiplicacion($num1,$num2){

     $res= $num1 * $num2;

  print "El resultado es ".$res."<br>";
}

#Funcion Division
function division($num1,$num2){

    $res= $num1 / $num2;

    print "El resultado es ".$res."<br>";
}

#Realizacion de variables
switch ($selector) {
    case '+': suma($num1,$num2)
        # code...
        break;
    
    default:
        # code...
        break;
}


?>
</body>
</html>