<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kecepatan</title>
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
    <h1>Hasil Kecepatan</h1>
    
    <?php
    if (isset($_POST['jarak']) && isset($_POST['waktu'])) {
        $jarak = floatval($_POST['jarak']);
        $waktu = floatval($_POST['waktu']);
        
        if ($waktu > 0) {
            $kecepatan = $jarak / $waktu;
            echo "<div class='result'>Kecepatan: " . number_format($kecepatan, 0) . " km/jam</div>";
        } else {
            echo "<div class='result'>Waktu harus lebih dari 0.</div>";
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

