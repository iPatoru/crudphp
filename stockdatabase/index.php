<?php include 'config.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Stok Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Manajemen Stok Barang</h2>
    <a href="add.php" class="btn btn-primary mb-3">Tambah Barang</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
            
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM items";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["nama"]."</td>
                        <td>".$row["jumlah"]."</td>
                        <td>".$row["tanggal"]."</td>
                        <td>
                            <a href='edit.php?id=".$row["id"]."' class='btn btn-info btn-sm'>Edit</a>
                            <a href='delete.php?id=".$row["id"]."' class='btn btn-danger btn-sm'>Hapus</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data.</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
