<?php

$nilai = 100;

if ($nilai >= 81 and $nilai <= 100) {
    echo"Nilai anda $nilai, nilai anda A berbobot 4";
}
elseif ($nilai >= 78 and $nilai < 80.99) {
    echo"Nilai anda $nilai, nilai anda A- berbobot 3.7";
}
elseif ($nilai >= 75 and $nilai < 77.99) {
    echo"Nilai anda $nilai, nilai anda B+ berbobot 3.3";
}
elseif ($nilai >= 70 and $nilai < 74.99) {
    echo"Nilai anda $nilai, nilai anda B berbobot 3";
}
elseif ($nilai >= 65 and $nilai < 69.99) {
    echo"Nilai anda $nilai, nilai anda B- berbobot 2.7";
}
elseif ($nilai >= 60 and $nilai < 64.99) {
    echo"Nilai anda $nilai, nilai anda C+ berbobot 2.3";
}
elseif ($nilai >= 55 and $nilai < 59.99) {
    echo"Nilai anda $nilai, nilai anda C berbobot 2";
}
elseif ($nilai >= 40 and $nilai < 54.99) {
    echo"Nilai anda $nilai, nilai anda D berbobot 1";
}
else echo"Nilai and $nilai, nilai anda E berbobot 0";