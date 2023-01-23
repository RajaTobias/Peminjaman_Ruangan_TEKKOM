<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pemohon.css') }}">
      
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
                <p class="tekspemohon">Pemohon</p>

                  
                <div class="containerpm">
                    <table cellspacing='0'>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Keperluan</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Persetujuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- ini cuma contoh ntar isinya dipanggil dari database -->
                            <tr>
                                <td>1</td>
                                <td>Yoga Ganteng</td>
                                <td>21120120120005</td>
                                <td>Seminar</td>
                                <td>4 Maret 2023</td>
                                <td>13.00 - 15.00</td>
                                <td>
                                    <div class="pemohonBtn">
                                        <a href="{{ route('toko.edit', $data->id_kucing) }}" type="button" class="btn btn-success rounded-3">
                                            <i class="bx bx-check-circle icon"></i>Terima
                                        </a>
                                    </div>

                                    <div class="pemohon2Btn">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal{{ $data->id_kucing }}">
                                            <i class="bx bx-minus-circle icon"></i>Tolak
                                        </button>
                                    </div>
                 
                                </td>
                            </tr>
                        </tbody>
                    </table>                    

                    </div>
             
            </div>
          
    

    </section>

    <script src="/assets/js/sidebar.js"></script>
</body>
</html>