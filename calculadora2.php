<?php

#Variables metodo POST
$numrecog1=$_POST["operando1"];
$numrecog2=$_POST["operando2"];
$selector=$_POST["operador"];



#Funcion Suma
function suma($numrecog1,$numrecog2){

    $res= $numrecog1 + $numrecog2;

    print "El resultado es ".$res."<br>";
}



#Funcion Resta
function resta($numrecog1,$numrecog2){

    $res= $numrecog1 - $numrecog2;

    print "El resultado es ".$res."<br>";
}

#Funcion multiplicacion
function multiplicacion($numrecog1,$numrecog2){

     $res= $numrecog1 * $numrecog2;

  print "El resultado es ".$res."<br>";
}

#Funcion Division
function division($numrecog1,$numrecog2){

    $res= $numrecog1 / $numrecog2;

    print "El resultado es ".$res."<br>";
}

#Funcion Raiz cuadrada
function raizcuadrada($numrecog1){
   
    $res= sqrt($numrecog1);
   
    print "El resultado es ".$res."<br>";
   
   }

   #Funcion Elevar al cuadrado
function elevaralcuadrado($numrecog1){
   
    $res=pow($numrecog1,2);
   
    print "El resultado es ".$res."<br>";
   
   }

   #Funcion Elevar al cubo
   function elevaralcubo($numrecog1){
   
    $res=pow($numrecog1,3);
   
    print "El resultado es ".$res."<br>";
   
   }

   #Funcion Elevar al cualquier exponente
   function elevar($numrecog1,$numrecog2){
   
    $res=pow($numrecog1,$numrecog2);
   
    print "El resultado es ".$res."<br>";
   
   }

#Realizacion de variables
switch ($selector) {
    case 'suma': 
        suma($numrecog1,$numrecog2);
    break;
    
    case 'resta': 
        resta($numrecog1,$numrecog2);
    break;

    case 'multiplicaion': 
        multiplicacion($numrecog1,$numrecog2);
    break;

    case 'division': 
        division($numrecog1,$numrecog2);
    break;

    case 'raiz cuadrada': 
        raizcuadrada($numrecog1);
        
    break;

    case 'elevar cuadrado':
         elevaralcuadrado($numrecog1,2);
        
    break;

    case 'elevar cubo': 
        elevaralcubo($numrecog1);
        
    break;

    case 'elevar': 
        elevar($numrecog1,$numrecog2);
        
    break;
}


?>
</body>
</html>