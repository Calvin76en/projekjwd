<?php
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $notelp = $_POST['notelp'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];

    // Memeriksa apakah ada data yang tidak lengkap
    if (empty($nama) || empty($notelp) || empty($password) || empty($alamat)) {
        echo "<script>alert('Semua data harus diisi!'); window.location = 'signup.php';</script>";
        exit();
    }

    // Memeriksa apakah nama sudah digunakan sebelumnya
    $sql_check = "SELECT * FROM anggota WHERE nama='$nama'";
    $result_check = mysqli_query($db, $sql_check);
    if (mysqli_num_rows($result_check) > 0) {
        echo "<script>alert('Nama sudah digunakan. Gunakan nama lain.'); window.location = 'signup.php';</script>";
        exit();
    }

    $sql_check_notelp = "SELECT * FROM anggota WHERE notelp='$notelp'";
    $result_check_notelp = mysqli_query($db, $sql_check_notelp);
    if (mysqli_num_rows($result_check_notelp) > 0) {
        echo "<script>alert('Nomor telepon sudah terdaftar. Gunakan nomor telepon lain.'); window.location = 'signup.php';</script>";
        exit();
    }

    $sql = "INSERT INTO anggota (nama, notelp, password, alamat) VALUES ('$nama', '$notelp', '$password', '$alamat')";

    if (mysqli_query($db, $sql)) {
        echo "<script>alert('Akun berhasil dibuat!'); window.location = 'login.php';</script>";
        exit();
    } else {
        echo "<script>alert('Terjadi kesalahan. Silakan coba lagi.'); window.location = 'signup.php';</script>";
        exit();
    }
}
?>
