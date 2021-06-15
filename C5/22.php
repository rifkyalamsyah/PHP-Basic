<?php

// Percabangan
// Else statement

$nilai = 85;
$absen = 90;

if ($nilai >= 75 && $absen >= 75){
    echo "Selamat Kamu Lulus!" . PHP_EOL;
} else{
    echo "Maaf, Kamu Blum Lulus!" . PHP_EOL;
}