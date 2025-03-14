<?php
$ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];

// Cetak buah di index ke-2
echo $ar_buah[2];

// Cetak jumlah buah
echo '<br/>Jumlah Buah: ' . count($ar_buah);

// Cetak seluruh buah
echo '<ol>';
foreach ($ar_buah as $buah) {
    echo '<li>' . $buah . '</li>';
}
echo '</ol>';

// Tambahkan buah "Durian"
$ar_buah[] = "Durian";

// Hapus buah dengan index ke-1 ("Mangga")
unset($ar_buah[1]);

// Ubah buah index ke-2 menjadi "Manggis"
$ar_buah[2] = "Manggis";

// Cetak seluruh buah dengan indeksnya
echo '<ul>';
foreach ($ar_buah as $k => $v) {
    echo '<li>Buah index - ' . $k . ' adalah ' . $v . '</li>';
}
echo '</ul>';
