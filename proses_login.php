<?php
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['nama']) && !empty($_POST['password'])) {
        $username = $_POST['nama'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM anggota WHERE nama='$username'";
        $result = mysqli_query($db, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($password == $row['password']) {
                session_start();
                $_SESSION['nama'] = $username;
                print_r($_SESSION['nama']);
                header("Location: home.php");
                exit();
            } else {
                echo "<script>alert('Username atau password salah'); window.location = 'login.php';</script>";
                exit();
            }
        } else {
            echo "<script>alert('Username atau password salah'); window.location = 'login.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Username dan password harus diisi'); window.location = 'login.php';</script>";
        exit();
    }
} else {
    // Jika tidak ada metode POST, kembali ke halaman login
    header("Location: login.php");
    exit();
}
?>
