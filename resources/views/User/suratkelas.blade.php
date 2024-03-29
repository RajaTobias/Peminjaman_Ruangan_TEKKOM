<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta charset="utf-8">

    <title>Surat Peminjaman Ruangan Kelas</title>

    <style type="text/css">
        @page {
            size: 21cm 29.7cm;
            margin: 0;
        }
        body {
            background-repeat:no-repeat;
            width:100%;
            height:100vh;
            background-size: cover;
        }
        * {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12px;
        }
        a {
            color: #fff;
            text-decoration: none;
        }

        p {
            margin: 0;
        }

        table {
            border-collapse: collapse;
        }

        ol {
            margin: 0;
            padding-left: 1.2em;
        }

        ol li {
            padding-left: 1.2em;
            text-align: justify;
        }
    </style>
</head>

<body>
    @foreach($datas as $data)
    <div class="information">
        <table width="100%" height="100">
        </tr>
        <td colspan="2" align="center"></td><img style="position:absolute;top:0.4in;left:0.27in;width:1.21in;height:1.41in" src="{{ asset('assets/img/logo_undip.jpeg') }}" />
        </tr>
        <div style="position:absolute;top:0.51in;left:1.56in;width:4.39in;line-height:0.23in;"><span style="font-style:normal;font-weight:bold;font-size:14pt;font-family:Times;color:#000080">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN</span><span style="font-style:normal;font-weight:bold;font-size:13pt;font-family:Times;color:#000080"> </span><br/></SPAN></div>
        <div style="position:absolute;top:0.82in;left:1.56in;width:2.44in;line-height:0.23in;"><span style="font-style:normal;font-weight:bold;font-size:14pt;font-family:Times;color:#000080">RISET, DAN TEKNOLOGI</span><span style="font-style:normal;font-weight:bold;font-size:13pt;font-family:Times;color:#000080"> </span><br/></SPAN></div>
        <div style="position:absolute;top:0.78in;left:7.15in;width:2.46in;line-height:0.14in;"><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000080">Jalan. Prof. H. Soedarto, S.H.</span><span style="font-style:normal;font-weight:normal;font-size:8pt;font-family:Times;color:#000080"> </span><br/></SPAN></div>
        <div style="position:absolute;top:0.96in;left:6.65in;width:2.95in;line-height:0.14in;"><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000080">Tembalang Semarang, Kode Pos 50275</span><span style="font-style:normal;font-weight:normal;font-size:8pt;font-family:Times;color:#000080"> </span><br/></SPAN></div>
        <div style="position:absolute;top:1.16in;left:1.56in;width:3.89in;line-height:0.31in;"><span style="font-style:normal;font-weight:bold;font-size:18pt;font-family:Times;color:#000080">UNIVERSITAS DIPONEGORO</span><span style="font-style:normal;font-weight:bold;font-size:18pt;font-family:Times;color:#000080"> </span><br/></SPAN></div>
        <div style="position:absolute;top:1.14in;left:6.28in;width:3.30in;line-height:0.14in;"><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000080">7460055, (024) 7460053, Faks. (024) 7460053</span><span style="font-style:normal;font-weight:normal;font-size:8pt;font-family:Times;color:#000080"> </span><br/></SPAN></div>
        <div style="position:absolute;top:1.32in;left:6.28in;width:3.31in;line-height:0.14in;"><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000080">www.ft.undip.ac.id  email: teknik@undip.ac.id</span><span style="font-style:normal;font-weight:normal;font-size:8pt;font-family:Times;color:#000080"> </span><br/></SPAN></div>
        <div style="position:absolute;top:1.53in;left:1.56in;width:2.11in;line-height:0.24in;"><span style="font-style:normal;font-weight:bold;font-size:14pt;font-family:Times;color:#000080">FAKULTAS TEKNIK</span><span style="font-style:normal;font-weight:bold;font-size:14pt;font-family:Times;color:#000080"> </span><br/></SPAN></div>
        <div style="position:absolute;top:2.19in;left:6in;width:3.61in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Semarang, <span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000" id="tanggalwaktu"></span></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
        <div style="position:absolute;top:2.49in;left:1.1in;width:1.69in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Hal</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
        <div style="position:absolute;top:2.49in;left:1.95in;width:1.75in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">: Peminjaman Ruangan</span></SPAN><br/></div>   
        <div style="position:absolute;top:3.09in;left:1.1in;width:3.61in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Yth. Ketua Departemen Teknik Komputer</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:3.39in;left:1.1in;width:3.10in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Fakultas Teknik Universitas Diponegoro</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:3.69in;left:1.1in;width:1.69in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">di tempat</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:4.19in;left:1.1in;width:1.69in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Dengan Hormat,</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:4.49in;left:1.1in;width:4.69in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Sehubungan akan diselenggarakan kegiatan {{ $data->Keperluan }} pada : </span></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:4.79in;left:1.1in;width:3.61in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Tanggal</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:4.79in;left:1.95in;width:1.75in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">: {{ \Carbon\Carbon::parse($data->Jam_mulai)->isoFormat('D MMMM Y') }}</span></SPAN><br/></div>
                <div style="position:absolute;top:5.09in;left:1.1in;width:1.10in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Waktu</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:5.09in;left:1.95in;width:1.75in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">: {{ \Carbon\Carbon::parse($data->Jam_mulai)->format('H:m') }} - {{ \Carbon\Carbon::parse($data->Jam_selesai)->format('H:m') }}</span></SPAN><br/></div>
                <div style="position:absolute;top:5.39in;left:1.1in;width:1.69in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Tempat</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:5.39in;left:1.95in;width:1.47in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">: Ruang {{ $data->Nama_ruangan }}</span></SPAN><br/></div> 
                <div style="position:absolute;top:5.69in;left:1.1in;width:7.69in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Maka dengan ini kami mengajukan permohonan peminjaman Ruang {{ $data->Nama_ruangan }} Departemen </span></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:5.99in;left:1.1in;width:7.69in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Teknik Komputer Fakultas Teknik Universitas Diponegoro untuk pelaksanaan kegiatan tersebut. </span></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:6.29in;left:1.1in;width:7.69in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Demikian permohonan ini kami sampaikan. Atas perhatiannya, kami mengucapkan terima kasih. </span></span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <!-- <div style="position:absolute;top:7.28in;left:6.92in;width:1.67in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Semarang,</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div> -->
                <div style="position:absolute;top:6.94in;left:1.5in;width:3.83in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Kepala Tata Usaha</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:8.27in;left:1.47in;width:2.07in;line-height:0.20in;"><span style="font-style:normal;font-weight:bold;text-decoration:underline;font-size:13pt;font-family:Times;color:#000000">Tri Susilo Witanto</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:8.47in;left:1.3in;width:2.07in;line-height:0.20in;"><span style="font-style:normal;font-weight:bold;font-size:13pt;font-family:Times;color:#000000">NIP. </span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:6.94in;left:6.98in;width:0.83in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Pemohon</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:8.27in;left:6.6in;width:2.07in;line-height:0.20in;"><span style="font-style:normal;font-weight:bold;text-decoration:underline;font-size:13pt;font-family:Times;color:#000000">{{ $data->Nama }} </span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:8.47in;left:6.5in;width:2.07in;line-height:0.20in;"><span style="font-style:normal;font-weight:bold;font-size:13pt;font-family:Times;color:#000000">NIM. {{ $data->NIM }} </span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:9.04in;left:4.2in;width:3.83in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Mengetahui,</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:9.29in;left:3.32in;width:3.83in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Ketua Departemen Teknik Komputer</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:9.54in;left:3.20in;width:3.83in;line-height:0.20in;"><span style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000">Fakultas Teknik Universitas Diponegoro</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <div style="position:absolute;top:10.77in;left:3.21in;width:3.83in;line-height:0.20in;"><span style="font-style:normal;font-weight:bold;text-decoration:underline;font-size:13pt;font-family:Times;color:#000000">Dr. Adian Fatchur Rochim, S.T., M.T.</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000"><Strong> </span><br/></SPAN></div>
                <div style="position:absolute;top:11.00in;left:3.55in;width:2.07in;line-height:0.20in;"><span style="font-style:normal;font-weight:bold;font-size:13pt;font-family:Times;color:#000000">NIP. 197302261998021001</span><span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times;color:#000000"> </span><br/></SPAN></div>
                <span style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
                </body>    
            </tr>
                <tr>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endforeach
    <script type = "text/javascript">
        window.print();
    </script>
    <script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("tanggalwaktu").innerHTML = tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>
</body>

</html>
