<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taman Wisata Sejarah Salatiga</title>

  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="navbar.css">

  <!-- Bootstrap v5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  
</head>

<body>
    <!-- Section: Design Block -->
    <section class="login">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg px-5" style="margin-bottom: 100px;">
          <div class="container-fluid">
              <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="Logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav middle-nav mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link active" href="index.html">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Galery</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Review & Rating</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">About US</a>
                      </li>
                  </ul>
                  <ul class="navbar-nav right-nav mb-2 mb-lg-0">
                      <li class="nav-item user-login">
                          <a class="nav-link" href="login.html">Login</a>
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
          <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                      <a class="nav-link active" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Galery</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Review & Rating</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">About US</a>
                  </li>
                  <hr>
                  <li class="nav-item">
                      <a class="nav-link" href="login.html">Login</a>
                  </li>
              </ul>
          </div>
      </div>
      
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="title my-5 display-3 fw-bold ls-tight">
                        TWSS <br />
                        <span class="sub-title">Taman Wisata Sejarah Salatiga</span>
                    </h1>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5 px-md-5">
                            <form action="{{ route('post.login-user') }}" method="POST">
                                @csrf
                                <!-- Email input -->
                                {{-- <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="username" name="username" id="form3Example2" class="form-control" />
                                    <label class="form-label" for="form3Example3">Username</label>
                                </div> --}}

                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="email" name="email" value="{{ old('email') }}"  @error('email') is-invalid @enderror id="form3Example3" class="form-control" />
                                    <label class="form-label" for="form3Example3">Email address</label>

                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="password" name="password" @error('password') is-invalid @enderror"  id="form3Example4" class="form-control" />
                                    <label class="form-label" for="form3Example4">Password</label>

                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Submit button -->
                                <div class="text-center">
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-block mb-4" style="background-color: #33584c; color: white;">
                                     Sign in
                                    </button>
                                    {{-- <a href="/home">Sign In</a> --}}
                                </div>
                                
                  
                                <!-- Login buttons -->
                                <div class="text-center">
                                    <p>or sign in with:</p>
                                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>

                                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-github"></i>
                                    </button>
                                </div>

                                <!-- Register -->
                                <div class="text-center">
                                    <p>Don't have account? <a href="/daftar">Register Here!</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Script v5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>
