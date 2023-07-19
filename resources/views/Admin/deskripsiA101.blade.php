@extends('layouts.layout')

@section('customcss')
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/deskripsi.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">


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
                    @foreach ($datas as $data)
                        <p class="teksr1">{{$data -> Nama_ruangan}}</p>
                        <p class="teksf1">Fasilitas :</p>
                        <p class="teksf2"> <i class='bx bx-chair icon' ></i>  {{$data->kursi}} Kursi Meja</p>
                        <p class="teksf3"> <i class='bx bx-desktop icon' ></i>  {{$data->smart_tv}} Smart TV</p>
                        <p class="teksf4"> <i class='bx bx-hdd icon' ></i>  {{$data->layar_proyektor}} Proyektor</p>
                        <p class="teksf5"> <i class='bx bx-slideshow icon' ></i>  {{$data->lcd_proyektor}} LCD</p>
                        <p class="teksf8"> <i class='bx bx-chalkboard icon' ></i>  {{$data->ac}} AC</p>
                        <p class="teksf9"> <i class='bx bx-card icon' ></i>  {{$data->papan_tulis}} Papan Tulis</p>
                      

                        <p class="teksf6">Kapasitas</p>
                        <p class="teksf7"> <i class='bx bx-male-female icon' ></i>  {{$data->kapasitas}} Orang</p>
                        @endforeach

                        <div class="cardf">
                                    <a href="{{ route('Admin.fotoruang', $data->id) }}" class="borderdr">Tambah Foto <i class='bx bx-chevron-right icon'> </i> </a>
                                </div>

                        <div class="cardy">
                                    <a href="{{ route('Admin.fasilitas', $data->id) }}" class="borderdr">Fasilitas <i class='bx bx-chevron-right icon'> </i> </a>
                                </div>

                    </form>
            </div>
    
        
            <div class="slider">
    @foreach ($datas as $data)
    <div>
        <a href="#">
            <img src="{{ asset('storage/'. $data->image) }}" alt="Image 1">
        </a>            
    </div>
    @endforeach
    <!-- <div>
        <a href="#">
            <img src="{{ asset('assets/img/101c.jpg') }}" alt="Image 2">
        </a>
    </div>
    <div>
        <a href="#">
            <img src="{{ asset('assets/img/101d.jpg') }}" alt="Image 3">
        </a>            
    </div>
    <div>
        <a href="#">
            <img src="{{ asset('assets/img/101e.jpg') }}" alt="Image 4">
        </a>            
    </div>
    <div>
        <a href="#">
            <img src="{{ asset('assets/img/101f.jpg') }}" alt="Image 5">
        </a>
    </div> -->
</div>
    
    </section>
    @endsection

@section('customjs')

<script src="{{ asset('assets/js/select.js') }}"></script>
<script src="{{ asset('assets/js/profile.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
    console.log('Im ready');
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 2500,
    });
  });
</script>
    @endsection