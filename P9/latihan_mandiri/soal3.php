<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Mahasiswa Baru</title>
</head>
<body>
    <h1>Form Pendaftaran Online Mahasiswa Baru - Universitas X</h1>

    <form method="post" action="">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <select name="tgl">
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    <select name="bln">
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    <select name="thn">
                        <?php
                        for ($i = 1980; $i <= 2005; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat Rumah</td>
                <td>:</td>
                <td><textarea name="alamat" rows="3" cols="30" required></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Pria" required> Pria
                    <input type="radio" name="jk" value="Wanita"> Wanita
                </td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><input type="text" name="sekolah" required></td>
            </tr>
            <tr>
                <td>Nilai UAN</td>
                <td>:</td>
                <td><input type="text" name="nilai" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Kirim">
        <input type="reset" value="Hapus">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tempat = $_POST['tempat'];
        $tgl = $_POST['tgl'];
        $bln = $_POST['bln'];
        $thn = $_POST['thn'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $sekolah = $_POST['sekolah'];
        $nilai = $_POST['nilai'];

        echo "<h2>Terimakasih $nama sudah mengisi form pendaftaran.</h2>";
        echo "<p>Nama Lengkap : $nama</p>";
        echo "<p>Tempat Lahir : $tempat</p>";
        echo "<p>Tanggal Lahir : $tgl - $bln - $thn</p>";
        echo "<p>Alamat Rumah : $alamat</p>";
        echo "<p>Jenis Kelamin : $jk</p>";
        echo "<p>Asal Sekolah : $sekolah</p>";
        echo "<p>Nilai UAN : $nilai</p>";
    }
    ?>
</body>
</html>
