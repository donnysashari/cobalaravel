<!DOCTYPE html>
<html>
<head>
    <title>Belajar Variabel</title>
    <style>
        body { 
            font-family: Arial; 
            margin: 50px;
            font-size: 18px;
        }
        .box {
            background: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Praktik Variabel PHP</h1>
    
    <?php
    // Deklarasi variabel
    $nama = "Ahmad Sudirman";
    $umur = 45;
    $tinggi = 170.5;
    $menikah = true;
    
    // Tampilkan
    echo "<div class='box'>";
    echo "<h2>Data Pribadi</h2>";
    echo "Nama: $nama <br>";
    echo "Umur: $umur tahun <br>";
    echo "Tinggi: $tinggi cm <br>";
    echo "Status: ";
    if($menikah) {
        echo "Sudah Menikah";
    } else {
        echo "Belum Menikah";
    }
    echo "</div>";
    
    // Operasi matematika
    $tahun_lahir = 2025 - $umur;
    $pensiun = 58 - $umur;
    
    echo "<div class='box'>";
    echo "<h2>Perhitungan</h2>";
    echo "Tahun lahir: $tahun_lahir <br>";
    echo "Sisa masa kerja: $pensiun tahun <br>";
    echo "</div>";
    ?>
</body>
</html>
