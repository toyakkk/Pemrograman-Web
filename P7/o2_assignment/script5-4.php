<html>
    <head>
        <title>Konversi jumlah detik ke satuan jam-menit-detik</title>
    </head>
    <body>
        <h1>Konversi jumlah detik kesatuan jam-menit-detik</h1>
        <?php
        $totalDetik = 157789;
        $sisa = $totalDetik;
        $dalamJam = ($totalDetik - $sisa) / 3600;
        $totalDetik = $sisa;
        $sisa = $totalDetik % 60;
        $dalamMenit = ($totalDetik - $sisa) / 60;
        $totalDetik = $sisa;
        $sisa = $totalDetik % 1;
        $dalamDetik = ($totalDetik - $sisa) / 1;
        echo "<p>Hasil konversinya adalah : ".$dalamJam." jam :
        ".$dalamMenit." menit : ".$dalamDetik." detik</p>";
        ?>
    </body>
</html>