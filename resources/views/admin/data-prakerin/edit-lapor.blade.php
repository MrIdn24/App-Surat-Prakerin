@extends('admin')
@section('judul')
Edit Data Laporan
@endsection
@section('konten')
<div class="card pt-3">
    <div class="card-body">
       <h2 class="text-center">EDIT DATA LAPORAN</h2>
        <div class="table-responsive">
            <div class="card">
                <form action="{{ route('admin.data-prakerin.update-lapor', ['id'=>$lapor->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-9">
                          <input type="date" name="tanggal" class="form-control" value="{{ $lapor->tanggal }}" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tempat Kegiatan</label>
                        <div class="col-sm-9">
                          <input type="text" name="tempat" class="form-control" value="{{ $lapor->tempat }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Kegiatan</label>
                        <div class="col-sm-9">
                          <input type="text" name="jenis" class="form-control" value="{{ $lapor->jenis }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Waktu</label>
                        <div class="col-sm-9">
                          <input type="time" name="waktu" class="form-control" value="{{ $lapor->waktu }}">
                        </div>
                      </div>
                  <div class="card-footer">
                    <a href="{{ route('admin.data-prakerin.rekap-lapor') }}" class="btn btn-danger me-5">Batal</a>
                    <button class="btn btn-success float-right">Submit</button>
                  </div>
                </form>
              </div>
        </div>
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
