<?php

$jumlahUang = 1575250;

$a = floor($jumlahUang / 100000);
$b = floor(($jumlahUang % 100000) / 50000);
$c = floor((($jumlahUang % 100000) % 50000) / 20000);
$d = floor((($jumlahUang % 100000) % 50000 % 20000) / 5000);
$e = floor((($jumlahUang % 100000) % 50000 % 20000 % 5000) / 100);
$f = floor(((($jumlahUang % 100000) % 50000 % 20000 % 5000) % 100) % 50);

echo "Jumlah Rp. 100.000 : " . $a . "<br>";
echo "Jumlah Rp. 50.000 : " . $b . "<br>";
echo "Jumlah Rp. 20.000 : " . $c . "<br>";
echo "Jumlah Rp. 5.000 : " . $d . "<br>";
echo "Jumlah Rp. 100 : " . $e . "<br>";
echo "Jumlah Rp. 50 : ".$f. " <br />";