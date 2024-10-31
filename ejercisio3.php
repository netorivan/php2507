<?php require('cabecera.php');
?>
    <?php
    $sum='';
    $mult='';
    if ($_POST) {
        $num1 = $_POST['num1'];
        $sum = $num1 + $num1;
        $mult = $num1 * 3;
    }


    ?>
    <h1>NESTOR IVAN CASTRO MARIN</h1>
    <H2>ADSO 2758253-ANALISIS Y DESAROLLO DE SOFTWARE</H2>
    <p>doblar y triplicar el numero</p>
    <form action="" method="post">
        <label for="">ingrese el numero</label>;<br>
        <input type="number" name="num1" id="num1"><br><br>
        <input type="submit" value="operaciòn">
        <!-- <input type="submit" value="multiplicar"> -->
    </form>
    <?php
    echo  '<p>el numero ingresado quedaria doblado en: </p>  '.$sum;
    echo  '<p>el numero ingresado quedaria triplicado en: </p>  '.$mult;
    ?>

<?php require('pie.php');
?>