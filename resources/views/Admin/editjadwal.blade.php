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
                    <form class="ejadwal" method="post" action="{{ route('editjadwal.store') }}">
                        @csrf
                        <div class="teksa">
                            <i class='bx bx-map icon'></i>
                            <span class="">Pilih Ruangan</span>
                            </div>
                            <div class="teksz">            
                            <select name="id_ruangan" id="id_ruangan">
                                <label for="lang">JenisR</label>
                                @foreach ($datas as $data)
                                <option value= "{{ $data->id }}" >{{ $data->Nama_ruangan }}</option>
                                @endforeach
                            </select>
                            </div>                
                        <div class="teksb">
                            <i class='bx bx-calendar-event icon'></i>
                            <span class="">Keperluan</span>
                        </div>
                            <input class="teksf" type='text' id='Keperluan' name='Keperluan' onchange='cetakTanggal()'/>
                        <div class="teksc">
                                <i class='bx bx-time icon'></i>
                                <span class="">Waktu Mulai</span>
                            </div>
                             <input class="teksh" type='datetime-local' id='Waktu_mulai' name='Waktu_mulai' onchange='cetakWaktu()'/>
                             <div class="teksd">
                                <i class='bx bx-time-five icon'></i>
                                <span class="">Waktu Selesai</span>
                            </div>
                           <input class="teksj" type='datetime-local' id='Waktu_selesai' name='Waktu_selesai' onchange='cetakJam()'/>
  
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