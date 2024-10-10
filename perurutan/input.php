<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Kecepatan</title>
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
    <h1>Hitung Kecepatan</h1>
    <form method="POST" action="output.php">
        <label for="jarak">Jarak (km):</label>
        <input type="number" id="jarak" name="jarak" required>
        
        <label for="waktu">Waktu (jam):</label>
        <input type="number" id="waktu" name="waktu" required>
        
        <input type="submit" value="Hitung Kecepatan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jarak = floatval($_POST['jarak']);
        $waktu = floatval($_POST['waktu']);
        
        if ($waktu > 0) {
            $kecepatan = $jarak / $waktu;
            echo "<div class='result'>Kecepatan: " . number_format($kecepatan, 0) . " km/jam</div>";
        } else {
            echo "<div class='result'>Waktu harus lebih dari 0.</div>";
        }
    }
    ?>
</body>
</html>
