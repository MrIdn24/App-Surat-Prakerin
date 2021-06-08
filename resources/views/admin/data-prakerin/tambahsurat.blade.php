@extends('admin')
@section('judul')
INPUT DATA SURAT
@endsection
@section('konten')
<div class="card pt-3">
    <div class="card-body">
      <h2 class="text-center">INPUT DATA SURAT</h2>
        <div class="table-responsive">
            <div class="card">
                <form action="{{ route('admin.data-prakerin.storesurat') }}" method="POST">
                    @csrf
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Isi Ringkasan File</label>
                        <div class="col-sm-9">
                          <input type="text" name="isi" class="form-control" required="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Asal Surat</label>
                        <div class="col-sm-9">
                          <input type="text" name="asal" class="form-control" required="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">No Surat & Tanggal Surat</label>
                        <div class="col-sm-9">
                          <input type="text" name="no" class="form-control" required="">
                        </div>
                      </div>
                  <div class="card-footer">
                    <a href="{{ route('admin.data-prakerin.datasurat') }}" class="btn btn-danger me-5">Batal</a>
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
    <div class="breadcrumb-item">Data Sekolah</div>
    <div class="breadcrumb-item">Tambah Surat</div>
</div>
@endsection
