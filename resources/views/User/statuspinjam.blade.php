@extends('layouts.layout0')

@section('customcss')
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pemohon.css') }}">
      
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
                <p class="tekspemohon">Pemohon</p>

                  
                <div class="containerpm">
                    <table>
                        <thead>
                            <tr>
<<<<<<< HEAD
                                <th style="width:5% !important;">No</th>
                                <th style="width:17% !important;">Nama</th>
                                <th style="width:15% !important;">NIM</th>
                                <th style="width:10% !important;">Keperluan</th>
                                <th style="width:10% !important;">Ruangan</th>
                                <th style="width:12% !important;">Tanggal</th>
                                <th style="width:12% !important;">Waktu</th>
                                <th style="width:16% !important;">Persetujuan</th>
=======
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Keperluan</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Status</th>
>>>>>>> 7ab3bcec3c4d2213b74874878a092e408ab0707c
                            </tr>
                        </thead>
                        <tbody>
                            <!-- ini cuma contoh ntar isinya dipanggil dari database -->
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->Nama }}</td>
                                <td>{{ $data->NIM }}</td>
                                <td>{{ $data->Keperluan }}</td>
                                <td>{{ $data->Ruangan }}</td>
                                <td>{{ $data->Tanggal }}</td>
<<<<<<< HEAD
                                <td>{{ $data->Jam_mulai }} s/d {{ $data->Jam_selesai }}</td>
                                <td>
                                    <div class="pemohonBtn">
                                        <a href="" type="button" class="btn btn-success rounded-3">
                                            <i class="bx bx-check-circle icon"></i>Terima
                                        </a>
                                    </div>

                                    <div class="pemohon2Btn">
                                        <a href="" type="button" class="btn btn-danger" data-toggle="modal">
                                            <i class="bx bx-minus-circle icon"></i>Tolak
                                        </a>
                                    </div>
                 
                                </td>
=======
                                
>>>>>>> 7ab3bcec3c4d2213b74874878a092e408ab0707c
                                
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>                    

                    </div>
             
            </div>
          
    

    </section>

   @endsection