@extends('layouts.layout')

@section('customcss')  
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tambahruangan.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/component.css') }}">
  
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    @endsection

@section('content')

    <section class="home">
        <!-- <img src="assets/img/Vector (5).png" alt="..." allign="middle"> -->
        <div class="panel-header panel-header-lg">
            <!-- <img src="assets/img/6header-panel.jpg" alt="..." allign="middle"> -->
          </div> 
          <div class="portfolio">
            <div class="row1">
                  
                <img src="{{ asset('assets/img/Vector (5).png') }}" alt="..." allign="middle">
                <div class="containertr">
                    <p class="teksp">Tambah Ruangan</p>
                    <form class="ptambahruangan" method="post" enctype="multipart/form-data" action="">
                        @csrf
                        <div class="profile-pic">
                            <img src="{{ asset('assets/img/Rectangle 4036.png') }}" id="fotop">
                            <input type="file" id="file" name="image">
                            <label for="file" id="upBtn">Choose Photo</label>
                        </div>
                        <div class="input-text2">
                            <p class="tekstr">Nama Ruangan</p>
                            <input type="text" id="Nama_ruangan" name="Nama_ruangan" required/>
                        </div>
                        
                        <div class="input-text2">
                            <p class="tekstr2">Jenis Ruangan</p>
                            <select name="Jenis_ruangan" id="Jenis_ruangan">
                                <label for="lang">JenisR</label>
                                <option value="RuangKelas">Ruang Kelas</option>
                                <option value="RuangLab">Ruang Laboratorium</option>
                              </select>
                        </div>

                        
                        <!-- <div id="cbp-hrmenu" class="cbp-hrmenu">
                            <ul>
                                <li>
                                    <a href="#">Deskripsi Ruangan</a> <i class='bx bx-chevron-down' ></i>
                                    <div class="cbp-hrsub">
                                        <div class="cbp-hrsub-inner"> 
                                            <div>
                                                <h5>Fasilitas :</h5>
                                                <div class="teksy7">
                                                    <ul>
                                                        <li><input type="checkbox" class="teksy3"></input> <i class='bx bx-chalkboard icon' ></i>  AC</li>
                                                        <li><input type="checkbox" class="teksy3"></input> <i class='bx bx-desktop icon' ></i>  Smart TV</li>
                                                        <li><input type="checkbox" class="teksy3"></input> <i class='bx bx-chair icon' ></i>  Kursi</li>
                                                        <li><input type="checkbox" class="teksy3"></input> <i class='bx bx-card icon' ></i>  Meja</li>
                                                        </ul>
                                                        </div>
                                            </div>
                                            <div class="teksy6">
                                                <ul>
                                                    <li><input type="checkbox" class="teksy3"></input> <i class='bx bx-laptop icon' ></i>  Komputer </li>
                                                    <li><input type="checkbox" class="teksy3"></input> <i class='bx bx-hdd icon' ></i>  Proyektor </i></li>
                                                    <li><input type="checkbox" class="teksy3"></input> <i class='bx bx-slideshow icon' ></i>  LCD </li>
                                                </ul>
                                            </div>
                                        </div></cbp-hrsub-inner -->
                                    <!-- </div>/cbp-hrsub -->
                                <!-- </li>
                                <li> -->
                         
                                    <div> 
                                        <button class="border" input type="submit">Submit</button>
                                    </div>

                                    
                                <!-- </li>
                            </ul>
                            
                        </div> -->
                    
                    </form>
                    
                </div>
            </div>
    
    

    </section>
    @endsection

@section('customjs')
<script src="{{ asset('assets/js/modernizr.js') }}"></script>
<script src="{{ asset('assets/js/profile.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{ asset('assets/js/cbpHorizontalMenu.min.js') }}"></script>
    <script>
        $(function() {
            cbpHorizontalMenu.init();
        });
    </script>

@endsection