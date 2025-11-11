<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Baca input dari form</title>
</head>
<body>
    <h1>Baca input dari form</h1>
    <p>Berikut ini data yang telah Anda masukkan dalam form:</p>

<?php
$namaAnda = $_POST['nama'] ?? '';
$alamatAnda = $_POST['alamat'] ?? '';
$sexAnda = $_POST['sex'] ?? '';
$jobAnda = $_POST['job'] ?? '';
$statusMenikah = isset($_POST['status']) ? 'Menikah' : 'Belum Menikah';

echo "<table border='1' cellpadding='5'>";
echo "<tr><td>Nama Anda</td><td>" . htmlspecialchars($namaAnda, ENT_QUOTES, 'UTF-8') . "</td></tr>";
echo "<tr><td>Alamat Anda</td><td>" . nl2br(htmlspecialchars($alamatAnda, ENT_QUOTES, 'UTF-8')) . "</td></tr>";
echo "<tr><td>Jenis Kelamin</td><td>" . htmlspecialchars($sexAnda, ENT_QUOTES, 'UTF-8') . "</td></tr>";
echo "<tr><td>Pekerjaan</td><td>" . htmlspecialchars($jobAnda, ENT_QUOTES, 'UTF-8') . "</td></tr>";
echo "<tr><td>Status Menikah</td><td>" . htmlspecialchars($statusMenikah, ENT_QUOTES, 'UTF-8') . "</td></tr>";
echo "</table>";
?>

</body>
</html>
