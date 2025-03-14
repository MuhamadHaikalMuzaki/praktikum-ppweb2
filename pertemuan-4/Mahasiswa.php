<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $semester;

    public function __construct($nama) {
        $this->nama = $nama;
        echo 'Mahasiswa baru telah dibuat! <br />';
    }


    public function Sayang($nama) {
        $this->nama = $nama;
        echo 'Mahasiswa baru telah dibuat! <br />';
    }
}

// Membuat objek dengan parameter nama
$siti = new Mahasiswa('Siti Munaroh');
$tono = new Mahasiswa('Tono Sumarto');

// Menampilkan nama mahasiswa
echo $siti->nama . '<br />';
echo $tono->nama;
?>
