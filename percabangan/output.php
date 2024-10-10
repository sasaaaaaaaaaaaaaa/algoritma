<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kecepatan Kendaraan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Hasil Kecepatan Kendaraan</h1>

    <?php
    if (isset($_POST['jarak_cepat']) && isset($_POST['waktu_cepat']) && isset($_POST['jarak_lambat']) && isset($_POST['waktu_lambat'])) {
        // Kecepatan Cepat
        $jarak_cepat = floatval($_POST['jarak_cepat']);
        $waktu_cepat = floatval($_POST['waktu_cepat']);
        
        if ($waktu_cepat > 0) {
            $kecepatan_cepat = $jarak_cepat / $waktu_cepat;
            echo "<div class='result'>Kecepatan Cepat: " . number_format($kecepatan_cepat, 0) . " km/jam</div>";
        } else {
            echo "<div class='result'>Waktu untuk kecepatan cepat harus lebih dari 0.</div>";
        }

        // Kecepatan Lambat
        $jarak_lambat = floatval($_POST['jarak_lambat']);
        $waktu_lambat = floatval($_POST['waktu_lambat']);
        
        if ($waktu_lambat > 0) {
            $kecepatan_lambat = $jarak_lambat / $waktu_lambat;
            echo "<div class='result'>Kecepatan Lambat: " . number_format($kecepatan_lambat, 0) . " km/jam</div>";
        } else {
            echo "<div class='result'>Waktu untuk kecepatan lambat harus lebih dari 0.</div>";
        }
    } else {
        echo "<div class='result'>Data tidak lengkap.</div>";
    }
    ?>
    <button onclick = "window.location.href='input.php'">kembali</button>
    <a href="http://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>
    </div>
</body>
</html>
