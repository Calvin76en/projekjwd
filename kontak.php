<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Motor Toba</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
        /* Social Icons */
        .social-icons li {
            display: inline-block;
            margin-right: 10px;
        }
        .social-icons li:last-child {
            margin-right: 0;
        }
        .social-icons a {
            color: #333;
            text-decoration: none;
            font-size: 20px;
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
                    <h2 id="kontak-kami">Kontak Kami</h2>
                    <p class="mt-3">Berikut adalah informasi kontak kami:</p>
                    <ul>
                        <li>Alamat: Jalan Sitoluama, Toba Samosir</li>
                        <li>No Telepon: 08212424141</li>
                        <li>Fax: 12313114</li>
                        <li>Email: motor@gmail.com</li>
                    </ul>
                    <p>Media sosial:</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
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
