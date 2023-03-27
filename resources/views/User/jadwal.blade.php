@extends('layouts.layout0')

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
            </div>
            <div id="modalEventView" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="namaruang">Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    

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
      $('#modalTitle').text(event.title);
      $('#name').text(event.event.extendedProps.name);
      $('#date').text(new Date(event.event.start).toLocaleDateString("en-US", options));
      $('#modalEventView').modal('show');
    }
    });

    calendar.render();
});

    </script>

@endsection