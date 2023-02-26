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
    <link rel="stylesheet" href="{{ asset('assets/css/dropdown.css') }}">

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
                        <a href="{{ route('User.dashboard') }}">
                            <i class='bx bx-category-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{route ('User.ruangan')}}">
                            <i class='bx bx-buildings icon' ></i>
                            <span class="text nav-text">Ruangan</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{route ('User.jadwal')}}">
                            <i class='bx bx-calendar icon'></i>
                            <span class="text nav-text">Jadwal</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="nav-link">
                    <a href="{{route ('User.profile')}}">
                        <i class='bx bx-user-circle icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route ('User.contact')}}">
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
                    <li class="w3-dropdown-click">
                        <a class="w3-button w3-black" id="navbarDropdown" href="#" role="button" onclick="myFunction()"><i class="bx bx-user icon"></i></a>
                        <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
                            <a href="{{ route('logout') }}" class="w3-bar-item w3-button" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                          </div>
                        </ul>
                    </li>
                    
                </ul>
            </nav>
    </section>

    <section class="home">
        <img src="/assets/img/Vector (5).png" alt="..." allign="middle">
        <div class="panel-header panel-header-lg">
            <img src="/assets/img/6header-panel.jpg" alt="..." allign="middle">
            <p class="tekssatu">Peminjaman Ruangan</p>
            <p class="teksdua">Jurusan Teknik Komputer</p>
            <p class="tekstiga">Universitas Diponegoro</p>
          </div> 
        <div class="row">
            <img src="/assets/img/Vector (4).png" alt="..." allign="middle">
            <div class="container">
                <div class="card">
                  <div class="box">
                    <div class="content">
                      <img src="/assets/img/vector.png" alt="">
                      <h3>Ruangan</h3>
                      <a href="{{route('User.ruangan')}}">Lebih Banyak <i class="bx bx-right-arrow-alt icon"></i></a> 
                    </div>
                  </div>
                </div>
              
                <div class="card1">
                  <div class="box">
                    <div class="content">
                        <img src="/assets/img/vector2.png" alt="">
                      <h3>Peminjaman</h3>
                      <a href="{{route('User.jadwal')}}">Lebih Banyak <i class="bx bx-right-arrow-alt icon"></i></a>
                    </div>
                  </div>
                </div>
              
                <!-- <div class="card2">
                  <div class="box">
                    <div class="content">
                        <img src="assets/img/vector3.png" alt="">
                      <h3>Pemohonan</h3>
                      <a href="#">Lebih Banyak <i class="bx bx-right-arrow-alt icon"></i></a>
                    </div>
                  </div>
                </div> -->
              </div>
        </div>

    </section>

    <script src="/assets/js/sidebar.js"></script>

</body>
</html>