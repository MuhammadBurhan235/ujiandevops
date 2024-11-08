<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inkostel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
  </head>
  
  <body>
    <!-- navbar start -->
    <header>
        <nav>
            <div class="logo" id="logoHeader">
                <i class='bx bx-menu menu-icon'></i>    

                <div class="container" id="conHeader">
                    <div class="row">
        
                        <div class="col-md-4 logo">
                            <img src="/img/logo_inkostel.png" alt="Logo KosTel">
                        </div>
                
                        <div class="col-md-4 text-center">
                            <div class="search">
                                <input class="form-control mr-sm-2" type="search" placeholder="Cari Kos disini..!" aria-label="Cari">
                                <button type="button" class="btn">
                                  <i class="bi bi-search"></i>
                                </button>
                              </div>
                        </div>
                        <!--
                        <div class="col-md-4 text-end" id="button-container">
                            <a href="/login">
                            <button type="button" class="btn btn-success custom-button1" id="loginButton">Login</button>
                            </a>
                        </div>
                        -->
                        <div class="col-md-4 text-end" id="button-container">
                            @guest
                                <a href="/login">
                                    <button type="button" class="btn btn-success custom-button1" id="loginButton">Login</button>
                                </a>
                
                            @endguest

                            @auth
                                <!-- If the user is authenticated, the login button will not be shown -->
                            @endauth
                        </div>
                </div>
            </div>
            <!-- SideBar Menu -->
            <div class="sidebar">
                <div class="logo">
                    <i class='bx bx-menu menu-icon'></i>
                    <span class="logo-name">InKostel</span>
            </div>

                <div class="sidebar-content">
                    <ul class="lists">
                        <li class="list">
                            <a href="/" class="nav-link">
                                <i class='bx bx-home-alt icon'></i>
                                <span class="link">Home</span>
                            </a>
                        </li>

                        <li class="list">
                            <a href="/carikost" class="nav-link">
                                <i class='bx bx-search icon'></i>
                                <span class="link">Cari Kos</span>
                            </a>
                        </li>

                        <li class="list">
                            <a href="/simpan" class="nav-link">
                                <i class='bx bx-archive-in icon'></i>
                                <span class="link">Kos Tersimpan</span>
                            </a>
                        </li>

                        <li class="list">
                            <a href="/jualkos" class="nav-link">
                                <i class='bx bx-message-square-add icon'></i>
                                <span class="link">Jual Kos</span>
                            </a>
                        </li>

                        <li class="list">
                            <a href="/profile" class="nav-link">
                                <i class='bx bx-user-circle icon'></i>
                                <span class="link">Profile</span>
                            </a>
                        </li>
                    </ul>

                    <div class="bottom-content">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <li class="list">
                                <button type="submit" class="nav-link logout-button">
                                    <i class='bx bx-log-out icon'></i>
                                    <span class="link">Log Out</span>
                                </button>
                                </li>
                            </form>
                        </div>
                </div>
            </div>
        </nav>

    <!-- Overlay -->
        <section class="overlay">
        </section>
    </header>
    <!--Navbar End-->

    <!-- isi -->
    <section class="about-section" id="atas">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 d-flex align-items-center" id="recomend">
                    <div class="card mx-auto" style="width: 851px; height: 307px;">
                        <div class="card-body" id="cardAbout">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../img/kos1.jpg" class="card-img-top" style="height: 270px;;"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../img/kos2.jpg" class="card-img-top" style="height: 270px;"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../img/kos3.jpg" class="card-img-top" style="height: 270px;"
                                            alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>                
                </div>

                <div class="col-lg-6 col-md-12 d-flex align-items-center">
                    <div class="about-text">
                        <h1>Temukan kos yang kamu inginkan!</h1>
                        <p>InKosTel menyediakan daftar kos terbaik dan ternyaman disekitar Telkom University dengan fasilitas terbaik, jangkauan luas dan harga yang terjangkau.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <section class="kenapa-section" id="kenapa">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-12">
                    <div class="kenapa-text">
                        <h1>Kenapa sih harus cari di Inkostel?</h1>
                        <h4>Beberapa alasan kenapa kamu harus cari informasi kos di Inkostel :</h4>
                        <ul>
                            <li class="mb-2">Menyediakan informasi berbagai macam informasi fasilitas kos</li>
                            <li class="mb-2">Harga yang bervariatif</li>
                            <li class="mb-2">Menyediakan info kontak jangkauan informasi kos yang luas</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-12 img" id="rumah2">
                    <br> <br> <br>
                    <div class="about-img"><img alt="" src="../img/rumah2_landingPage.png"></div>
                </div>

            </div>
        </div>
    </section>

    

    <section class="supported-section" id="supported">
        <div class="container">
            <div class="row">
                
                <div class="supported-text">
                    <h2>Supported by</h2>
                </div>

                <div class="supported-img"><img alt="" src="../img/logo_telu.png"></div>
                
            </div>
        </div>
    </section>

    <section class="yukcari-section" id="yukcari">
        <div class="container">
            <div class="row">
 
                <div class="col-lg-6 col-md-12 d-flex align-items-center">
                    <div class="yukcari-img"><img alt="" src="../img/orang_landingPage.png"></div>
                </div>

                <div class="col-lg-6 col-md-12 d-flex align-items-center">
                    <div class="yukcari-text">
                        <h1>Yuk cari kosan pilihan terbaikmu di Inkostel</h1>
                            <br>
                            <a href="#" class="btn btn-warning custom-button3" id="cariButton" >Mulai Mencari</a>
                    </div>
                </div>
                    
            </div>
        </div>
    </section>

    <!--Akhir isi-->


    <!--Footer-->
    <footer class="footer">
        <div class="container" id="footer">
            <div class="row">

                <div class="footer-col">
                    <div class="logo-footer">
                        <img src="../img/logo_inkostel.png" alt="logofooter" >
                        <br> <br>
                        <h5>About Us</h5>
                        <p>InKosTel aplikasi untuk mencari informasi penjualan kos terbaik dan ternyaman di sekitar Telkom University</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                
                <div class="footer-col">
                    <br> <br> <br>
                    <h5>About</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">About Us</a></li>
                        <li class="mb-2"><a href="#">Product</a></li>
                        <li class="mb-2"><a href="#">Features</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <br> <br> <br>
                    <h5>Support</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ url('/faq') }}">FAQs</a></li>
                        <li class="mb-2"><a href="#">Support Center</a></li>
                        <li class="mb-2"><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <br> <br> <br>
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Help Center</a></li>
                        <li class="mb-2"><a href="#">Text</a></li>
                        <li class="mb-2"><a href="#">How & Works</a></li>
                    </ul>
                </div>

            </div>
            <hr>
            <p>Copyright @ 2023 Kelompok 5 - Web Programming, InKosTel</p>
        </div>
    </footer>
    <!--Akhir Footer--> 

    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/index.js"></script>
  </body>
</html>