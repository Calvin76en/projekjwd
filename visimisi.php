<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi dan Misi - Motor Toba</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Sidebar */
        .sidebar {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar li {
            margin-bottom: 10px;
        }
        .sidebar a {
            color: #333;
            text-decoration: none;
        }
        .sidebar a:hover {
            color: #555;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="sidebar">
                    <ul>
                        <li><a href="about.php#tentang-kami">Profile</a></li>
                        <li><a href="about.php#sejarah">Visi dan Misi</a></li>
                        <li><a href="about.php#bidang-usaha">Produk Kami</a></li>
                        <li><a href="about.php#kontak-kami">Kontak Kami</a></li>
                        <li><a href="about.php#about-us">About Us</a></li>
                    </ul>
                </div>
            </div>
            <!-- Konten Utama -->
            <div class="col-md-9">
                <div class="col-md-8 offset-md-2 ">
                    <h2 id="visi-misi">Visi dan Misi</h2>
                    <h3 class="mt-5">Visi</h3>
                    <p>Menjadi penyedia solusi transportasi terkemuka yang memberikan nilai tambah bagi masyarakat dan lingkungan.</p>
                    <h3>Misi</h3>
                    <ul>
                        <li>Memberikan layanan transportasi yang andal dan berkualitas tinggi kepada pelanggan kami.</li>
                        <li>Menyediakan beragam pilihan kendaraan bermotor yang sesuai dengan kebutuhan dan keinginan pelanggan.</li>
                        <li>Mendorong inovasi dan pengembangan produk untuk mengurangi dampak lingkungan dari industri otomotif.</li>
                        <li>Membangun hubungan yang kuat dan berkelanjutan dengan pelanggan, mitra bisnis, dan masyarakat.</li>
                        <li>Memberikan kontribusi positif kepada komunitas lokal dan lingkungan sekitar melalui program sosial dan keberlanjutan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
