@extends('admin')
@section('judul')
DATA SURAT
@endsection
@section('konten')
<div class="card pt-3">
    <div class="card-body">
        <a href="{{ route('admin.data-prakerin.tambahsurat') }}" class="btn btn-primary mb-3 float-md-right"><i class="fas fa-user"></i>Tambah Surat</a>
        <div class="table-responsive">
            <table class="table table-bordered table-md text-center">
                <thead>
                    <tr class="bg-primary text-white">
                        <th class="text-white">No</th>
                        <th class="text-white">Isi Ringkasan File</th>
                        <th class="text-white">Asal Surat</th>
                        <th class="text-white">No Surat & Tanggal Surat</th>
                        <th class="text-white">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surat as $no => $srt)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $srt->isi }}</td>
                        <td>{{ $srt->asal }}</td>
                        <td>{{ $srt->no }}</td>
                        <td>
                            <a href="{{ route('admin.data-prakerin.editsurat', ['id'=>$srt->id]) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.data-prakerin.hapussurat', ['id' => $srt->id]) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            
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
    <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item">Data Sekolah</div>
    <div class="breadcrumb-item">Data Surat</div>
</div>
@endsection
