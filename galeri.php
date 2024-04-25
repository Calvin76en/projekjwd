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
        .card-text{
            font-size: :5px;
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
                        <li><a href="#pengalaman-perusahaan">Visi dan Misi</a></li>
                        <li><a href="#kelebihan-perusahaan">Produk Kami</a></li>
                        <li><a href="#pengalaman-perusahaan">Kontak Kami</a></li>
                        <li><a href="#kelebihan-perusahaan">About Us</a></li>
                    </ul>
                </div>
            </div>
            <!-- Content -->
            <div class="col-md-9">
                <div class="col-md-8 offset-md-2">
                <center><h2>galeri Kami</h2></center>
                <div class="card-columns">
                        <!-- Profile -->
                        <div class="card">
                                <img src="prod1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Ducati</h5>
                                    <p class="card-text"> Mesin-mesin Ducati umumnya memiliki kapasitas besar, berkisar antara 800cc hingga 1300cc</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="prod2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kawasaki Ninja</h5>
                                    <p class="card-text">Ninja sering kali dilengkapi dengan mesin berkapasitas 600cc hingga 1000cc</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="prod3.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kawasaki Eliminator</h5>
                                    <p class="card-text"> Desainnya yang ringan membuatnya mudah untuk dikendalikan</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="prod4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Hayabusa</h5>
                                    <p class="card-text"> Didukung oleh mesin empat silinder segaris berkapasitas besar, Hayabusa menawarkan kekuatan yang mengesankan</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="prod5.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kawasaki H2r</h5>
                                    <p class="card-text">Kawasaki Ninja H2R adalah motor balap khusus yang dirancang untuk memberikan performa luar biasa di lintasan. Didukung oleh mesin supercharged berkapasitas 998cc</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="motor1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kawasaki ZX-25R</h5>
                                    <p class="card-text">Kawasaki ZX-25R adalah motor sport 250cc empat silinder pertama di dunia</p>
                                </div>
                            </div>
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
