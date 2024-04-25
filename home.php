<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-link {
            margin-right: 15px;
        }
        .club-name {
            margin-left: auto;
            font-size: large;
            font-family: sans-serif;
            color: red;
        }
        /* Style untuk sidebar */
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
<?php
    include 'navbar.php';
?>
    <!-- Sidebar -->
    <div class="container mt-5">
        <div class="row">
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
            <div class="col-md-9">
                <!-- Carousel -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner ">
                          <div class="carousel-item active">
                            <img src="motor1.jpg" class="d-block w-100" alt="..." style="width: 400px; height: 450px;">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="motor2.jpg" class="d-block w-100" alt="..." style="width: 500px; height: 450px;">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="motor3.jpg" class="d-block w-100" alt="..." style="width: 500px; height: 450px;">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
                          </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <center><p class="mt-5">
                    Kami Menyediakan Produk-produk terbaik Kami!!!
                </p></center>

                </div>

               
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
