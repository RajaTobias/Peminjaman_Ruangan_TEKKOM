<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Peminjaman Ruangan Teknik Komputer</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <i class='bx bx-dots-horizontal-rounded icon'></i>
                <div class="text logo-text">
                    <span class="name">Teknik</span>
                    <span class="profession">Komputer</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="dashboard.html">
                            <i class='bx bx-category-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="ruangan.html">
                            <i class='bx bx-buildings icon' ></i>
                            <span class="text nav-text">Ruangan</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="jadwal.html">
                            <i class='bx bx-calendar icon'></i>
                            <span class="text nav-text">Jadwal</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="nav-link">
                    <a href="profile.html">
                        <i class='bx bx-user-circle icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>
                <li class="">
                    <a href="contact.html">
                        <i class='bx bx-chat icon' ></i>
                        <span class="text nav-text">Contact Us</span>
                    </a>
                </li>                
            </div>
        </div>

    </nav>

    <section class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-transparent">
                
                <!-- Navbar Search-->
                <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="bx bx-search icon"></i></button>
                    </div>
                </form> -->
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="" href="#" role="button">
                        <i class='bx bx-bell icon' ></i>
                </li>  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-user icon"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Settings</a></li>
                            <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#!">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
    </section>

    <section class="home">
        <!-- <img src="assets/img/Vector (5).png" alt="..." allign="middle"> -->
        <div class="panel-header panel-header-lg">
            <!-- <img src="assets/img/6header-panel.jpg" alt="..." allign="middle"> -->
            <p class="teks">Peminjaman Ruangan</p>
          </div> 
          <div class="portfolio">
            <div class="row1">
                  
                <img src="/assets/img/Vector (5).png" alt="..." allign="middle">
                <div class="container1">
                    <p class="teksx">Ruang Kelas</p>
                    <p class="teksy">Ruang Laboratorium</p>
                    <div class="cardx">
                        <a class="portfolio-link" data-bs-toggle="modal" href="peminjaman101.html">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"></div>
                            </div>
                            <img src="/assets/img/Rectangle 4008.png" alt="..." />
                            <i class='bx bx-buildings icon' ></i>
                            <span class="tekskelas">Ruang 101</span>
                        </a>
                    </div>
                    <div class="cardx">
                        <a class="portfolio-link" data-bs-toggle="modal" href="peminjaman102.html">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img src="/assets/img/Rectangle 4008.png" alt="..." />
                            <i class='bx bx-buildings icon' ></i>
                            <span class="tekskelas2">Ruang 102</span>
                        </a>
                    </div>
                    <div class="cardx">
                        <a class="portfolio-link" data-bs-toggle="modal" href="peminjaman201.html">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img src="/assets/img/Rectangle 4008.png" alt="..." />
                            <i class='bx bx-buildings icon' ></i>
                            <span class="tekskelas3">Ruang 201</span>
                        </a>
                    </div>
                    <div class="cardx">
                        <a class="portfolio-link" data-bs-toggle="modal" href="peminjamanlabmulmed.html">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img src="/assets/img/Rectangle 4008.png" alt="..." />
                            <i class='bx bx-buildings icon' ></i>
                            <span class="tekskelas">Lab. Mulmed</span>
                        </a>
                    </div>
                  
                    <div class="cardx">
                        <a class="portfolio-link" data-bs-toggle="modal" href="peminjamanlabrpl.html">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img src="/assets/img/Rectangle 4008.png" alt="..." />
                            <i class='bx bx-buildings icon' ></i>
                            <span class="tekskelas2">Lab. RPL</span>
                        </a>
                    </div>
                  
                    <div class="cardx">
                        <a class="portfolio-link" data-bs-toggle="modal" href="peminjamanlabjarkom.html">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img src="/assets/img/Rectangle 4008.png" alt="..." />
                            <i class='bx bx-buildings icon' ></i>
                            <span class="tekskelas3">Lab. Jarkom</span>
                        </a>
                    </div>

                    <div class="cardx">
                        <a class="portfolio-link" data-bs-toggle="modal" href="peminjamanlabembedded.html">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img src="/assets/img/Rectangle 4008.png" alt="..." />
                            <i class='bx bx-buildings icon' ></i>
                            <span class="tekskelas2">Lab. Embedded</span>
                        </a>
                    </div>
                    
            </div>
    
    

    </section>

    <script src="/assets/js/sidebar.js"></script>

</body>
</html>