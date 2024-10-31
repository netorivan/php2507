<?php
if ($_POST){
    $name1=$_POST['name1'];
    $horas=$_POST['horas'];
    $valor_hora= $horas*30000;
    $cant_empleados= $cant_empleados+1;
    $mesage= "la nomina de este mes señor $name1 es de: $valor_hora"; 
}

?>
<?php
if ($_POST)['submit2']; {
    $cant_empleados="0";
    $calcular=$valor_hora*$cant_empleados;
    echo "la nomina para este mes de todos los empleados es: $calcular";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exersice seven</title>
</head>



<body>
<!-- -Desarrolle un algoritmo para la empresa Constructora Tecnovivir Casas C.A., 
 que le permita calcular e imprimir la nómina para su cancelación a un total de 50 obreros 
 calificados a quienes debe cancelar por horas trabajadas. La hora trabajada se pautó en 30.000 Bolívares.      -->
</body>
<h1>TECNOVIVIR CASAS C.A.</h1>
<p>datos del empleado</p>

<!-- para hacer que nuestro algoritmo nos solicite 50 veces los dato de los obreros, vamos a crear un for
 este lo quiero acompañar con un si condicional vamos a ver si funciona!!! -->



<form action="" method="post">
    <label for="">nombre del trabajador</label><br>
    <input type="text" name="name1" id="name1"required><br>
    <label for="">ingrese las horas</label><br>
    <input type="number" name="horas" id="horas"><br><br>
    <input type="submit" value="enviar">

</form>
<br><br>
<?php
echo $mesage
?>
<h2>calcular nomina</h2>
<form action="" method="post">
    <label for="">calcular la nomina de todos los trabajadores ingresados</label><br><br>
    <input type="submit" value="calcular"><br>

</form>

</html>