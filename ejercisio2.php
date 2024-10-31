<?php require('cabecera.php');
?>
<?php
  if ($_POST) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $nombre = $_POST['nombre'];
    $name = $_POST['name'];
    // voy a tratar de crear una varable o de llamarla a este procedimiento pos de php para mostrar
    // el nombre por mensaje
    if ($n1 > $n2) {
      $difer = $n1 - $n2;
      $masage = "$nombre es el mayor de edad y la diferencia de edad es $difer";
    } else {
      $difer = $n2 - $n1;
      $masage = "$name es el mayor de edad y la diferencia de edad es $difer";
    }
  }
  #cuando estoy fuera de php comento con numeral, aumque etoy confundido. pero si estoy en php si es para comentar
  #para procesos internos utilizamos php y llamamos esta funcion como una subfuncion

  echo "<h1>NESTOR IVAN CASTRO MARIN</h1>";
  echo "<h2>SEGUNDO EJERCISIO</h2>";
  echo "<h2>aplique un segundo segmento con h2 que son estos dos y quedo asì </h2>";

  ?>

  <!-- -Elabora un algoritmo que solicite la edad de 2 hermanos y muestre un mensaje indicando 
     la edad del mayor y
  cuantos años de diferencia tiene con el menor. -->
  <!-- para estructuras php siempre debemos ingresarlos en una a llave php -->
  
  <h1>"lo mejor es parcticar y experimentar"</h1>
  <form action="" method="post">
    <label for="">edad y el nombre</label><br>
    <input type="number" name="n1" id="n1">
    <input type="text" name="nombre" id="nombre"><br> <br>
    <label for="">edad y el nombre</label><br>

    <input type="number" name="n2" id="n2">
    <input type="text" name="name" id="name"> <br> <br>
    <input type="submit" value="examinar">

  </form>

  <?php echo $masage
  ?>
<?php require('pie.php');
?>