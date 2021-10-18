<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="get">
        nombre: <input type="text" name="enombre"><br>
        apellidos: <input type="text" name="eapellidos"><br>
        email: <input type="text" name="ecorreo"><br>
        <input type="submit" value="Enviar" />
    </form>

    <?php
    #Paso1: Elegir metodo, en nuestro caso, get

    #Paso2: Recoger del formulario los datos
    $nombrerecogido=$_GET["enombre"];
    $apellidosrecogido=$_GET["eapellidos"];
    $correorecogido=$_GET["ecorreo"];

    #Paso3: Representar/usar la informacion
    echo "Su nombre es ".$nombrerecogido." ".$apellidosrecogido." y su correo es".$correorecogido
    ?>

</body>
</html>