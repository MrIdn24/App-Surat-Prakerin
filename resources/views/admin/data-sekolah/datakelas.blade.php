@extends('admin')
@section('judul')
DATA KELAS
@endsection
@section('konten')
<div class="card pt-3">
    
    <div class="card-body">
        <a href="{{ route('admin.data-sekolah.tambahkelas') }}" class="btn btn-primary mb-3 float-md-right"><i class="fas fa-user"></i> Tambah Kelas</a>
        <div class="table-responsive">
            <table class="table table-bordered table-md text-center">
                <thead>
                    <tr class="bg-primary text-white">
                        <th class="text-white">No</th>
                        <th class="text-white">Kelas</th>
                        <th class="text-white">Ruangan</th>
                        <th class="text-white">Luas</th>
                        <th class="text-white">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kelas as $no => $item)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $item->kelas }}</td>
                        <td>{{ $item->ruangan }}</td>
                        <td>{{ $item->luas }}</td>
                        <td>
                            <a href="{{ route('admin.data-sekolah.editkelas', ['id'=>$item->id]) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.data-sekolah.hapuskelas', ['id' => $item->id]) }}" method="POST">
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
    <div class="breadcrumb-item">Data Kelas</div>
</div>
@endsection
