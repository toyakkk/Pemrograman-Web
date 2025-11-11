<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hitung Saldo Akhir Nasabah</title>
</head>
<body>
    <h1>Hitung Saldo Akhir Nasabah Bank X</h1>

    <form method="post" action="">
        <table>
            <tr>
                <td>Saldo Awal (Rp)</td>
                <td>:</td>
                <td><input type="text" name="saldo_awal" required></td>
            </tr>
            <tr>
                <td>Bunga per Bulan (%)</td>
                <td>:</td>
                <td><input type="text" name="bunga" required></td>
            </tr>
            <tr>
                <td>Lama Menabung (bulan)</td>
                <td>:</td>
                <td><input type="text" name="bulan" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Hitung Saldo Akhir">
        <input type="reset" name="reset" value="Hapus">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $saldoAwal = $_POST['saldo_awal'];
        $bunga = $_POST['bunga'];
        $bulan = $_POST['bulan'];

        // Hitung saldo akhir
        $saldoAkhir = $saldoAwal * pow((1 + ($bunga / 100)), $bulan);

        // Tampilkan hasil
        echo "<h2>Hasil Perhitungan:</h2>";
        echo "<p>Saldo Awal: Rp. " . number_format($saldoAwal, 0, ',', '.') . "</p>";
        echo "<p>Bunga per Bulan: " . $bunga . " %</p>";
        echo "<p>Lama Menabung: " . $bulan . " bulan</p>";
        echo "<h3>Saldo Akhir: Rp. " . number_format($saldoAkhir, 0, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>
