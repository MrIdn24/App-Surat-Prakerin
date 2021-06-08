@extends('admin')
@section('judul')
Cetak Surat Prakerin
@endsection
@section('konten')
<div class="card pt-3">
    <div class="card-body">
      <div class="form-group">
          <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data" target="_blank">
              @csrf
                <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No. Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nosu" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Lampiran Surat</label>
                            <div class="col-sm-9">
                                <input type="file" name="lampiran" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                               <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/home"  class="btn btn-danger me-5">Batal</a>
                            <button class="btn btn-success float-right">Print PDF <i class="fas fa-file-pdf"></i> </button>
                        </div>
                      </div>
          </form>
      </div>
    </div>
</div>
@endsection
@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item">Data Prakerin</div>
    <div class="breadcrumb-item">Cetak Surat Prakerin</div>
</div>
@endsection
