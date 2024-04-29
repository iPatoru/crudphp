<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Barang</h2>
    <form action="add_process.php" method="POST">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="form-group">
            <label>Jumlah:</label>
            <input type="number" class="form-control" name="jumlah" required>
        </div>
        <div class="form-group">
            <label>Tanggal:</label>
            <input type="date" class="form-control" name="tanggal" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>
