<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h4>Form Nilai Mahasiswa</h4>
            </div>
            <div class="card-body">
                <form action="hasil-nilai.php" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
                    </div>
                    <div class="mb-3">
                        <label for="rombel" class="form-label">Rombel</label>
                        <input type="text" class="form-control" id="rombel" name="rombel" placeholder="Masukkan Rombel" required>
                    </div>
                    <div class="mb-3">
                        <label for="matkul" class="form-label">Mata Kuliah</label>
                        <select class="form-select" id="matkul" name="matkul" required>
                            <option value="">Pilih Mata Kuliah</option>
                            <option value="pemweb2">Pemrograman Web 2</option>
                            <option value="basis_data">Basis Data</option>
                            <option value="statistika">Statistika</option>
                            <option value="uiux">UI/UX</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tugas" class="form-label">Nilai Tugas</label>
                        <input type="number" class="form-control" id="tugas" name="tugas" placeholder="Masukkan nilai tugas" required>
                    </div>
                    <div class="mb-3">
                        <label for="uts" class="form-label">Nilai UTS</label>
                        <input type="number" class="form-control" id="uts" name="uts" placeholder="Masukkan nilai UTS" required>
                    </div>
                    <div class="mb-3">
                        <label for="uas" class="form-label">Nilai UAS</label>
                        <input type="number" class="form-control" id="uas" name="uas" placeholder="Masukkan nilai UAS" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>