<?php require('cabecera.php');
?>
<?php
// Inicialización
$tarifa_hora = 30000;
$total_obreros = 50;
$nomina = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar el formulario
    for ($i = 1; $i <= $total_obreros; $i++) {
        $horas_trabajadas = $_POST["horas_trabajadas_$i"];
        $salario = $horas_trabajadas * $tarifa_hora;
        $nomina[$i] = $salario;
    }
}
?>


    <h1>Nómina de Obreros</h1>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <?php for ($i = 1; $i <= $total_obreros; $i++): ?>
            <label for="horas_trabajadas_<?php echo $i; ?>">Horas trabajadas para el obrero <?php echo $i; ?>:</label>
            <input type="number" id="horas_trabajadas_<?php echo $i; ?>" name="horas_trabajadas_<?php echo $i; ?>" required><br><br>
        <?php endfor; ?>
        
        <input type="submit" value="Calcular Nómina">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Resultados de la Nómina</h2>
        <ul>
            <?php foreach ($nomina as $obrero => $salario): ?>
                <li>Obrero <?php echo $obrero; ?>: Salario: <?php echo $salario; ?> Bolívares</li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <?php require('pie.php');
?>
