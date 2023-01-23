<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/peminjaman.css') }}">
  
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
        <div class="panel-header panel-header-lg">
            <p class="teks">Peminjaman Ruangan</p>
            <img src="/assets/img/Rectangle 21.png" alt="..." allign="middle">
          </div> 

        <div class="row6">
            <form class="login">
                <div class="input-text">
                    <input type="text" id="inputNama" name="nama" placeholder="Nama Lengkap" required/>
                </div>
                
                <div class="input-text">
                    <input type="text" id="inputNIM" name="nim" placeholder="NIM" required/>
                </div>

                <div class="input-text">
                    <input type="text" id="inputKeperluan" name="keperluan" placeholder="Keperluan" required/>
                </div>

                <div>
                    <button class="border">Submit</button>
                </div>
            </form>
        </div> 
        <footer class="footer fixed-bottom1">
            <div class="teksa">
                <i class='bx bx-map icon'></i>
                <span class="">Ruangan</span>
                <div class= "teksk">Lab. RPL</div>
            </div>
            <div class="teksb">
                <i class='bx bx-calendar-event icon'></i>
                <span class="">Tanggal Meminjam</span>
            </div>
                 <div class= "tekse" id='cetak'>Hari ini</div>
                <input class="teksf" type='date' id='tanggal' name='tanggal' onchange='cetakTanggal()'/>
            <div class="teksc">
                    <i class='bx bx-time icon'></i>
                    <span class="">Waktu Mulai</span>
                </div>
               <div class= "teksg" id='mulai'>--:--</div>
                 <input class="teksh" type='time' id='waktu' name='waktu' onchange='cetakWaktu()'/>
                 <div class="teksd">
                    <i class='bx bx-time-five icon'></i>
                    <span class="">Waktu Selesai</span>
                </div>
               <div class= "teksi" id='selesai'>--:--</div>
               <input class="teksj" type='time' id='jam' name='jam' onchange='cetakJam()'/>
 
        </footer>

    </section>

    <script src="/assets/js/sidebar.js"></script>

</body>
</html>