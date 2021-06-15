<?php

// Syntax Alternatif Swich Statement

$nilai = "B";

switch ($nilai):
    case "A":
        echo "Selamat, Anda Lulus Dengan Sangat Baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Selamat, Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Maaf, Anda Belum Lulus" . PHP_EOL;
        break;
    defaulf:
        echo "Mohon Maaf, Mungkin Anda Salah Jurusan ;v" . PHP_EOL;
endswitch;