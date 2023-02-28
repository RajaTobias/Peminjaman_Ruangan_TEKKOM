@extends('layouts.layout')

@section('customcss') 
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/editjadwal.css') }}"> 
  
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


                <div class="containerp">
                    <p class="teksdes">Edit Jadwal</p>
                    <form class="ejadwal">
                        <div class="teksa">
                            <i class='bx bx-map icon'></i>
                            <span class="">Ganti Ruangan</span>
                            </div>
                            <div class="teksz">            
                                <select name="languages" id="lang">
                                <label for="lang">JenisR</label>
                                <option value="JenisRu">Pilih Ruang</option>
                                <option value="Ruang101">Ruang 101</option>
                                <option value="Ruang102">Ruang 102</option>
                                <option value="Ruang201">Ruang 201</option>
                                <option value="RuangLabRPL">Ruang Lab. RPL</option>
                                <option value="RuangLabEmb">Ruang Lab. Embedded</option>
                                <option value="RuangLabMulmed">Ruang Lab. Mulmed</option>
                                <option value="RuangLabJarkom">Ruang Lab. Jarkom</option>
                              </select>
                            </div>                
                        <div class="teksb">
                            <i class='bx bx-calendar-event icon'></i>
                            <span class="">Edit Tanggal</span>
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
  
                           <div>
                            <button class="borderej">Submit</button>
                        </div>
                    </form>
            </div>
          
    

    </section>
    @endsection

@section('customjs')
    <script src="{{ asset('assets/js/select.js') }}"></script>
    <script src="{{ asset('assets/js/profile.js') }}"></script>

    @endsection