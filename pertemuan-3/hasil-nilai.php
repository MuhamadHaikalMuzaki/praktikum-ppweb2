<?php
if (!isset($_POST['nama'])) {
    echo '<script>alert("Anda harus mengisi form")</script>';
    echo '<meta http-equiv="refresh" content="0; url=form-nilai.php">';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-success text-white text-center">
                <h4>Hasil Nilai Mahasiswa</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr><td>Nama</td><td><?= htmlspecialchars($_POST['nama']) ?></td></tr>
                    <tr><td>NIM</td><td><?= htmlspecialchars($_POST['nim']) ?></td></tr>
                    <tr><td>Nilai Tugas</td><td><?= htmlspecialchars($_POST['tugas']) ?></td></tr>
                    <tr><td>Nilai UTS</td><td><?= htmlspecialchars($_POST['uts']) ?></td></tr>
                    <tr><td>Nilai UAS</td><td><?= htmlspecialchars($_POST['uas']) ?></td></tr>
                    <tr><td>Predikat</td><td>
                        <?php
                        $tugas = $_POST['tugas'] * 0.35;
                        $uts = $_POST['uts'] * 0.30;
                        $uas = $_POST['uas'] * 0.35;
                        $total = $tugas + $uts + $uas;

                        if ($total <= 35) {
                            $pred = "E";
                        } elseif ($total <= 55) {
                            $pred = "D";
                        } elseif ($total <= 69) {
                            $pred = "C";
                        } elseif ($total <= 84) {
                            $pred = "B";
                        } else {
                            $pred = "A";
                        }
                        echo $pred;
                        ?>
                    </td></tr>
                    <tr><td>Keterangan</td><td>
                        <?php 
                        switch ($pred) {
                            case 'A': echo "Sangat baik"; break;
                            case 'B': echo "Baik"; break;
                            case 'C': echo "Cukup"; break;
                            case 'D': echo "Buruk"; break;
                            case 'E': echo "Sangat buruk"; break;
                            default: echo "Tidak diketahui"; break;
                        }
                        ?>
                    </td></tr>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>