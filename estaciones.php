<?php include('includes/header.php'); ?>

<div class="container">
    <h2>Estaciones de Carga Cercanas</h2>
    <div id="map" style="height: 400px;"></div> <!-- Aquí irá el mapa interactivo -->
</div>

<?php include('includes/footer.php'); ?>

<script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&callback=initMap" async defer></script>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 40.7128, lng: -74.0060}, // Coordenadas de ejemplo (Nueva York)
            zoom: 12
        });

        // Marcadores de ejemplo de estaciones de carga
        var markers = [
            {lat: 40.730610, lng: -73.935242},
            {lat: 40.712776, lng: -74.005974}
        ];

        // Colocamos los marcadores
        markers.forEach(function(marker) {
            new google.maps.Marker({
                position: marker,
                map: map
            });
        });
    }
</script>
