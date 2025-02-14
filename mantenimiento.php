<?php include('includes/header.php'); ?>

<div class="container">
    <h2>Recordatorio de Mantenimiento</h2>
    <form action="mantenimiento.php" method="POST">
        <label for="last-service">Último servicio (fecha):</label>
        <input type="date" name="last-service" required><br>

        <label for="mileage">Kilometraje actual (km):</label>
        <input type="number" name="mileage" required><br>

        <input type="submit" value="Calcular Próximo Mantenimiento">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $lastService = $_POST['last-service'];
        $mileage = $_POST['mileage'];

        // Supongamos que el mantenimiento debe hacerse cada 15,000 km
        $nextServiceMileage = $mileage + 15000;
        echo "<h3>Próximo mantenimiento a los " . number_format($nextServiceMileage, 0) . " km.</h3>";
    }
    ?>
</div>

<?php include('includes/footer.php'); ?>
