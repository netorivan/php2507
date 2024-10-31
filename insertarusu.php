<?php require('cabecera.php');
?>


<?php
// Datos de conexión a la base de datos (ajustados para XAMPP)
// Definición de constantes para la conexión las constantes es una buena parctica para ejecutar codigos
// una constante puede ser modificada en el codigo fuente y directamente se modificara en todos los archivos donde
// se encuentren, en cambio las variables definidas no como por ejemplo:
// define('SERVIDOR', 'localhost'); // Define el servidor de la base de datos
// define('USUARIO', 'root'); // Define el nombre de usuario para la base de datos
// define('PASSWORD', ''); // Define la contraseña para la base de datos
// define('BD', 'factuadso2'); // Define el nombre de la base de datos

//ahora como se muestra en la declaracion posterior a este mensaje
// es establecer nombres con declaracion de variables lo que puede hacer propensa a errores
// debido a que si se necesita modificar una variable, esa modificacion se debe hacer en todos los documentos.



$servername = "localhost";
$username = "root";
$password = ""; // Si no has cambiado la contraseña de root, déjala vacía
$dbname = "adminis"; // Reemplaza "tu_base_de_datos" con el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta SQL para seleccionar todos los usuarios
if ($_POST) {
    mysqli_query($conn, "insert into usuarioadministrador(id_usuario, nombre, apellido, cargo, usuario, contrasena) values
                           (NULL,'$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[cargo]','$_REQUEST[usuario]','$_REQUEST[contrasena]')")
        or die("Problemas en el select" . mysqli_error($conn));

    mysqli_close($conn);
    header("location:consulta.php");
    // echo '<script>    swal("Guardado!", "registro exitoso!", "success");</script>';
}
?>

<form action="" method="post">
    <label for=" nombre">ingrese nombre</label><br>
    <input type="text" name="nombre" id="nombre">
    <label for=" nombre">ingrese apellido</label><br>
    <input type="text" name="apellido" id="apellido">
    <label for=" nombre">ingrese cargo</label><br>
    <input type="text" name="cargo" id="cargo">

    <label for="">ingrese usuario</label><br>
    <input type="text" name="usuario" id="usuario">
    <label for="">ingrese contraseña</label><br>
    <input type="text" name="contrasena" id="contrasena">
    <input type="submit" value="ingresar">

</form>
<?php require('pie.php');
?>