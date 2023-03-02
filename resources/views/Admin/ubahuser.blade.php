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
                <p class="tekspemohon">Edit Pengguna</p>

                  
                <div class="containerpm2">
                    <table>
                        <thead>
                            <tr>
                                <th style="width:3% !important;">No</th>
                                <th style="width:15% !important;">Nama</th>
                                <th style="width:10% !important;">Role</th>
                                <th style="width:10% !important;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- ini cuma contoh ntar isinya dipanggil dari database -->
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->is_admin }}</td>
                                <td>
                                    <div class="pemohon3Btn">
                                        <a href="{{ route('Admin.ubahrole', $data->id) }}" type="button" class="btn btn-light rounded-3">
                                            <i class="bx bx-edit-alt icon" ></i>  Ubah Role
                                        </a>
                                    </div>
                                </td>
                                
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>                    

                    </div>
             
            </div>
          
    

    </section>

   @endsection