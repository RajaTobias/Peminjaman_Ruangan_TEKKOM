<html>
<head>
    <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
</head>
<body>
    <div>
        <p style="font-size:3vw" align = "center"><b>Laporan Peminjaman Ruangan</b></p>
    </div>
<table width = 100% align = "center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Keperluan</th>
                                <th>Ruangan</th>
                                <th>Waktu Mulai</th>
                                <th>Waktu Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- ini cuma contoh ntar isinya dipanggil dari database -->
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->Nama }}</td>
                                <td>{{ $data->Keperluan }}</td>
                                <td>{{ $data->Nama_ruangan }}</td>
                                <td>{{ $data->Jam_mulai }}</td>
                                <td>{{ $data->Jam_selesai }}</td>                            
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
</body>
</html>