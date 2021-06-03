@extends('admin')
@section('judul')
Dashboard
@endsection
@section('konten')
<style>
    a:hover{
        text-decoration: none;
    }
</style>
@if (Auth::user()->role == 'admin')
<div class="container pt-2 pl-5">
    <h2 class="text-capitalize">Wellcome, {{Auth::user()->name}}({{Auth::user()->role}})</h2>
</div>
<div class="row justify-content-md-around pt-3 mt-5">
    @else

    <div class="row justify-content-md-start ml-5 pt-3 mt-5">
        @endif

        @if (Auth::user()->role == 'admin')
        <div class="col-md-3">
            <a href="/home/data-siswa">
                <div class="card bg-primary btn-primary">
                    <div class="card-body text-center">
                        <i class="fa fa-graduation-cap display-1"></i>
                    </div>
                    <div class="card-footer bg-white text-dark text-center">
                        <h4>Data Sekolah</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="/home/list-pengajuan">
                <div class="card bg-primary btn-primary">
                    <div class="card-body text-center">
                        <i class="fa fa-chart-pie display-1"></i>
                    </div>
                    <div class="card-footer bg-white text-dark text-center">
                        <h4>Data Prakerin</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="/home/disposisi-surat-masuk">
                <div class="card bg-primary btn-primary">
                    <div class="card-body text-center">
                        <i class="fa fa-envelope display-1"></i>
                    </div>
                    <div class="card-footer bg-white text-dark text-center">
                        <h4>Kelola Surat</h4>
                    </div>
                </div>
            </a>
        </div>
        @endif

@if (Auth::user()->role == 'tu')
        <div class="col-md-3">
            <a href="/home/list-pengajuan">
                <div class="card bg-primary btn-primary">
                    <div class="card-body text-center">
                        <i class="fa fa-chart-pie display-1"></i>
                    </div>
                    <div class="card-footer bg-white text-dark text-center">
                        <h4>Data Prakerin</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="/home/disposisi-surat-masuk">
                <div class="card bg-primary btn-primary">
                    <div class="card-body text-center">
                        <i class="fa fa-envelope display-1"></i>
                    </div>
                    <div class="card-footer bg-white text-dark text-center">
                        <h4>Kelola Surat</h4>
                    </div>
                </div>
            </a>
        </div>
        @endif

@if (Auth::user()->role == 'hubin')
        <div class="col-md-3">
            <a href="/home/list-pengajuan">
                <div class="card bg-primary btn-primary">
                    <div class="card-body text-center">
                        <i class="fa fa-chart-pie display-1"></i>
                    </div>
                    <div class="card-footer bg-white text-dark text-center">
                        <h4>Data Prakerin</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="/home/disposisi-surat-masuk">
                <div class="card bg-primary btn-primary">
                    <div class="card-body text-center">
                        <i class="fa fa-envelope display-1"></i>
                    </div>
                    <div class="card-footer bg-white text-dark text-center">
                        <h4>Kelola Surat</h4>
                    </div>
                </div>
            </a>
        </div>
        @endif


        @if (Auth::user()->role == 'siswa')
        <div class="col-md-3">
            <a href="/home/list-pengajuan">
                <div class="card bg-primary btn-primary">
                    <div class="card-body text-center">
                        <i class="fa fa-chart-pie display-1"></i>
                    </div>
                    <div class="card-footer bg-white text-dark text-center">
                        <h4>Data Prakerin</h4>
                    </div>
                </div>
            </a>
        </div>
        @endif

        @if (Auth::user()->role == 'kaprog')
        <div class="col-md-3">
            <a href="/home/list-pengajuan">
                <div class="card bg-primary btn-primary">
                    <div class="card-body text-center">
                        <i class="fa fa-chart-pie display-1"></i>
                    </div>
                    <div class="card-footer bg-white text-dark text-center">
                        <h4>Data Prakerin</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="/home/disposisi-surat-masuk">
                <div class="card bg-primary btn-primary">
                    <div class="card-body text-center">
                        <i class="fa fa-envelope display-1"></i>
                    </div>
                    <div class="card-footer bg-white text-dark text-center">
                        <h4>Kelola Surat</h4>
                    </div>
                </div>
            </a>
        </div>
        @endif


        @if (Auth::user()->role == 'kepsek')
        <div class="col-md-3">
            <a href="/home/list-pengajuan">
                <div class="card bg-primary btn-primary">
                    <div class="card-body text-center">
                        <i class="fa fa-chart-pie display-1"></i>
                    </div>
                    <div class="card-footer bg-white text-dark text-center">
                        <h4>Data Prakerin</h4>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <a href="/home/disposisi-surat-masuk">
                <div class="card bg-primary btn-primary">
                    <div class="card-body text-center">
                        <i class="fa fa-envelope display-1"></i>
                    </div>
                    <div class="card-footer bg-white text-dark text-center">
                        <h4>Kelola Surat</h4>
                    </div>
                </div>
            </a>
        </div>
        @endif
    </div>
    @endsection
    @section('aktif')
    <li class="nav-item dropdown active">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-graduation-cap"></i><span>Data Sekolah</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link active" href="/home/data-siswa">Data Siswa</a></li>
            <li><a class="nav-link" href="/home/data-petugas">Data Petugas</a></li>
            <li><a class="nav-link" href="/home/data-kelas">Data Kelas</a></li>
        </ul>
    </li>
    @endsection
    @section('breadcrumb')
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item">Dashboard</div>
    </div>
    @endsection
