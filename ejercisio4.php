<?php require('cabecera.php');
?>
    <!-- Desarrolle un algoritmo que permita convertir calificaciones numéricas, según la siguiente tabla:  -->
    <!-- A = 19 y 20, B =16, 17 y 18, C = 13, 14 y 15, D = 10, 11 y 12, E = 1 hasta el 9. Se asume que la -->
    <!-- nota está comprendida entre 1 y 20.  -->

    <!-- solucion: lo que debo hacer es solicitar que ingresen la nota en numeros y desde ahi hacer el procesos
  de elegir y mostar en pantalla que nota en letras optuvo todo eso con la estructura del si condicional
  si no mal recuerdo lo debemos empezar por el mas bajo primero y hacemos una cadena de condicionales
  ok lets doing  -->

    <?php
    if ($_POST) {
        $nota = $_POST['nota'];
        if (($nota <= 9) and ($nota >= 1)) {
            $letra = "E";
            $mesage = "usted reprobo con: $letra";
        } else if (($nota <= 12) and ($nota >= 10)) {
            $letra = "D";
            $mesage = "usted reprobo con: $letra";
        } elseif (($nota <= 15) and ($nota >= 13)) {
            $letra = "C";
            $mesage = "usted esta en periodo de recuperacion con: $letra";
        } elseif (($nota <= 18) and ($nota >= 16)) {
            $letra = "B";
            $mesage = "usted aprobo con: $letra";
        } elseif (($nota <= 20) and ($nota >= 19)) {
            $letra = "A";
            $mesage = "usted aprobo con: $letra ¡FELICIDADES USTED A APROBADO CON HONORES!";
        } else {
            $mesage = 'porfavor digite una nota valida.';
        }
    }


    ?>
    <h1>'EXERCISE FOUR'</h1>
    <h2>this is beautiful</h2>
    <form action="" method="post">
        <label for="">ingrese la nota del 1 al 20</label>;<br>
        <input type="number" name="nota" id="nota"><br><br>
        <input type="submit" value="calcular">
        <!-- el input tipo submit sirve para crear una accion, ya que lo intente con el tipo button y no me crea el evento -->
    </form>

    <h1> <?php echo $mesage ?></h1>



    <?php require('pie.php');
?>