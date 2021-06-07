@extends('admin')
@section('judul')
DATA SISWA
@endsection
@section('konten')
<div class="card pt-3">
    <div class="card-body">
        <a href="{{ route('admin.data-sekolah.tambahsiswa') }}" class="btn btn-primary mb-3 float-md-right"><i class="fas fa-user"></i>Tambah Siswa</a>
        @if ($message = Session::get('notif'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-md text-center">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white">No</th>
                        <th class="text-white">Nama</th>
                        <th class="text-white">Kelas</th>
                        <th class="text-white">Jenis Kelamin</th>
                        <th class="text-white">Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($siswa as $no => $sis)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $sis->nama }}</td>
                            <td>{{ $sis->kelas }}</td>
                            <td>{{ $sis->jk }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.data-sekolah.editsiswa', ['id'=>$sis->id]) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.data-sekolah.hapussiswa', ['id' => $sis->id]) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin hapus?')">Hapus</button>
                                    </form>
                                    
                                </div>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
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
    <div class="breadcrumb-item aktif"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item">Data Sekolah</div>
    <div class="breadcrumb-item">Data Siswa</div>
</div>
@endsection
