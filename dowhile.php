<?php
$a = 1;
do {
    echo "$a. Belajar programming" ;
    $a++;
} while ($a <= 10);
echo "<hr>" ;

//ganjil increment dan decrement
$i = 1;
do {
    echo "$i<br>" ;
    $i=$i+2;
} while ($i <= 20) ;

do {
    echo "$i<br>";
    $i=$i-2;
} while ($i >= 1);
echo "<hr>";

//genab increment dan decrement
do {
    echo "$i<br>" ;
    $i += 3;
} while ($i <= 20);