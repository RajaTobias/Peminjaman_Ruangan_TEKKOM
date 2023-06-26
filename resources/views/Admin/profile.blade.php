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
                    <form class="pprofile">
                        <div class="profile-pic">
                            <img src="{{ asset('storage/'. auth()->user()->Image) }}" id="fotox">
                        </div>
                        <div class="input-text1">
                            <p class="teksp1">Nama</p>
                            <input type="text" id="inputNama" name="nama" placeholder="{{ Auth::user()->name }}" readonly/>
                        </div>
                        
                        <!-- <div class="input-text1">
                            <p class="teksp2">No. Handphone</p>
                            <input type="text" id="inputNo" name="no" placeholder="{{ Auth::user()->Nomor_HP }}" readonly/>
                        </div>
         -->
                        <div class="input-text1">
                            <p class="teksp3">NIM</p>
                            <input type="text" id="inputNIM" name="nim" placeholder="{{ Auth::user()->Nomor_ID }}"readonly/>
                        </div>
        
                        <div>
                            <a type="button" class="border1" href="{{ route('Admin.editprofile') }}"><i class="bx bx-pencil icon"></i></a><p class="teksp4">Edit</p>
                        </div>
                    </form>
            </div>
    
    

    </section>

    @endsection

    @section('customjs')

<script src="{{ asset('assets/js/profile.js') }}"></script>

@endsection