<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taman Wisata Sejarah Salatiga</title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/galery.css">

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
                        <a class="nav-link active" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galery2.html">Galery</a>
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
                    <a class="nav-link" href="#">About US</a>
                </li>
            </ul>
            <div class="offcanvas-user mt-4">
                <button class="btn btn-outline-danger mt-3" id="logoutButton">Logout</button>
            </div>
        </div>
    </div>
    
    <!-- Dokumen Galeri -->
    
        <div class="container" >
            <div class="gallery col-lg-12 mx-auto">
                <h1 class="gallery-title">Dokumen Galeri</h1>
                <h5 class="text-center">Segala isi TWSS</h5>
            </div>
            
                <div class="upload-button-container text-center">
                    
                    <button class="upload-button"  id="openModalBtn"><i class="fas fa-plus"></i>Upload Dokumentasi Anda</button>
                </div>
            
            
                <div class="d-flex justify-content-center" style="margin: 40px 0px;">
                    <button class="btn btn-default filter-button" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="objek-pameran">Objek Pameran</button>
                    <button class="btn btn-default filter-button" data-filter="museum">Museum</button>
                    <button class="btn btn-default filter-button" data-filter="fasilitas">Fasilitas</button>
                </div>
                <div class="gallery-grid">
                    @foreach($data as $image)

                        <div class="gallery-item filter all item-large objek-pameran">
                            <img src="{{ asset('storage/' . $image->image) }}" alt="">
                        </div>

                    @endforeach
                        <div class="gallery-item filter all item-large objek-pameran">
                            <img src="img/photo/APC.webp" alt="APC">
                        </div>
                        <div class="gallery-item filter facility item-small fasilitas">
                            <img src="img/photo/foodcourt.webp" alt="Foodcourt">
                        </div>
                        <div class="gallery-item filter museum item-medium objek-pameran">
                            <img src="img/photo/kapal.webp" alt="Kapal">
                        </div>
                        <div class="gallery-item filter exhibit item-small objek-pameran">
                            <img src="img/photo/tank.webp" alt="Tank">
                        </div>
                        <div class="gallery-item filter exhibit item-medium objek-pameran">
                            <img src="img/photo/pesawat.webp" alt="Plane">
                        </div>
                        <div class="gallery-item filter exhibit item-large objek-pameran">
                            <img src="img/photo/statue.webp" alt="Statue">
                        </div>
                        <div class="gallery-item filter exhibit item-medium objek-pameran">
                            <img src="img/photo/meriam.webp" alt="Meriam">
                        </div>
                        <div class="gallery-item filter exhibit item-small objek-pameran">
                            <img src="img/photo/APC-back.webp" alt="APC-back">
                        </div>
                        <div class="gallery-item filter exhibit item-small fasilitas">
                            <img src="img/photo/masjid.webp" alt="Masjid">
                        </div>
                        <div class="gallery-item filter exhibit item-medium objek-pameran">
                            <img src="img/photo/pesawat.webp" alt="Plane">
                        </div>
                        <div class="gallery-item filter exhibit item-large objek-pameran">
                            <img src="img/photo/pesawat.webp" alt="Plane">
                        </div>
                        <div class="gallery-item filter exhibit item-small objek-pameran">
                            <img src="img/photo/pesawat.webp" alt="Plane">
                        </div>
                        <div class="gallery-item filter exhibit item-small objek-pameran">
                            <img src="img/photo/pesawat.webp" alt="Plane">
                        </div>
                    
                </div>
            
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Upload Foto / Video</h2>
                </div>
                @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <form action="{{ route('post.gallery') }}" method="post" enctype="multipart/form-data">    
                    @csrf
                    <div class="modal-body">
                        <div class="upload-section">
                            <div class="upload-placeholder">
                            <input type="file" name="image" id="uploadFile" accept="image/*,video/*" />
                                <div class="upload-icons">
                                    <i class="fas fa-image"></i>
                                    <i class="fas fa-video"></i>
                                </div>
                                <div class="upload-instruction">Ukuran gambar atau video: maks. 8 MB<br>Format: .JPEG, .PNG, .MP4</div>
                            </div>
                        </div>
                        <div class="description-section">
                            <label for="description">Deskripsi</label>
                            <textarea id="description" name="img_text" rows="4" placeholder="Ketik Sesuatu..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="close btn-cancel" name="batal">Batal</button>
                        <button class="btn-upload" name="upload">Upload</button>
                    </div>
                </form>
            </div>
        </div> 

{{-- 
        @php
            $images = \App\Models\PostImage::all();
        @endphp --}}

        {{-- @foreach($images as $image)
        <img src="{{ asset('storage/' . $image->image) }}" alt="">
        @endforeach --}}
    

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
    <script src="js/galery.js"></script>
</body>

</html>
