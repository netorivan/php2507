<?php require('cabecera.php');
?>
<style>
    .error {
color: red;
    }
</style>

<!-- para que una variable sea reconocida con valores vacios o nulos se les coloca de la sigiente manera 
 -->
<?php
$sum = $n1 = $n2 = $n3 = '';
$n1err = $n2err = $n3err = '';


if ($_POST) {
    //le metemos la funcion para que valide los datos solicitados antes que haga la operacion
    $n1 = test_input($_POST['n1']);
    $n2 = test_input($_POST['n2']);
    $n3 = test_input($_POST['n3']);
// validacion de campos
    if (empty($_POST["n1"])) {
        $n1err = "Number is required";
    }

    if (empty($_POST["n2"])) {
        $n2err = "number is required";
    }
    if (empty($_POST["n3"])) {
        $n3err = "numer is required";
      } 
        // Solo calcular si no hay errores
        //para operaciones complejas, se utiliza && ya que da pioridad a la ejecuscion de la misma
        //caso contrario de and, que tiende a ser menos prioritario por lo tanto solo debemos utilizarla
        // cuando sean operaciones sencillas y no complejas
    if (empty($n1err) && empty($n2err) && empty($n3err)) {
    //aqui se verifica que la variable $n1err,n2err y la otra esten vacias, si estan llenas quiere decir que
// anteriormente que se cumplio la condicion y esto hace que la variables n?err esten llenas, por lo que
//no se haria la suma. 
        $sum = ($n1 + $n2 + $n3) / 3;
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 

echo "<h1>NESTOR IVAN CASTRO MARIN</h1>";
echo "<h1>primer ejercisio con php</h1>";
echo "<h2>PROMEDIO</h2>";
echo '<br><br>';
//en este lenguaje no necesitamos declarar una variable
//solo debemos escribirla y declararla con $ este signo el de dinero
?>

<form action="" method="post">
    <!-- label significa mostrar un mensaje-->

    <!-- input tenemos varios tipos pero los que hemos utilizado son
 text, number e submint que es para mostar boton de accion-->
    Number one:    <input type="number" name="n1" id="n1">
    <span class="error">* <?php echo $n1err; ?></span>
    <br><br>
    number two:   <input type="number" name="n2" id="n2">
    <span class="error">* <?php echo $n2err; ?></span>
    <br><br>
    number three: <input type="number" name="n3" id="n3">
    <span class="error">* <?php echo $n3err; ?></span>
    <br><br>

    <!-- input sumit es para crear boton-->
    <input type="submit" value="promedio"><br>

</form>
<!-- colocamos una estructura php y mostramos el resultado, nota: la profe lo hizo de diferente manera -->
<?php
echo  $sum;
?>

<?php require('pie.php');
?>