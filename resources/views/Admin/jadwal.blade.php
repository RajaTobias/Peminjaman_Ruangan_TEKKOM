@extends('layouts.layout')

@section('customcss')
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/jadwalstyle.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap">
  
    <link rel="stylesheet" href="{{ asset('assets/fullcalendar/packages/core/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fullcalendar/packages/daygrid/main.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}"> 
      
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/jadwal.min.css') }}"> -->
    
    <!-- Style -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/jadwal.css') }}"> -->

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
 
                  
                <div class="containerk">
                    <div class="box1">

                    </div>
                            <div id='calendar'></div>
                            
                    </div>

                    <div class="border2">
                        <a href="{{ route('Admin.editjadwal') }}">
                            <i class='bx bx-calendar-edit'></i><p class="tekse2">Edit</p>
                        </a>
                    </div>
            </div>
            @foreach ($datas as $data)
            <div id="modalEventView" class="modal" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="title" style="color: #000;">Peminjaman Ruangan</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button> -->
                  </div>
                  <div class="modal-body">
                  <h5 class="start" id="start" style="color: #000;"></h5>
                  <h5 class="end" id="end" style="color: #000;"></h5>
                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
      @endforeach

    </section>
@endsection

@section('customjs')

<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/fullcalendar/packages/core/main.js') }}"></script>
<script src="{{ asset('assets/fullcalendar/packages/interaction/main.js') }}"></script>
<script src="{{ asset('assets/fullcalendar/packages/daygrid/main.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'interaction', 'dayGrid' ],
    editable: true,
    eventClick: true,
    eventLimit: true, // allow "more" link when too many events
    events: [
        @foreach ($datas as $data)
        {
        start: '{{ $data->Waktu_mulai }}',
        title: '{{ $data->Nama_ruangan }}',
        end: '{{$data -> Waktu_selesai}}'
    },
        @endforeach
    ],
    
    eventClick : function(event) {
      // Modal Value
      var options = { year: 'numeric', month: 'long', day: 'numeric' };
      $('#title').text(event.title);
      $('#start').text(event.start);
      $('#end').text(event.end);
      $('#modalEventView').modal('toggle');
    }
    });

    calendar.render();
});

    </script>

@endsection