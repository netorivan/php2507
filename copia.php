
<!--para comentar seguimos con el eslash pero solo que esta vez es dentro de la estructura de php
se llama la funcion de html para agreagr funcionalidades a nuestro archivo php

-->
<!DOCTYPE html>
<html lang="en">
<head>
<!-- dentro de la cabeza es que le damos los toques de estilo a nuestro codigo de php y para eso lo llamamos con la variable style-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
<!-- para la propiedad colors se utiliza el corchete ya que no nos sale implementado automaticamente-->
<style>
    h1 {
        color: purple;
        font-family:courier;
        text-align:center;
    }
    h2 {
        font-size:360%;
        text-align:center;
        background-color: blueviolet;
    }
</style>

</head>
<!-- podemos inicializar php con solo abrir las llaves de el ejempl:  o tambien podemos implementarlo dentro 
 de una estructura de html y darle estilo con css y java vamos a ello 
 solo que esta vez se hace hace la funcion desde head y se llama la funcion con el nombre d ela variable
-->
 
<body>
    <?php
    if ($_POST) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $sum = ($n1+$n2+$n3)/3;   
    } 

    echo "<h1>mi nombre es nestor</h1>";
    echo "<h1>primer ejercisio con php</h1>";
    echo "<h2>PROMEDIO</h2>";
//en este lenguaje no necesitamos declarar una variable
//solo debemos escribirla y declararla con $ este signo el de dinero
?>
<form action="" method="post">
<!-- label significa mostrar un mensaje-->
    
<!-- input tenemos varios tipos pero los que hemos utilizado son
 text, number e submint que es para mostar boton de accion-->
 <label for="">digite su primer numero</label><br>
    <input type="number" name="n1" id="n1"><br> <br>
    <label for="">digite su segundo numero</label><br> 
    <input type="number" name="n2" id="n2"><br> <br>
    <label for="">digite su tercer numero</label><br> 
    <input type="number" name="n3" id="n3"><br> <br>
    <!-- input sumit es para crear boton-->
    <input type="submit" value="promedio"><br>

</form>
<!-- colocamos una estructura php y mostramos el resultado, nota: la profe lo hizo de diferente manera -->
<?php
echo  $sum;
?>
<br><br>



</body>
</html>