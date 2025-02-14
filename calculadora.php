<?php include('includes/header.php'); ?>

<div class="container">
    <h2>Calculadora de Costo de Carga</h2>
    <form action="calculadora.php" method="POST">
        <label for="kwh-price">Precio por kWh (€):</label>
        <input type="number" step="0.01" name="kwh-price" required><br>

        <label for="battery-capacity">Capacidad de la batería (kWh):</label>
        <input type="number" step="0.1" name="battery-capacity" required><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $kwhPrice = $_POST['kwh-price'];
        $batteryCapacity = $_POST['battery-capacity'];
        
        $totalCost = $kwhPrice * $batteryCapacity;
        echo "<h3>Costo de carga estimado: €" . number_format($totalCost, 2) . "</h3>";
    }
    ?>
</div>

<?php include('includes/footer.php'); ?>
