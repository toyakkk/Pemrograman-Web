<html>
    <head>
        <title>Menghitung Komisi Salesman</title>
    </head>
    <body>
        <h1>Menghitung Komisi Salesman</h1>
        <?php
        /*
        Script ini akan menghitung salesman berdasarkan nilai penjualan
        yang dicapainya yaitu sebesar Rp. 1.500.000,-
        Ketentuan komisinya adalah 5% dari nilai penjualan yang dicapai.
        */
        $nilaiJual = 1500000;
        $komisi = 0.05 * $nilaiJual;
        echo "<p>Nilai penjualan salesman : Rp. ".$nilaiJual."</p>";
        echo "<p>Komisi yang didapat salesman adalah Rp. ".$komisi."</p>";
        ?>
    </body>
</html>