<?php
// 1. Hanya satu kondisi positif
$makan_telur = true;
if ($makan_telur) {
    echo "Protein dalam tubuh cukup.<br>";
} else {
    echo "Protein kurang.<br>";
}

// 2. Hanya satu kondisi negatif
$minum_alkohol = true;
if ($minum_alkohol) {
    echo "Asupan protein berkurang.<br>";
} else {
    echo "Asupan protein tetap normal.<br>";
}

// 3. Dua kondisi
$makan_telur = true;
$minum_susu = false;
if ($makan_telur && $minum_susu) {
    echo "Kebutuhan protein terpenuhi.<br>";
} else {
    echo "Kebutuhan protein belum terpenuhi.<br>";
}

// 4. Lebih dari 5 kondisi
$makan_telur = true;
$minum_susu = true;
$makan_daging = true;
$makan_kacang = false;
$makan_ikan = true;
$olahraga = false;
if ($makan_telur && $minum_susu && $makan_daging && $makan_kacang && $makan_ikan && $olahraga) {
    echo "Tubuh sehat dan protein optimal.<br>";
} else {
    echo "Tubuh belum optimal.<br>";
}

// 5. Kondisi bersarang
$menjaga_pola_makan = true;
$makan_telur_rutin = true;
$minum_alkohol = false;
if ($menjaga_pola_makan) {
    if ($makan_telur_rutin && !$minum_alkohol) {
        echo "Protein tetap tercukupi dan terjaga.<br>";
    } else {
        echo "Protein tidak stabil.<br>";
    }
} else {
    echo "Pola makan tidak terjaga.<br>";
}

// 6. Syarat DAN
$makan_telur = true;
$minum_alkohol = false;
if ($makan_telur && !$minum_alkohol) {
    echo "Kadar protein stabil.<br>";
} else {
    echo "Kadar protein tidak stabil.<br>";
}

// 7. Syarat ATAU
$makan_telur = false;
$sumber_protein_lain = true;
if ($makan_telur || $sumber_protein_lain) {
    echo "Kebutuhan protein tetap terpenuhi.<br>";
} else {
    echo "Kebutuhan protein tidak terpenuhi.<br>";
}
?>