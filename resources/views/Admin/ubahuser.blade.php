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
                                <th style="width:25% !important;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- ini cuma contoh ntar isinya dipanggil dari database -->
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->is_admin == 1 && $data->is_TU == 0 ? 'Admin LAB' : ($data->is_admin == 1 && $data->is_TU == 1 ? 'Admin TU' : 'User') }}</td>
                                <td>
                                    <div class="pemohon3Btn" >
                                        <a href="{{ route('Admin.ubahroleadminlab', $data->id) }}" type="button" class="btn btn-light rounded-3">
                                            <i class="bx bx-edit-alt icon" ></i>  Admin Lab
                                        </a>
                                    </div>

                                    <div class="pemohon4Btn">
                                        <a href="{{ route('Admin.ubahroleuser', $data->id) }}" type="button" class="btn btn-dark rounded-3">
                                            <i class="bx bx-edit-alt icon" ></i>  User
                                        </a>
                                    </div>

                                <div class="pemohon5Btn">
                                        <a href="{{ route('Admin.ubahroleadminTU', $data->id) }}" type="button" class="btn btn-primary rounded-3">
                                            <i class="bx bx-edit-alt icon" ></i>  Admin TU
                                        </a>
                                    </div>
                                </td>

                
                            </tr>
                            @endforeach
                            
                        </tbody>
    
                    </table>   
                    <div class="pagint2">
                        <ul class="paginat2">
                            {{ $datas->links('pagination::bootstrap-4') }}
                        </ul>
                    </div>
                    </div>
             
            </div>
          
    

    </section>

   @endsection