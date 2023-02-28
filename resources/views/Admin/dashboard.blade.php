@extends('layouts.layout')

@section('customcss')
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

  
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
@endsection

@section('content')
    <section class="home">
        <img src="/assets/img/Vector (5).png" alt="..." allign="middle">
        <div class="panel-header panel-header-lg">
            <img src="/assets/img/6header-panel.jpg" alt="..." allign="middle">
            <p class="tekssatu">Peminjaman Ruangan</p>
            <p class="teksdua">Jurusan Teknik Komputer</p>
            <p class="tekstiga">Universitas Diponegoro</p>
          </div> 
        <div class="row">
            <img src="/assets/img/Vector (4).png" alt="..." allign="middle">
            <div class="container">
                <div class="card">
                  <div class="box">
                    <div class="content">
                      <img src="/assets/img/vector.png" alt="">
                      <h3>Ruangan</h3>
                      <a href="{{route('Admin.ruangan')}}">Lebih Banyak <i class="bx bx-right-arrow-alt icon"></i></a> 
                    </div>
                  </div>
                </div>
              
                <div class="card1">
                  <div class="box">
                    <div class="content">
                        <img src="/assets/img/vector2.png" alt="">
                      <h3>Jadwal</h3>
                      <a href="{{route('Admin.jadwal')}}">Lebih Banyak <i class="bx bx-right-arrow-alt icon"></i></a>
                    </div>
                  </div>
                </div>
              
                <div class="card2">
                  <div class="box">
                    <div class="content">
                        <img src="/assets/img/vector3.png" alt="">
                      <h3>Permohonan</h3>
                      <a href="{{route('Admin.pemohon')}}">Lebih Banyak <i class="bx bx-right-arrow-alt icon"></i></a>
                    </div>
                  </div>
                </div>
              </div>
        </div>

    </section>
    @endsection