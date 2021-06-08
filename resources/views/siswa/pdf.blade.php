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
    <div class="form-group mt-5 pt-5">
        <table class="static" align="center" border="1" style="width: 95%">
        <tr class="text-center">
            <th>Nama</th>
            <th>No. Surat</th>
            <th>Keterangan</th>
            <th>Lampiran</th>
        </tr>
        @foreach ($surat as $sr)
        <tr class="text-center">
            <th>{{ $sr->nama }}</th>
            <th>{{ $sr->no_surat }}</th>
            <th>{{ $sr->keterangan }}</th>
            <th>
                <img src="{{ asset('img/'.$sr->lampiran) }}" height="200">
            </th>
        </tr>
        @endforeach
    </table>
    </div>
</body>

</html>
