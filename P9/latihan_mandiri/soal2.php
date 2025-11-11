<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hitung Pecahan Uang</title>
</head>
<body>
    <h1>Program Hitung Pecahan Uang</h1>

    <form method="post" action="">
        <label>Masukkan Jumlah Uang (Rp): </label>
        <input type="text" name="jumlah" required>
        <br><br>
        <input type="submit" name="submit" value="Hitung">
        <input type="reset" name="reset" value="Hapus">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $jumlahUang = $_POST['jumlah'];

        // Proses pecahan uang
        $a = intval($jumlahUang / 100000);
        $jumlahUang = $jumlahUang % 100000;

        $b = intval($jumlahUang / 50000);
        $jumlahUang = $jumlahUang % 50000;

        $c = intval($jumlahUang / 20000);
        $jumlahUang = $jumlahUang % 20000;

        $d = intval($jumlahUang / 5000);
        $jumlahUang = $jumlahUang % 5000;

        $e = intval($jumlahUang / 100);
        $jumlahUang = $jumlahUang % 100;

        $f = intval($jumlahUang / 50);
        $jumlahUang = $jumlahUang % 50;

        // Tampilkan hasil
        echo "<h2>Hasil Pecahan Uang:</h2>";
        echo "<p>Jumlah Rp. 100.000 : $a lembar</p>";
        echo "<p>Jumlah Rp. 50.000 : $b lembar</p>";
        echo "<p>Jumlah Rp. 20.000 : $c lembar</p>";
        echo "<p>Jumlah Rp. 5.000 : $d lembar</p>";
        echo "<p>Jumlah Rp. 100 : $e keping</p>";
        echo "<p>Jumlah Rp. 50 : $f keping</p>";
    }
    ?>
</body>
</html>
