<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Kecepatan Kendaraan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="number"] {
            width: 200px;
            padding: 5px;
        }
        input[type="submit"] {
            margin-top: 10px;
            padding: 5px 10px;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Hitung Kecepatan Kendaraan</h1>
    
    <form method="POST" action="output.php">
        <h2>Kecepatan Cepat</h2>
        <label for="jarak_cepat">Jarak (km):</label>
        <input type="number" id="jarak_cepat" name="jarak_cepat" required>

        <label for="waktu_cepat">Waktu (jam):</label>
        <input type="number" id="waktu_cepat" name="waktu_cepat" required>

        <h2>Kecepatan Lambat</h2>
        <label for="jarak_lambat">Jarak (km):</label>
        <input type="number" id="jarak_lambat" name="jarak_lambat" required>

        <label for="waktu_lambat">Waktu (jam):</label>
        <input type="number" id="waktu_lambat" name="waktu_lambat" required>

        <input type="submit" value="Hitung Kecepatan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kecepatan Cepat
        $jarak_cepat = floatval($_POST['jarak_cepat']);
        $waktu_cepat = floatval($_POST['waktu_cepat']);
        
        if ($waktu_cepat > 0) {
            $kecepatan_cepat = $jarak_cepat / $waktu_cepat;
            echo "<div class='result'>Kecepatan Cepat: " . number_format($kecepatan_cepat, 1) . " km/jam</div>";
        } else {
            echo "<div class='result'>Waktu untuk kecepatan cepat harus lebih dari 0.</div>";
        }

        // Kecepatan Lambat
        $jarak_lambat = floatval($_POST['jarak_lambat']);
        $waktu_lambat = floatval($_POST['waktu_lambat']);
        
        if ($waktu_lambat > 0) {
            $kecepatan_lambat = $jarak_lambat / $waktu_lambat;
            echo "<div class='result'>Kecepatan Lambat: " . number_format($kecepatan_lambat, 1) . " km/jam</div>";
        } else {
            echo "<div class='result'>Waktu untuk kecepatan lambat harus lebih dari 0.</div>";
        }
    }
    ?>
</body>
</html>
