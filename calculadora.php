<!DOCTYPE html>
<html lang="en">
<head>
    <style>

Button {
  font-family: verdana;
  font-size: 20px;
  border-left-style: solid
}
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form>


<form>
        <fieldset><br>
            <legend>Calculadora</legend>
        <label >Numero1</label>
        <input type="text" name="Nombre"><br>
        <label>Numero2</label>
      
        
         <input type="text" name="2ºApellido"><br><br><br>
        <label>operaciones</label><br><br><br> 
        <input type="Button" name="operador" value="+"> 
        <input type="Button" name="operador" value="-">
        <input type="Button" name="operador" value="X"> 
        <input type="Button" name="operador" value="/">  
        <input type="Button" name="operador" value="%"><br><br><br> 
        <input type="Button" name="operador" value="raiz cuadrada">
        <input type="Button" name="operador" value="cuadrado²">
        <input type="Button" name="operador" value="cubo³">
        <input type="Button" name="operador" value="Elevar">
        <input type="Button" name="operador" value="Fibonucci"><br><br>
        <input type="Button" name="operador" value="resolver"><br><br><br>
        <h3>Resultado</h3><br><br>


</form>

<?php



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

#Funcion Raiz cuadrada
function raizcuadrada($num1){
   
 $res= sqrt($num1);

 print "El resultado es ".$res."<br>";

}

#Funcion Elevar al cuadrado
function elevaralcuadrado($num1){
   
    $res=pow($num1,2);
   
    print "El resultado es ".$res."<br>";
   
   }

   #Funcion Elevar al cubo
   function elevaralcubo($num1){
   
    $res=pow($num1,3);
   
    print "El resultado es ".$res."<br>";
   
   }

   #Funcion Elevar al cualquier exponente
   function elevar($num1,$num2){
   
    $res=pow($num1,$num2);
   
    print "El resultado es ".$res."<br>";
   
   }

   #Funcion Fibonucci
   function fivo($fin){
    $var1=0;
    $var2=1;
    $var3=0;    
    $ini=0;


     while ($ini <= $fin) {

        
#paso1
$var3=$var1+$var2;
#paso2
$var1=$var2;
$var2=$var3;
#paso 3
        $ini++;
        echo $var3."<br>";
         
     }
   
 
   
   }

fivo(10);

#Funcion Get y Post




?>
</body>
</html>