@extends('admin')
@section('judul')
INPUT DATA SISWA
@endsection
@section('konten')
<div class="card pt-3">
    <div class="card-body">
      <h2 class="text-center">INPUT DATA SISWA</h2>
        <div class="table-responsive">
            <div class="card">
                <form action="{{ route('admin.data-sekolah.storesiswa') }}" method="POST">
                    @csrf
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama" class="form-control" required="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kelas</label>
                        <div class="col-sm-9">
                          <input type="text" name="kelas" class="form-control" required="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                          <input type="text" name="jk" class="form-control" required="">
                        </div>
                      </div>
                  <div class="card-footer">
                    <a href="{{ route('admin.data-sekolah.datasiswa') }}" class="btn btn-danger me-5">Batal</a>
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
    <div class="breadcrumb-item">Tambah Siswa</div>
</div>
@endsection
