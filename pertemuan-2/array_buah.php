<?php
$ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
// Menampilkan buah index ke-1
echo $ar_buah[1];

// Menampilkan jumlah buah
echo "<br/>Jumlah Buah: " . count($ar_buah);

// Menampilkan seluruh buah 
echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li>" . $buah . "</li>";
}
echo "</ol>";

// Menambahkan buah 
$ar_buah[] = "Apel";

// Menghapus buah dengan index ke-1
unset($ar_buah[1]);

// Mengubah nilai pada index ke-2 menjadi Manggis
$ar_buah[2] = "Manggis";

// Menampilkan seluruh buah dengan indexnya
echo "<ul>";
foreach ($ar_buah as $index => $v) {
    echo "<li>Buah index - " . $index . " adalah " . $v . "</li>";
}
echo "</ul>";

echo "<ul>";
sort($ar_buah);
foreach ($ar_buah as $index => $v) {
    echo "<li>Buah index - " . $index . " adalah " . $v . "</li>";
}
echo "</ul>";
?>
