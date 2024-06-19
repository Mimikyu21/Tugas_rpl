<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taman Wisata Sejarah Salatiga</title>

  <link rel="stylesheet" href="css/review.css">
  <link rel="stylesheet" href="css/navbar.css">

  <!-- Bootstrap v5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/9af48dedea.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg px-5" style="margin-bottom: 100px; border: 2px solid #33584c">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav middle-nav mb-2 mb-lg-0">
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
                        <a class="nav-link" href="about2.html">About US</a>
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
                            <li><a class="dropdown-item" href="logout.html">Logout</a></li>
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
                    <a class="nav-link" href="about2.html">About US</a>
                </li>
            </ul>
            <div class="offcanvas-user mt-4">
                <button class="btn btn-outline-danger mt-3" id="logoutButton">Logout</button>
            </div>
        </div>
    </div>

    <!-- Review -->
    <section id="review">
        <!-- Heading -->
        <div class="review-heading hidden">
            <span>Comments</span>
            <h1>Review Pengunjung</h1>
        </div>

        <!-- Upload Button -->
        <div class="upload-button-container hidden">
            <button id="openUploadModalBtn" class="upload-button"><i class="fas fa-plus"></i>Tambahkan Ulasan Anda</button>
        </div>
        
        <!-- Review-box-container -->
        <div class="review-box-container">

            {{-- displaydata --}}
            @foreach ($data as $item)
                <div class="review-box hidden">
                    <div class="box-top">
                        <div class="profile">
                            <div class="profile-img">
                                <img src="img/home.webp" alt="Profile Image">
                            </div>
                            <div class="name-user">
                                <strong>Razer</strong>
                                <small class="text-muted" id="review-date">June 13, 2024</small>
                            </div>
                        </div>
                        <div class="ulasan">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <small class="text-muted" id="review-time">2 hours ago</small>
                        </div>
                        <div class="client-comment">
                            <p>
                                {{ $item-> review }}
                            </p>
                        </div>
                        
                            <button class="edit-review-button" data-review-id="1">Edit</button>
                        
                    </div>
                </div>
            @endforeach



            <!-- Review User -->
            <div class="review-box hidden">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="img/home.webp" alt="Profile Image">
                        </div>
                        <div class="name-user">
                            <strong>Akbar Faisal</strong>
                            <small id="review-date">June 13, 2024</small>
                        </div>
                    </div>
                    <div class="ulasan">
                        <div class="stars">
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
                    <button class="edit-review-button" data-review-id="1">Edit</button>
                </div>
            </div>
            <!-- Review User -->
            <div class="review-box hidden">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="img/home.webp" alt="Profile Image">
                        </div>
                        <div class="name-user">
                            <strong>Akbar Faisal</strong>
                            <small id="review-date">June 13, 2024</small>
                        </div>
                    </div>
                    <div class="ulasan">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="client-comment">
                        <p>Kunjungan saya ke Taman Wisata Sejarah Salatiga sangat menyenangkan. Banyak bangunan bersejarah yang menarik untuk dieksplorasi, dan informasi yang disediakan sangat edukatif.</p>
                    </div>
                    <button class="edit-review-button" data-review-id="1">Edit</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Upload Review Modal -->
    <form action="{{ route('post.store_ulasan') }}" method="post">
        @csrf
        <div id="uploadModal" class="modal">
            <div class="modal-content">
            <div class="modal-header">
                <h2>Upload Review</h2>
            </div>
            <div class="modal-body">
                <div class="rating-section">
                <span class="rating-text">Rating:</span>
                <div id="uploadRatingStars" class="rating">
                    <i class="fa fa-star far"></i>
                    <i class="fa fa-star far"></i>
                    <i class="fa fa-star far"></i>
                    <i class="fa fa-star far"></i>
                    <i class="fa fa-star far"></i>
                </div>
                </div>
                <div class="review-input">
                <label for="uploadReviewText">Your Review:</label>
                <textarea id="uploadReviewText" rows="4" name="ulasan"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-cancel" name="non_submit">Batal</button>
                <button class="btn-upload" name="submit">Upload</button>
            </div>
            </div>
        </div>
    </form>
    
    
    <!-- Edit Review Modal -->
    <form action="" method="">
        @csrf
        <div id="editModal" class="modal">
            <div class="modal-content">
            <div class="modal-header">
                <h2>Edit Review</h2>
            </div>
            <div class="modal-body">
                <div class="rating-section">
                <span class="rating-text">Rating:</span>
                <div id="editRatingStars" class="rating">
                    <i class="fa fa-star far"></i>
                    <i class="fa fa-star far"></i>
                    <i class="fa fa-star far"></i>
                    <i class="fa fa-star far"></i>
                    <i class="fa fa-star far"></i>
                </div>
                </div>
                <div class="review-input">
                <label for="editReviewText">Your Review:</label>
                <textarea id="editReviewText" rows="4"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-cancel">Batal</button>
                <button class="btn-edit">Ubah</button>
                <button class="btn-delete">Hapus</button>
            </div>
            </div>
        </div>
    </form>
    
  

    <!-- Footer -->
    <footer class="footer" style="margin-top: 100px;">
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
    <script src="js/review.js"></script>
</body>

</html>
