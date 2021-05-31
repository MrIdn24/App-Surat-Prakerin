@extends('admin')
@section('judul')
List Pengajuan
@endsection
@section('konten')
<div class="card pt-3">
    <div class="card-body">
        <button class="btn btn-primary mb-3 float-md-right"><i class="fas fa-user"></i> Tambah Data</button>
        <div class="table-responsive">
            <table class="table table-bordered table-md text-center">
                <tr class="bg-primary text-white">
                    <th>#</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>No Surat</th>
                    <th>Perihal Surat</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
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
    <div class="breadcrumb-item">List Pengajuan</div>
</div>
@endsection
