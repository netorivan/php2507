<?php require('cabecera.php');
?>
<?php
// Datos de conexión a la base de datos (ajustados para XAMPP)
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
$sql = "SELECT * FROM usuarioadministrador";
$result = $conn->query($sql);
?>
<!-- esta linea de codigo es de html, por eso no se pued meter entre las etiquetas de php y tampoco
 se puede quitar las demas etiquetas ya que no hay codigo php limpio, osea solo codigo php -->
<a href="insertarusu.php">ingresar</a>
<?php
// Mostrar los resultados en una tabla HTML
if ($result->num_rows > 0) {
    echo "<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cargo</th>
        <th>Usuario</th>";
    while ($row = $result->fetch_assoc()) {
        echo "
    <tr>
        <td>" . $row["id_usuario"] . "</td>
        <td>" . $row["nombre"] . "</td>
        <td>"
            . $row["apellido"] . "</td>
        <td>" . $row["cargo"] . "</td>
        <td>" . $row["usuario"] . "</td>
    </tr>";
    }
    echo "
</table>";
} else {
    echo "No se encontraron usuarios.";
}

$conn->close();
