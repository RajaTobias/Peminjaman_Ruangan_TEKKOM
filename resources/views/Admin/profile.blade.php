<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
  
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
                    <li class="active">
                        <a href="AdminDashboard.html">
                            <i class='bx bx-category-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="AdminRuangan.html">
                            <i class='bx bx-buildings icon' ></i>
                            <span class="text nav-text">Ruangan</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="AdminJadwal.html">
                            <i class='bx bx-calendar icon'></i>
                            <span class="text nav-text">Jadwal</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="AdminPemohon.html">
                            <i class='bx bx-user-check icon'></i>
                            <span class="text nav-text">Pemohon</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="nav-link">
                    <a href="AdminProfile.html">
                        <i class='bx bx-user-circle icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>
                <li class="">
                    <a href="AdminContact.html">
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
          </div> 
          <div class="portfolio">
            <div class="row1">
                  
                <img src="/assets/img/Vector (5).png" alt="..." allign="middle">
                <div class="containerp">
                    <p class="teksp">Profile Setting</p>
                    <form class="pprofile">
                        <div class="profile-pic">
                            <img src="/assets/img/Rectangle 4036.png" id="fotop">
                            <input type="file" id="file">
                            <label for="file" id="upBtn">Choose Photo</label>
                        </div>
                        <div class="input-text1">
                            <p class="teksp1">Nama Mahasiswa</p>
                            <input type="text" id="inputNama" name="nama" required/>
                        </div>
                        
                        <div class="input-text1">
                            <p class="teksp2">No. Handphone</p>
                            <input type="text" id="inputNo" name="no" required/>
                        </div>
        
                        <div class="input-text1">
                            <p class="teksp3">NIM</p>
                            <input type="text" id="inputNIM" name="nim" required/>
                        </div>
        
                        <div>
                            <button class="border1"><i class="bx bx-pencil icon"></i></button><p class="teksp4">Edit</p>
                        </div>
                    </form>
            </div>
    
    

    </section>

    <script src="/assets/js/sidebar.js"></script>
    <script src="/assets/js/profile.js"></script>

</body>
</html>