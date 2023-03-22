@extends('layouts.layout')

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
                                <th style="width:5% !important;">No</th>
                                <th style="width:17% !important;">Nama</th>
                                <th style="width:15% !important;">NIM</th>
                                <th style="width:10% !important;">Keperluan</th>
                                <th style="width:10% !important;">Ruangan</th>
                                <th style="width:12% !important;">Tanggal</th>
                                <th style="width:12% !important;">Waktu</th>
                                <th style="width:16% !important;">Persetujuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- ini cuma contoh ntar isinya dipanggil dari database -->
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->Nama }}</td>
                                <td>{{ $data->NIM }}</td>
                                <td>{{ $data->Keperluan }}</td>
                                <td>{{ $data->Nama_ruangan }}</td>
                                <td>{{ $data->Tanggal }}</td>
                                <td>{{ $data->Jam_mulai }} s/d {{ $data->Jam_selesai }}</td>
                                <td>
                                    <div class="pemohonBtn">
                                        <a href="{{route('Admin.accept', $data->id)}}" type="button" class="btn btn-success rounded-3">
                                            <i class="bx bx-check-circle icon"></i>Terima
                                        </a>
                                    </div>

                                    <div class="pemohon2Btn">
                                        <a href="{{route('Admin.decline', $data->id)}}" type="button" class="btn btn-danger" data-toggle="modal">
                                            <i class="bx bx-minus-circle icon"></i>Tolak
                                        </a>
                                    </div>
                 
                                </td>
                                
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    
                    </div>
             
            </div>

            <div class="row1">
                <p class="tekspemohon2">Status Pemohon</p>

                  
                <div class="containersp">
                     <table>
                        <thead>
                            <tr>
                                <th style="width:5% !important;">No</th>
                                <th style="width:17% !important;">Nama</th>
                                <th style="width:15% !important;">NIM</th>
                                <th style="width:10% !important;">Keperluan</th>
                                <th style="width:10% !important;">Ruangan</th>
                                <th style="width:12% !important;">Tanggal</th>
                                <th style="width:12% !important;">Waktu</th>
                                <th style="width:16% !important;">Persetujuan</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!-- ini cuma contoh ntar isinya dipanggil dari database -->
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->Nama }}</td>
                                <td>{{ $data->NIM }}</td>
                                <td>{{ $data->Keperluan }}</td>
                                <td>{{ $data->Nama_ruangan }}</td>
                                <td>{{ $data->Tanggal }}</td>

                                <td>{{ $data->Jam_mulai }} s/d {{ $data->Jam_selesai }}</td>
                                <td>
                                @if($data->is_accept == 1 && $data->is_decline == 0 )
                                <div class="badge12">
                                        <span class="teksbadge">
                                        <i class="bx bx-check-circle icon"></i>  Diterima
                                    </span>
                                    </div>
                                    @else
                                        @if($data->is_accept == 0 && $data->is_decline == 1 )
                                    <div class="badge2">
                                        <span class="teksbadge">
                                        <i class="bx bx-no-entry icon"></i>  Ditolak
                                    </span>
                                    </div>
                                        @else
                                    <div class="badge3">
                                        <span class="teksbadge">
                                        <i class="bx bx-time icon"></i>  Menunggu
                                    </span>
                                    </div>
                                        @endif
                                    @endif
                                </td>
                                    
                                <!-- {{ ($data->is_accept == 1 && $data->is_decline == 0 )? 'diterima' :  
                                    (($data->is_accept == 0 && $data->is_decline == 1) ? 'ditolak' : 'menunggu')}}</td> -->
                                <!-- <td>
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
                 
                                </td> -->
                                
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    </div>
             
            </div>

    </section>

   @endsection