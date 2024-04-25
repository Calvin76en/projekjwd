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
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <div class="container mt-5">
        <div class="row">
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
                <div class="col-md-12">
                    <h2 id="tentang-kami">Artikel</h2>
                    <!-- Artikel 1 -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="article-card">
                                <img src="artikel1.jpg" alt="Gambar Artikel 1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="article-card-text">
                                <h3>Pembalap Tak Terkalahkan</h3>
                                <p>Dikisahkan bagaimana ia menghadapi berbagai tantangan, melewati rintangan, dan mengukir prestasi gemilang yang membuatnya menjadi tak terkalahkan di lintasan balap. Penjelasan singkat ini akan memberikan gambaran kepada pembaca tentang narasi utama yang akan diungkap dalam artikel tersebut.</p>
                                <a href="#" >Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <!-- Artikel 2 -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="article-card">
                                <img src="artikel2.jpg" alt="Gambar Artikel 2">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="article-card-text">
                                <h3>Drag Motor</h3>
                                <p>persiapan sebelum balapan, teknik yang diperlukan, dan bagaimana balapan tersebut berlangsung. Selain itu, artikel ini juga dapat mencakup profil para pembalap drag motor yang telah mencapai kesuksesan dalam ajang ini serta mengulas tren terkini dan pengaruhnya terhadap komunitas otomotif secara luas.</p>
                                <a href="#">Baca Selengkapnya</a>
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
