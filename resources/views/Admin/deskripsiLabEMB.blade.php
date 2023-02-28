@extends('layouts.layout')

@section('customcss')
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/deskripsi.css') }}">
  
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
                    <p class="teksdes">Deskripsi Ruangan</p>
                    <form class="druangan">
                        <p class="teksr1">Lab. Embedded</p>
                        <p class="teksf1">Fasilitas :</p>
                        <p class="teksf2"> <i class='bx bx-chalkboard icon' ></i>  AC</p>
                        <p class="teksf3"> <i class='bx bx-desktop icon' ></i>  Smart TV</p>
                        <p class="teksf4"> <i class='bx bx-chair icon' ></i>  Kursi</p>
                        <p class="teksf5"> <i class='bx bx-card icon' ></i>  Meja</p>
                      

                        <p class="teksf6">Kapasitas</p>
                        <p class="teksf7"> <i class='bx bx-male-female icon' ></i>  Orang</p>

                

                   
                                <!-- <div class="cardy">
                                    <a href="{{ route('User.labembedded') }}" class="borderdr">Pinjam Ruangan <i class='bx bx-chevron-right icon'> </i> </a>
                                </div> -->
                    </form>
            </div>
    
            <div class="containerp">   
                    <img src="{{ asset('assets/img/Rectangle 21.png') }}" alt="...">
        
        </div>
    

    </section>
    @endsection

@section('customjs')

<script src="{{ asset('assets/js/select.js') }}"></script>
<script src="{{ asset('assets/js/profile.js') }}"></script>
    @endsection
