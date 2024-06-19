<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taman Wisata Sejarah Salatiga</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">

    <!-- Bootstrap v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9af48dedea.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="banner">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg px-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav middle-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gambar">Galery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/review">Review & Rating</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About US</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav right-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user user-icon"></i> user3189
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Offcanvas Navbar -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="font-size: 50px; font-weight: 500;">TWSS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-header d-flex align-items-center justify-content-center">
                <a href="#" class="user-profile">
                    <i class="fa-solid fa-user fa-2x me-2"></i>
                    <span class="user-name">user3189</span>
                </a>
            </div>
            <div class="offcanvas-body">
                <hr>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="index2.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galery2.html">Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="review2.html">Review & Rating</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About US</a>
                    </li>
                </ul>
                <div class="offcanvas-user mt-4">
                    <button class="btn btn-outline-danger mt-3" id="logoutButton">Logout</button>
                </div>
            </div>
        </div>

        <!-- Title -->
        <div class="container">
            <div class="title">
                <h2>MEMPERSEMBAHKAN</h2>
                <h1>Taman Wisata Sejarah Salatiga</h1>
                <h3>Mari Mengenal Sejarah Salatiga</h3>
            </div>
        </div>

        <!-- Shortcut -->
        <div class="shortcut">
            <h4>Apa yang anda ingin lihat?</h4>
            <div class="boxes">
                <a href="#"><img src="img/icon/pameran.png" alt=""></a>
                <a href="#"><img src="img/icon/museum.png" alt=""></a>
                <a href="#"><img src="img/icon/fasilitas.png" alt=""></a>
            </div>
        </div>
    </div>

    <!-- Kenapa TWSS -->
    <div class="container">
        <div class="introduction">
            <h1 class="hidden">Kenapa Harus Mengunjungi TWSS</h1>
            <h5 class="hidden">Kota Salatiga - Kec. Bugel</h5>
            <div class="pointofinterest">
                <div class="point hidden">
                    <img src="img/icon/mini-museum.png" alt="">
                    <h4>Museum Mini</h4>
                    <h5>Terdapat senjata alat perang, replika makanan, baju adat, miniatur denah, dan masih banyak lagi.
                    </h5>
                </div>
                <div class="point hidden">
                    <img src="img/icon/tank.png" alt="">
                    <h4>Peninggalan Alat Perang</h4>
                    <h5>Terdapat replika tank, pesawat, kapal, dan masih banyak lagi.</h5>
                </div>
                <div class="point hidden">
                    <img src="img/icon/money.png" alt="">
                    <h4>Gratis</h4>
                    <h5>Tanpa adanya biaya masuk</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Dokumen Galeri -->
    <div class="container">
        <div class="gallery col-lg-12 mx-auto">
            <h1 class="gallery-title">Dokumen Galeri</h1>
            <h5 class="text-center">Segala isi TWSS</h5>
        </div>
        <div class="d-flex justify-content-center" style="margin: 40px 0px;">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="objek-pameran">Objek Pameran</button>
            <button class="btn btn-default filter-button" data-filter="museum">Museum</button>
            <button class="btn btn-default filter-button" data-filter="fasilitas">Fasilitas</button>
        </div>
        <div class="row">
            <div class="gallery_product col-md-4 col-sm-6 col-xs-12 filter center fasilitas">
                <img src="img/photo/statue.webp" class="img-fluid" alt="Image">
            </div>
            <div class="gallery_product col-md-4 col-sm-6 col-xs-12 filter center fasilitas">
                <img src="img/photo/masjid.webp" class="img-fluid" alt="Image">
            </div>
            <div class="gallery_product col-md-4 col-sm-6 col-xs-12 filter center museum">
                <img src="img/home.webp" class="img-fluid" alt="Image">
            </div>
            <div class="gallery_product col-md-4 col-sm-6 col-xs-12 filter center object-pameran">
                <img src="img/photo/APC.webp" class="img-fluid" alt="Image">
            </div>
            <div class="gallery_product col-md-4 col-sm-6 col-xs-12 filter center object-pameran">
                <img src="img/photo/meriam.webp" class="img-fluid" alt="Image">
            </div>
            <div class="gallery_product col-md-4 col-sm-6 col-xs-12 filter center objek-pameran">
                <img src="img/photo/APC-back.webp" class="img-fluid" alt="Image">
            </div>
            <div class="gallery_product col-md-4 col-sm-6 col-xs-12 filter center objek-pameran">
                <img src="img/photo/kapal.webp" class="img-fluid" alt="Image">
            </div>
            <div class="gallery_product col-md-4 col-sm-6 col-xs-12 filter center objek-pameran">
                <img src="img/photo/tank.webp" class="img-fluid" alt="Image">
            </div>
            <div class="gallery_product col-md-4 col-sm-6 col-xs-12 filter center objek-pameran">
                <img src="img/photo/pesawat.webp" class="img-fluid" alt="Image">
            </div>
        </div>
    </div>

    <!-- Video Galery -->
    <div class="stories-container">
        <div class="stories-title text-center ms-auto">
            <h1>Video Galery</h1>
            <h5>Eksplor TWSS</h5>
        </div>
        <div class="content">
            <div class="stories">
                <div class="story">
                    <img src="img/home.webp" alt="">
                    <div class="author">Author</div>
                </div>
                <div class="story">
                    <img src="img/photo/pesawat.webp" alt="">
                    <div class="author">Author</div>
                </div>
                <div class="story">
                    <img src="img/photo/tank.webp" alt="">
                    <div class="author">Author</div>
                </div>
                <div class="story">
                    <img src="img/photo/APC.webp" alt="">
                    <div class="author">Author</div>
                </div>
                <div class="story">
                    <img src="img/photo/foodcourt.webp" alt="">
                    <div class="author">Author</div>
                </div>
                <div class="story">
                    <img src="img/photo/statue.webp" alt="">
                    <div class="author">Author</div>
                </div>
                <div class="story">
                    <img src="img/photo/kapal.webp" alt="">
                    <div class="author">Author</div>
                </div>
            </div>
        </div>
    </div>

    <!-- User Documentation -->
    <div class="container">
        <div class="user-doc text-center">
            <h1>Galery Pengunjung</h1>
            <p>Pengalaman yang tidak terlupakan</p>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item filter all item-large">
                <img src="img/photo/APC.webp" alt="APC">
            </div>
            <div class="gallery-item filter facility item-small">
                <img src="img/photo/foodcourt.webp" alt="Foodcourt">
            </div>
            <div class="gallery-item filter museum item-medium">
                <img src="img/photo/kapal.webp" alt="Kapal">
            </div>
            <div class="gallery-item filter exhibit item-small">
                <img src="img/photo/tank.webp" alt="Tank">
            </div>
            <div class="gallery-item filter exhibit item-medium">
                <img src="img/photo/pesawat.webp" alt="Plane">
            </div>
            <div class="gallery-item filter exhibit item-large">
                <img src="img/photo/statue.webp" alt="Statue">
            </div>
            <div class="gallery-item filter exhibit item-medium">
                <img src="img/photo/meriam.webp" alt="Meriam">
            </div>
            <div class="gallery-item filter exhibit item-small">
                <img src="img/photo/APC-back.webp" alt="APC-back">
            </div>
            <div class="gallery-item filter exhibit item-small">
                <img src="img/home.webp" alt="APC-back">
            </div>
        </div>
    </div>

    <!-- Info Objek Wisata -->
    <div class="container artikel">
        <div class="stories-title text-center ms-auto">
            <h1>Artikel</h1>
            <h5>Lebih tahu banyak tentang sejarah</h5>
        </div>
        <div class="section-wrapper row align-items-center">
            <div class="col-md-6">
                <div class="main-image">
                    <img src="img/photo/pesawat.webp" class="img-fluid mb-3 main-img" alt="Pesawat Yosuka">
                </div>
                <div class="row small-images">
                    <div class="col-4">
                        <img src="img/photo/kapal.webp" class="img-fluid mb-3 small-img" alt="Pesawat Yosuka" data-src="img/photo/kapal.webp">
                    </div>
                    <div class="col-4">
                        <img src="img/photo/tank.webp" class="img-fluid mb-3 small-img" alt="Pesawat Yosuka" data-src="img/photo/tank.webp">
                    </div>
                    <div class="col-4">
                        <img src="img/photo/meriam.webp" class="img-fluid mb-3 small-img" alt="Pesawat Yosuka" data-src="img/photo/meriam.webp">
                    </div>
                </div>
            </div>
            <div class="col-md-6 description">
                <h2>Pesawat Yosuka K5Y (Cureng)</h2>
                <p>Cureng atau Yokusuka K5Y adalah pesawat latih bersayap ganda (biplane) dan berkursi dua (julukan Sekutu: "Willow") yang dipergunakan oleh Kaigun (Angkatan Laut Kekaisaran Jepang) dalam Perang Dunia II.</p>
                <button class="btn btn-custom">Learn More</button>
            </div>
        </div>
    </div>

    <!-- Review -->
    <section id="review">
        <!-- Heading -->
        <div class="review-heading hidden">
            <span>Comments</span>
            <h1>Clients Says</h1>
        </div>
        
        <!-- Review-box-container -->
        <div class="review-box-container">
            <!-- Review User -->
            <div class="review-box hidden">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="img/home.webp">
                        </div>
                        <div class="name-user">
                            <strong>Akbar Faisal</strong>
                        </div>
                    </div>
                    <div class="ulasan">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="client-comment">
                    <p>Taman Wisata Sejarah Salatiga adalah tempat yang sangat menarik untuk dikunjungi. Banyak informasi sejarah yang bisa dipelajari, dan suasananya sangat tenang. Cocok untuk liburan keluarga.</p>
                </div>
            </div>
            <!-- Review User -->
            <div class="review-box hidden">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="img/home.webp">
                        </div>
                        <div class="name-user">
                            <strong>Touseeq Ijaz</strong>
                        </div>
                    </div>
                    <div class="ulasan">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="client-comment">
                    <p>iiuguglaguawul oihagiewaoggeoihoiafffu gagfgaabvlabfalf hphpwhqpflhwlfhall qhogqpgpq qhfphqpf qpfpqfhpqfhpqhfpq.</p>
                </div>
            </div>
            <!-- Review User -->
            <div class="review-box hidden">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="img/home.webp">
                        </div>
                        <div class="name-user">
                            <strong>Touseeq Ijaz</strong>
                        </div>
                    </div>
                    <div class="ulasan">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="client-comment">
                    <p>iiuguglaguawul oihagiewaoggeoihoiafffu gagfgaabvlabfalf hphpwhqpflhwlfhall qhogqpgpq qhfphqpf qpfpqfhpqfhpqhfpq.</p>
                </div>
            </div>
            <!-- Review User -->
            <div class="review-box hidden">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="img/home.webp">
                        </div>
                        <div class="name-user">
                            <strong>Touseeq Ijaz</strong>
                        </div>
                    </div>
                    <div class="ulasan">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="client-comment">
                    <p>iiuguglaguawul oihagiewaoggeoihoiafffu gagfgaabvlabfalf hphpwhqpflhwlfhall qhogqpgpq qhfphqpf qpfpqfhpqfhpqhfpq.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="footer-logo">
                <img src="img/logo.png" alt="TWSS Logo">
            </div>
            <div class="social-icons">
                <span>Follow Us</span>
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Script v5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>