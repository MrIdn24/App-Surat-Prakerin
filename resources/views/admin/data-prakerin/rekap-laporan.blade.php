@extends('admin')
@section('judul')
Rekap Laporan Siswa
@endsection
@section('konten')
<div class="card pt-3">
    <div class="card-body">
        @if ($message = Session::get('notif'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif
        <a href="{{ route('admin.data-prakerin.tambah-lapor') }}" class="btn btn-primary mb-3 float-md-right"><i class="fas fa-user"></i>Tambah Data</a>
        <div class="table-responsive">
            <table class="table table-bordered table-md text-center">
                <tr class="bg-primary text-white">
                    <th>#</th>
                    <th>Hari/Tanggal</th>
                    <th>Tempat Kegiatan</th>
                    <th>Jenis Kegiatan</th>
                    <th>Waktu</th>
                    <th>Action</th>
                </tr>
                @foreach ($lapor as $no => $lpr)
                <tr>
                    <th>{{ ++$no }}</th>
                    <th>{{ $lpr->tanggal }}</th>
                    <th>{{ $lpr->tempat }}</th>
                    <th>{{ $lpr->jenis }}</th>
                    <th>{{ $lpr->waktu }}</th>
                    <th>
                        <div class="btn-group">
                            <a href="{{ route('admin.data-prakerin.edit-lapor', ['id'=>$lpr->id]) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.data-prakerin.delete-lapor', ['id'=>$lpr->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('yakin hapus?')">Hapus</button>
                            </form>
                        </div>
                    </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="card-footer text-right">
        <nav class="d-inline-block">
            <ul class="pagination mb-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item">Data Prakerin</div>
    <div class="breadcrumb-item">Rekap Laporan Siswa</div>
</div>
@endsection
