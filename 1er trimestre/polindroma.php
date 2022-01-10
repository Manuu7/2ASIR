<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
<?php
  if (isset($_POST['boton'])){ // Se ha pulsado el botón???
      $cadena=$_POST['palabra']; 
      $cadenainvertida = strrev($cadena);
    echo "<h1>Cálculo de palíndromos</h1>";
    if (strcmp($cadena, $cadenainvertida)==0){
        echo "<p>La cadena $cadena es un palíndromo</p>";
    } 
    else{
        echo "<p>La cadena $cadena no es un palíndromo</p>";
    }
    
  }
  else{   // Primera carga
   
  }  
?>            
    </body>
</html>