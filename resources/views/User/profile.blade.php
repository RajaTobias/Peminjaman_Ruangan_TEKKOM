@extends('layouts.layout0')

@section('customcss')  
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
  
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
                  
                <img src="/assets/img/Vector (5).png" alt="..." allign="middle">
                <div class="containerp">
                    <p class="teksp">Profile Setting</p>
                    <form class="pprofile">
                        <div class="profile-pic">
                            <img src="/assets/img/Rectangle 4036.png" id="fotop">
                            <input type="file" id="file">
                            <label for="file" id="upBtn">Choose Photo</label>
                        </div>
                        <div class="input-text1">
                            <p class="teksp1">Nama Mahasiswa</p>
                            <input type="text" id="inputNama" name="nama" required/>
                        </div>
                        
                        <div class="input-text1">
                            <p class="teksp2">No. Handphone</p>
                            <input type="text" id="inputNo" name="no" required/>
                        </div>
        
                        <div class="input-text1">
                            <p class="teksp3">NIM</p>
                            <input type="text" id="inputNIM" name="nim" required/>
                        </div>
        
                        <div>
                            <button class="border1"><i class="bx bx-pencil icon"></i></button><p class="teksp4">Edit</p>
                        </div>
                    </form>
            </div>
    
    

    </section>

    @endsection

    @section('customjs')

<script src="{{ asset('assets/js/profile.js') }}"></script>

@endsection