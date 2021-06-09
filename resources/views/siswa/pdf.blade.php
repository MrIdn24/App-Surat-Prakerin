<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Libraries -->
    <title>Surat Prakerin</title>
</head>

<body>
    <div class="container mt-3">
        {{-- <div class="row justify-content-md-center">
            <div class="col-md-3">
                <img src="{{ asset('assets/img/tb.png') }}" height="180">
            </div>
            <div class="col-md-7 mt-4 text-center">
                <h3>YAYASAN SETYA BHAKTI</h3>
                <h1 class="font-weight-bold">SMK TARUNA BHAKTI</h1>
                <p class="font-weight-bold" style="line-height: 0">TERAKREDITASI "A" No: 02.00/375/BAP-SM/XI/2008</p>
                <p class="font-weight-bold" style="line-height: 0">Izin No:421.4/1150/DISDIK/2004-NPSN : 20229232</p>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-3"></div>
                <div class="col-md-7">
                    <p class="text-uppercase text-center">
                BIDANG STUDI KEAHLIAN TEKnologi informasi dan komunikasi program studi keahlian teknik komputer dan informatika kompetisi keahlian:
                    teknik informatika dan jaringan,multimedia,rpl,bc,tei
            </p>
                </div>
            </div>
        </div> 
       <div class="text-center">
            <p>Jln. Pekapuran Kel. Curug - Kec. Cimanggis Depo Kode Pos 16953 Telp (021)8744810</p>
            <p class="font-weight-bold">Website: <a href="https://www.smktarunabhakti.net" target="_blank">https://www.smktarunabhakti.net</a> /E-mail: <a href="taruna@smktarunabhakti.net" target="_blank">taruna@smktarunabhakti.net</a></p>
       </div>
       <div style="border: 5px solid black"></div>
       {{-- isi --}}
       {{-- <div class="mt-2 ml-3">
            No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $surat->no_surat }}
            <br>
            Lamp.&nbsp;&nbsp;&nbsp;&nbsp; : - <br>
            Hal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <u>Permohonan Prakerin</u> <br>
       </div> --}}
       <table class="table" border="1">
           <tr>
               {{-- <th>Nama</th> --}}
               <th>No. Surat</th>
               <th>Lampiran</th>
               <th>Keterangan</th>
           </tr>
           <tr>
               {{-- <th>{{ $surat->nama }}</th> --}}
               <th class="text-uppercase">{{  0 . $no . $surat->no_surat }}
            </th>
               <th>
                   <img src="{{ asset('img/'.$surat->lampiran) }}" height="100">
               </th>
               <th>{{ $surat->keterangan }}</th>
           </tr>
       </table>
    </div>
</body>

</html>
