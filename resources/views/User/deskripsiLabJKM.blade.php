@extends('layouts.layout0')

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
                        <p class="teksr1">Lab. Jarkom</p>
                        <p class="teksf1">Fasilitas :</p>
                        <p class="teksf2"> <i class='bx bx-chair icon' ></i>  21 Kursi Meja</p>
                        <p class="teksf3"> <i class='bx bx-card icon' ></i>  1 Papan Tulis</p>
                        <p class="teksf4"> <i class='bx bx-hdd icon' ></i>  1 Proyektor</p>
                        <p class="teksf5"> <i class='bx bx-slideshow icon' ></i>  1 LCD</p>
                        <p class="teksf8"> <i class='bx bx-chalkboard icon' ></i>  2 AC</p>
                      

                        <p class="teksf6">Kapasitas</p>
                        <p class="teksf7"> <i class='bx bx-male-female icon' ></i>  Orang</p>

                

                   
                                <div class="cardy">
                                    <a href="{{ route('User.labjarkom') }}" class="borderdr">Pinjam Ruangan <i class='bx bx-chevron-right icon'> </i> </a>
                                </div>
                    </form>
            </div>
    
        
            <div class="slider">

    <div>
        <a href="#">
            <img src="{{ asset('assets/img/jarkoma.jpg') }}" alt="Image 1">
        </a>
    </div>
    <div>
        <a href="#">
            <img src="{{ asset('assets/img/jarkomb.jpg') }}" alt="Image 2">
        </a>            
    </div>
    <div>
        <a href="#">
            <img src="{{ asset('assets/img/jarkomc.jpg') }}" alt="Image 3">
        </a>            
    </div>
    <div>
        <a href="#">
            <img src="{{ asset('assets/img/jarkomd.jpg') }}" alt="Image 4">
        </a>
    </div>
    <div>
        <a href="#">
            <img src="{{ asset('assets/img/jarkome.jpg') }}" alt="Image 5">
        </a>
    </div>

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
