<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Motor Toba</title>
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
                    <li><a href="Profile.php">Profile</a></li>
                        <li><a href="visimisi.php">Visi dan Misi</a></li>
                        <li><a href="produk.php">Produk Kami</a></li>
                        <li><a href="kontak.php">Kontak Kami</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                    </ul>
                </div>
            </div>
            <!-- Konten Utama -->
            <div class="col-md-9">
                <div class="col-md-8 offset-md-2">
                    <h2 id="tentang-kami">About Us</h2>
                    <p>
                        <img src="toba.jpg" class="img-fluid mb-3" alt="Tentang Kami">
                    </p>
                    <p>
                    Motor Toba adalah sebuah perusahaan yang berkomitmen untuk menyediakan solusi transportasi yang handal dan berkualitas bagi masyarakat. Kami memahami pentingnya memiliki kendaraan yang dapat diandalkan dalam kehidupan sehari-hari, baik untuk keperluan pribadi maupun bisnis. Sejak didirikan pada tahun 20XX, kami telah memimpin dengan inovasi dan keunggulan layanan dalam industri otomotif.
                    </p>
                    <p>
                    Kami memulai perjalanan kami dengan sebuah bengkel kecil, di mana hanya beberapa mekanik yang memiliki impian yang sama: memberikan layanan terbaik di bidang otomotif. Dari situlah, kami berkomitmen untuk memberikan solusi yang lebih dari sekadar memperbaiki kendaraan. Kami ingin memberikan pengalaman yang memuaskan dan menginspirasi setiap pelanggan yang datang kepada kami.
                    </p>
                   <p>
                   Setiap kendaraan yang masuk ke bengkel kami tidak hanya diperbaiki, tetapi juga dirawat dengan penuh perhatian dan keahlian. Kami percaya bahwa kepuasan pelanggan adalah kunci kesuksesan kami, dan itulah yang selalu menjadi fokus utama dalam setiap langkah kami. Dengan dedikasi yang tinggi dan semangat yang tak kenal lelah, kami terus berinovasi untuk memberikan layanan terbaik yang memenuhi kebutuhan dan harapan pelanggan kami.
                   </p>
                   <p>
                   Kami tidak hanya sekadar menjual produk atau jasa, tetapi juga menciptakan ikatan emosional dan kepercayaan yang kuat dengan setiap pelanggan kami. Bersama-sama, kami berbagi visi untuk menciptakan masa depan yang lebih baik melalui layanan otomotif yang unggul dan berkelanjutan. Ini adalah komitmen kami sebagai bagian dari kontribusi kami kepada masyarakat dan industri otomotif secara keseluruhan.
                   </p>
                </div>
            </div>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
