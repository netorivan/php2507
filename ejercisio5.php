<?php require('cabecera.php');
?>
<?php
if ($_POST) {
    $name = $_POST['name'];
    $cod = $_POST['cod'];
    $cant = $_POST['cant'];
    $mocasines = 55000;
    $tenis = 70000;
    $sandalias = 35000;
    $valorneto;
    $valortotal;
    $descu;

    if ($cod = 001) {
        $valorneto = $mocasines * $cant;
        $descu = $valorneto * 0.08;
        $valortotal = $valorneto - $descu;
    } else if ($cod = 002) {
        $valorneto = $tenis * $cant;
        $descu = $valorneto * 0.08;
        $valortotal = $valorneto - $descu;
    } else if ($cod = 003) {
        $valorneto = $sandalias * $cant;
        $descu = $valorneto * 0.08;
        $valortotal = $valorneto - $descu;
    } else {
        $mesage = "por favor ingrese un codigo valido";
    }
}

?>

    <!-- Un amigo suyo acaba de iniciar un negocio de venta de zapatos. Por ahora sólo vende tres 
 tipos de zapatos: sandalias, tenis y mocasines. Cada tipo de zapato lo adquiere a un costo 
 distinto y para venderlos, supone una ganancia del 55%. Cuando un cliente llega debe comprar 
 de los tres tipos de zapatos y la cantidad que desee de cada uno de ellos. El cliente tiene 
 derecho a un 8% de descuento sobre la compra que realiza. Ayúdele a su amigo a 
 nota: lo primero que debo hacer es... crear un programa que, 
 para un cliente dado, muestre su nombre, el valor de la venta sin descuento, el descuento, 
 valor de la venta con descuento y valor de la venta incluyendo IVA (venta neta final). 
 -solicitar el ingreso del nombre del cliente
-solicitar el tipo de calzado que se esta comprando
-solicitar la cantidad 
 
 -->
    <h1>BIENVENIDOS AL HOGAR DEL CALZADO</h1>
    <h2>realizar factura </h2>
    <form action="" method="post">
        <label for="">nombre y apellidos</label><br>
        <input type="text" name="name" id="name"><br><br>
        <label for="">codigo del calzado</label><br>
        <input type="number" name="cod" id="cod"><br><br>
        <label for="">seleccione la cantidad</label><br>
        <input type="number" name="cant" id="cant"><br><br>
        <input type="submit" value="realizar">

    </form>
    <!-- en este ejercisio, trate de mostrar los textos aqui abajo de forma directa con echo, sin embargo
     me salian muy juntos y peñuscados, y al colocarle el salto de pagina me daba error, por lo que decidi
     enmarcar los echo con h1 y h2 esto para que no se amontonaran, obvio todo en formato php
     sin embargo, tenemos otra forma y es con la estructura html, que es directamente con label 
     esto nos da una ventaja de mostar el mensaje tipo texto y con la info guardada en el proceso interno
     de php -->
    <?php
    echo "<h1> esta es su factura señor(a): $name</h1> ";
    echo "<h2> el valor de su cuenta es de: $valorneto </h2>";
    echo "<h2> se le hara un descuento del 8% : $descu</h2>";

    echo "su cuenta total seria: $valortotal ";
    ?>
    <br>
    <label for=""><?php echo "ahora voy a comprobar si puedo hacer esta mescla de label y php: $valortotal"  ?></label>


    <h1>GRACIAS POR SU COMPRA</h1>
    <?php require('pie.php');
?>