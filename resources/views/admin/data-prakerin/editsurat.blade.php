@extends('admin')
@section('judul')
EDIT DATA SURAT
@endsection
@section('konten')
<div class="card pt-3">
    <div class="card-body">
        <div class="table-responsive">
            <div class="card">
                <form action="{{ route('admin.data-prakerin.updatesurat', ['id' => $surat->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label>Isi Ringkasan File</label>
                      <input type="text" name="nama" class="form-control" required="" value="{{ $surat->isi }}">
                    </div>
                    <div class="form-group">
                      <label>Asal Surat</label>
                      <input type="text" name="asal" class="form-control" required="" value="{{ $surat->asal }}">
                    </div>
                    <div class="form-group">
                      <label>No Surat & Tanggal Surat</label>
                      <input type="text" name="no" class="form-control" required="" value="{{ $surat->no }}">
                    </div>
                  </div>
                  <div class="card-footer">
                    <a href="{{ route('admin.data-prakerin.datasurat') }}" class="btn btn-danger">Batal</a>
                    <button class="btn btn-success float-right">Submit</button>
                  </div>
                </form>
              </div>
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
    <div class="breadcrumb-item">Edit Kelas</div>
</div>
@endsection