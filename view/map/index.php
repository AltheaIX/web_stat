<?php
include '../../config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        #map {
            height: 100vh; /* 100% tinggi dari viewport */
            width: 100%; /* 100% lebar dari viewport */
        }
    </style>
</head>

<body>
    <section>
        <div class="container-fluid" >
            <div class="position-relative" id="map"></div>
        </div>
    </section>
    <script>
        function initMap() {
            var bitungCenter = { lat: 1.4485, lon: 125.1828 }; // Koordinat pusat Bitung
            var map = L.map('map').setView([bitungCenter.lat, bitungCenter.lon], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            <?php
            $sql = $conn->prepare("SELECT * FROM `tb_map` ORDER BY id DESC");
            $sql->execute();
            while($data=$sql->fetch()) {
            ?>
            L.marker([<?php echo $data['latitude'];?>, <?php echo $data['longitude'];?>]).addTo(map).bindPopup('<?php echo $data['nama'];?>');
            <?php } ?>
        }
        // Panggil initMap setelah dokumen selesai dimuat
        document.addEventListener('DOMContentLoaded', initMap);
    </script>
    <script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
