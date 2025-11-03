<?php
// File: koneksi.php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_ksi";

try {
    $koneksi = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Koneksi ke database berhasil!"; // Hapus komentar untuk tes
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
