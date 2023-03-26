@extends('layouts.layout')

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
                    <form class="pprofile" method ="post" enctype="multipart/form-data" action = "{{route('Admin.updateprofile')}}">
                        @csrf
                        <div class="profile-pic">
                            <img src="/assets/img/Rectangle 4036.png" id="fotop">
                            <input type="file" id="file" name="Image">
                            <label for="file" id="upBtn">Choose Photo</label>
                        </div>
                        <div class="input-text1">
                            <p class="teksp1">Nama</p>
                            <input type="text" id="name" name="name"/>
                        </div>
                        
                        <div class="input-text1">
                            <p class="teksp2">No. Handphone</p>
                            <input type="text" id="Nomor_HP" name="Nomor_HP"/>
                        </div>
        
                        <div class="input-text1">
                            <p class="teksp3">NIM</p>
                            <input type="text" id="Nomor_ID" name="Nomor_ID"/>
                        </div>
        
                        <div>
                            <button class="border3" input type="submit">Submit</button>
                        </div>
                    </form>
            </div>
    
    

    </section>

    @endsection

    @section('customjs')

<script src="{{ asset('assets/js/profile.js') }}"></script>

@endsection