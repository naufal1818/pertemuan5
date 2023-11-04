<?php

$pemasukan = 50000000;
$hutang_a = 16500000;
$bunga_a = 0.05;
$hutang_b = 9500000;
$bunga_b = 0.045;

$total_bunga = ($hutang_a * $bunga_a) + ($hutang_b * $bunga_b);

$total_hutang = $hutang_a + $hutang_b;

$sisa_uang = $pemasukan - $total_hutang - $total_bunga;

echo "Sisa uang: " . number_format($sisa_uang) . " Rupiah";
echo "\n";
echo "Jumlah total bunga hutang: " . number_format($total_bunga) . " Rupiah";
echo "\n";
echo "Jumlah total hutang: " . number_format($total_hutang) . " Rupiah";

?>