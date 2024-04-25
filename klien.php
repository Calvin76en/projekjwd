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
                        <li><a href="#tentang-kami">Profile</a></li>
                        <li><a href="#sejarah">Visi dan Misi</a></li>
                        <li><a href="#bidang-usaha">Produk Kami</a></li>
                        <li><a href="#sejarah">Kontak Kami</a></li>
                        <li><a href="#bidang-usaha">About Us</a></li>
                        <!-- Tambahkan daftar menu lainnya jika diperlukan -->
                    </ul>
                </div>
            </div>
            <!-- Konten Utama -->
            <div class="col-md-9">
                <div class="col-md-8 offset-md-2">
                    <h2 id="tentang-kami">Klien</h2>
                    <div class="mt-4">
                        <img src="klien1.png" alt="" width="150px">
                        <span class="m-5" >Kawasaki</span>
                    </div>
                    <div class="mt-4">
                        <img src="klien2.PNG" alt="" width="150px">
                        <span class="m-5" >Ducati</span>
                    </div>
                    <div class="mt-4">
                        <img src="klien3.png" alt="" width="150px">
                        <span class="m-5" >Moto GP</span>
                    </div>
                    <div class="mt-4">
                        <img src="klien4.jpg" alt="" width="150px">
                        <span class="m-5" >Yamaha</span>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
