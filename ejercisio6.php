<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise sixth</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<!-- -Desarrolle un algoritmo que permita leer tres valores y almacenarlos en las variables A, B y C 
 respectivamente. El algoritmo debe imprimir cual es el mayor y cual es el menor. Recuerde 
 constatar que los tres valores introducidos por el teclado sean valores distintos. 
 Presente un mensaje de alerta en caso de que se detecte la introducción de valores iguales.  -->
<?php
$repeterror = "";
if ($_POST) {
    $A = $_POST['A'];
    $B = $_POST['B'];
    $C = $_POST['C'];
    // aqui no puedo utilizar or ya que, tiene que ser mayor que los otros dos numeros ingresados no puede 
    //no puede ser que sea mayor a solo uno por ende se necesita que los dos sean verdaderos osea 
    //las dos logicas del si
    if (($A > $B) and ($A > $C)) { 
        $mesage = "A es el mayor";
    } elseif (($B > $A) and ($B > $C)) {
        $mesage = "B es el mayor";
    } elseif (($C > $B) and ($C>$A)) {
        $mesage = "C es el mayor";
    } else
        $mesage = "no se que poner";
}

?>


<body>
    <h1>HOLA DE NUEVO HOY VAMOS A EJECUTAR VALORES DIFERENCIALES</h1>
    <h2>A--B--C </h2>
    <form action="" method="post">
        <label for="">ingrese tres datos diferentes, (alerta: no pueden ser repetidos)</label><br>
        <input type="number" name="A" id="A">
        <span class="error">* <?php echo $repeterror; ?></span>
        <br><br>
        <!-- <label for="">codigo del calzado</label><br> -->
        <input type="number" name="B" id="B">
        <span class="error">* <?php echo $repeterror; ?></span><br><br>
        
        <!-- <label for="">seleccione la cantidad</label><br> -->
        <input type="number" name="C" id="C">
        <span class="error">* <?php echo $repeterror; ?></span><br><br>
        <input type="submit" value="realizar">

        <?php
        echo "<h1> $mesage</h1> ";
        //  echo "<h2> el valor de su cuenta es de: $valorneto </h2>"; 
        //  echo "<h2> se le hara un descuento del 8% : $descu</h2>";

        //  echo "su cuenta total seria: $valortotal ";  
        ?>


</body>

</html>