<html>
    <head>
        <title>Konversi Waktu Ke Detik</title>
    </head>
    <body>
        <h1>Konversi Waktu Tempuh Ke Detik</h1>
        <?php
        $jam = 10;
        $menit = 10;
        $detik = 42;
        $jamKeDetik = $jam * 3600;
        $menitKeDetik = $menit * 60;
        $detikKeDetik = $detik;
        $totalDetik = $jamKeDetik + $menitKeDetik + $detikKeDetik;
        echo "<p>Jika Waktu ".$jam.":".$menit.":".$detik." dinyatakan dalam
        satuan detik adalah : ".$totalDetik."</p>";
        ?>
    </body>
</html>