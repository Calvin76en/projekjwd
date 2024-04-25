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
        /* Custom CSS for the article cards */
        .article-card {
            margin-bottom: 20px;
        }
        .article-card img {
            max-width: 100%;
            height: auto;
        }
        .article-card-text {
            padding: 20px;
        }
        /* Custom CSS for events */
        .event {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
        }
        .event h3 {
            margin-top: 0;
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
                <div class="col-md-12">
                    <h2 id="tentang-kami">Event</h2>
                    <!-- Contoh event 1 -->
                    <div class="event">
                        <img src="event1.jpg" alt="" style="width: 70%;" >
                        <h3>Motor Talk Show</h3>
                        <p>The Indonesia Motorcycle Show (IMOS) showcase the latest innovations from leading motorcycle brands, an ultimate lifestyle guide for all motorcycle enthusiasts. Hosted by the Indonesian Motorcycle Industry Association (AISI) and organized by Seven Event, this exhibition features two-wheeler products from various motorcycle brands, accessories, apparel, and supported by products from related industries.</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                    <!-- Contoh event 2 -->
                    <div class="event">
                    <img src="event2.jpg" alt="" style="width: 70%;" >
                        <h3>Drag Racing Competition</h3>
                        <p>Kompetisi balap drag motor terbuka untuk semua pembalap dengan hadiah menarik.</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                    <!-- Tambahkan event lainnya jika diperlukan -->
                </div>
            </div>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
