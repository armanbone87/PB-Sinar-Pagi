<?php
session_start();

// Proteksi Keamanan: Cegah akses selain admin
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header("Location: login.php");
    exit();
}

// --- Proses pembacaan database, pembaruan (UPDATE), atau penampilan Form Edit diletakkan di bawah ini ---
?>