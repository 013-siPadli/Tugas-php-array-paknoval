<?php
function hitungRataRata(array $nilai): float
{
    if (count($nilai) === 0) {
        return 0;
    }
    return array_sum($nilai) / count($nilai);
}

function cekKelulusan(float $rataRata): string
{
    if ($rataRata >= 80) {
        return "Lulus Sangat Baik";
    } elseif ($rataRata >= 75) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}