@extends('layouts.layout')

@section('customcss') 
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/peminjamanr.css') }}">
  
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    @endsection

@section('content')
    <section class="home">
        <div class="panel-header panel-header-lg">
            <p class="teks">Peminjaman Ruangan</p>
            <img src="{{asset('assets/img/Rectangle 21.png')}}" alt="..." allign="middle">
          </div> 

        <div class="row6">
            <form class="login" method="post" action="{{ route('pinjam.store') }}">
                @csrf
                <div class="input-text">
                    <input type="text" id="Nama" name="Nama" placeholder="Nama Lengkap" required/>
                </div>
                
                <div class="input-text">
                    <input type="text" id="NIM" name="NIM" placeholder="NIM" required/>
                </div>

                <div class="input-text">
                    <input type="text" id="Keperluan" name="Keperluan" placeholder="Keperluan" required/>
                </div>

                <!-- <div>
                    <button class="border" input type="submit">Submit</button>
                </div> -->
                <select name="Ruangan" id="Ruangan">
                        <label for="lang">JenisR</label>
                        <option value="">Pilih Ruangan</option>
                        <option value="A101">Ruang 101</option>
                        <option value="A102">Ruang 102</option>
                        <option value="A201">Ruang 201</option>
                        <option value="Lab. Embedded">Lab. Embedded</option>
                        <option value="Lab. RPL">Lab. RPL</option>
                        <option value="Lab. Mulmed">Lab. Mulmed</option>
                        <option value="Lab. Jarkom">Lab. Jarkom</option>
                      </select>
                
                <div class="input-text">
                    <input type="date" id="Tanggal" name="Tanggal" placeholder="Tanggal" required/>
                </div>

                <div class="input-text">
                    <input type="time" id="Jam_mulai" name="Jam_mulai" placeholder="Mulai" required/>
                </div>

                <div class="input-text">
                    <input type="time" id="Jam_selesai" name="Jam_selesai" placeholder="selesai" required/>
                </div>

                <div>
                    <button class="border" input type="submit">Submit</button>
                </div>
            </form>
        </div> 
        <!-- <footer class="footer fixed-bottom1" method="post" action="{{ route('pinjam.store') }}">
            <div class="teksa">
                <i class='bx bx-map icon'></i>
                <span class="">Ruangan</span>
                <div class= "teksk">
                    <select name="languages" id="lang">
                        <label for="lang">JenisR</label>
                        <option value="Ruang101">Ruang 101</option>
                        <option value="Ruang102">Ruang 102</option>
                        <option value="Ruang201">Ruang 201</option>
                        <option value="LabE">Lab. Embedded</option>
                        <option value="LabRPL">Lab. RPL</option>
                        <option value="LabM">Lab. Mulmed</option>
                        <option value="LabJ">Lab. Jarkom</option>
                      </select>
                </div>
            </div>
            <div class="teksb">
                <i class='bx bx-calendar-event icon'></i>
                <span class="">Tanggal Meminjam</span>
            </div>
                 <div class= "tekse" id='cetak'>Hari ini</div>
                <input class="teksf" type='date' id='Tanggal' name='Tanggal' onchange='cetakTanggal()'/>
            <div class="teksc">
                    <i class='bx bx-time icon'></i>
                    <span class="">Waktu Mulai</span>
                </div>
               <div class= "teksg" id='mulai'>--:--</div>
                 <input class="teksh" type='time' id='Jam_mulai' name='Jam_mulai' onchange='cetakWaktu()'/>
                 <div class="teksd">
                    <i class='bx bx-time-five icon'></i>
                    <span class="">Waktu Selesai</span>
                </div>
               <div class= "teksi" id='selesai'>--:--</div>
               <input class="teksj" type='time' id='Jam_selesai' name='Jam_selesai' onchange='cetakJam()'/>
 
        </footer> -->

    </section>

    @endsection