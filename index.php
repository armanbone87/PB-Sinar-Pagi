<?php
session_start();

// Cek apakah user aktif adalah admin
$isAdmin = isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Data</title>
</head>
<body>
    <div>
        <?php if ($isAdmin): ?>
            <p>Status: <strong>Admin</strong> | <a href="logout.php">Logout</a></p>
        <?php else: ?>
            <p>Status: <strong>Pengunjung (Read-Only)</strong> | <a href="login.php">Login Admin</a></p>
        <?php endif; ?>
    </div>

    <h2>Daftar Data Barang</h2>

    <!-- Tombol Tambah Data hanya muncul jika Admin -->
    <?php if ($isAdmin): ?>
        <a href="tambah.php">+ Tambah Data Baru</a>
        <br><br>
    <?php endif; ?>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <?php if ($isAdmin): ?>
                    <th>Aksi</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <!-- Contoh Data (Ganti dengan looping data dari Database) -->
            <tr>
                <td>1</td>
                <td>Laptop Mini</td>
                <td>15</td>
                <?php if ($isAdmin): ?>
                    <td>
                        <a href="edit.php?id=1">Edit</a> | 
                        <a href="hapus.php?id=1" onclick="return confirm('Hapus data ini?')">Hapus</a>
                    </td>
                <?php endif; ?>
            </tr>
        </tbody>
    </table>
</body>
</html>