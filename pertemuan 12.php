<?php
echo "<h1>Belajar Variabel</h1>";
$a1 = 9;
$a2 = 2;
echo "$a1 + $a2 = " . ($a1+$a2);
echo "<br>";
echo "$a1 - $a2 = " . ($a1-$a2);
echo "<br>";
echo "$a1 * $a2 = " . ($a1*$a2);
echo "<br>";
echo "$a1 / $a2 = " . ($a1/$a2);
echo "<br>";
echo "$a1 % $a2 = " . ($a1%$a2);
echo "<hr>";

# inisiasi dan inisialisasi variabel
echo "<h3>Data Integer<h3>";
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

# Tampilkan data dengan perintah echo
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

# mengetahui tipe data dari variabel
var_dump($e);
echo "<hr>";

$namaDepan = "Fachri"; # pakai tanda petik dua
$namaBelakang = 'Juliandra'; # pakai tanda petik satu

# menggabungkan dua variabel dengan tanda
# petik dua
$namaLengkap = "{$namaDepan} {$namaBelakang}";

# anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

# [Tampilkan Data]
# kita bisa memasukkan variabel lain jika menggunakan tanda petik dua
echo "Nama Depan: {$namaDepan} <br>"; 
# ada pun jika pakai tanda petik satu, kita tidak bisa memasukkan variabel 
# di dalam string akan tetapi menggabungkannya dengan operator titik (.)
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;

echo"<h3>Data Array<h3>";
$siswa = ["Fachri Juliandra", 'Yulistian', "Mulyana"];
echo $siswa[0];

echo "<br>";
$studentday = array("jurnalistik", "programming web", "cinematografi", "programming desktop");
print $studentday[1];
echo "<br>";
var_dump($studentday);