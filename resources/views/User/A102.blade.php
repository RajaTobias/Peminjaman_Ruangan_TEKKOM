@extends('layouts.layout0')

@section('customcss') 
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/peminjaman.css') }}">
  
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    @endsection

@section('content')
    <section class="home">
        <div class="panel-header panel-header-lg">
            <p class="teks">Peminjaman Ruangan</p>
            <img src="{{ asset('assets/img/Rectangle 21.png') }}" alt="..." allign="middle">
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
                <div class= "teksk">Ruang 102</div>
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
    @endsection