@extends('layouts.layout')

@section('customcss')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/styles2.css') }}">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

@endsection

@section('content')

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
                        <a class="portfolio-link" data-bs-toggle="modal" href="{{ route('Admin.deskripsiA101') }}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"></div>
                            </div>
                            <img src="/assets/img/Rectangle 4008.png" alt="..." />
                            <i class='bx bx-buildings icon' ></i>
                            <span class="tekskelas">Ruang 101</span>
                        </a>
                    </div>
                    <div class="cardx">
                        <a class="portfolio-link" data-bs-toggle="modal" href="{{ route('Admin.deskripsiA102') }}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img src="/assets/img/Rectangle 4008.png" alt="..." />
                            <i class='bx bx-buildings icon' ></i>
                            <span class="tekskelas2">Ruang 102</span>
                        </a>
                    </div>
                    <div class="cardx">
                        <a class="portfolio-link" data-bs-toggle="modal" href="{{ route('Admin.deskripsiA201') }}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img src="/assets/img/Rectangle 4008.png" alt="..." />
                            <i class='bx bx-buildings icon' ></i>
                            <span class="tekskelas3">Ruang 201</span>
                        </a>
                    </div>
                    <div class="cardx">
                        <a class="portfolio-link" data-bs-toggle="modal" href="{{ route('Admin.deskripsiLabMLD') }}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img src="/assets/img/Rectangle 4008.png" alt="..." />
                            <i class='bx bx-buildings icon' ></i>
                            <span class="tekskelas">Lab. Mulmed</span>
                        </a>
                    </div>
                  
                    <div class="cardx">
                        <a class="portfolio-link" data-bs-toggle="modal" href="{{ route('Admin.deskripsiLabRPL') }}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img src="/assets/img/Rectangle 4008.png" alt="..." />
                            <i class='bx bx-buildings icon' ></i>
                            <span class="tekskelas2">Lab. RPL</span>
                        </a>
                    </div>
                  
                    <div class="cardx">
                        <a class="portfolio-link" data-bs-toggle="modal" href="{{ route('Admin.deskripsiLabJKM') }}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img src="/assets/img/Rectangle 4008.png" alt="..." />
                            <i class='bx bx-buildings icon' ></i>
                            <span class="tekskelas3">Lab. Jarkom</span>
                        </a>
                    </div>

                    <div class="cardx">
                        <a class="portfolio-link" data-bs-toggle="modal" href="{{ route('Admin.deskripsiLabEMB') }}">
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
    
@endsection