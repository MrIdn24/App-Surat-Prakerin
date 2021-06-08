<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Nyurat</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">NYT</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="/home" class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Data Umum</li>
            @if (Auth::check())
            {{-- Side Admin --}}
            @if (Auth::user()->role == 'admin')
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-graduation-cap"></i><span>Data
                        Sekolah</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link active" href="/home/datasiswa">Data Siswa</a></li>
                    <li><a class="nav-link" href="/home/datapetugas">Data Petugas</a></li>
                    <li><a class="nav-link" href="/home/datakelas">Data Kelas</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-pie"></i><span>Data Prakerin</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link active" href="/home/datasurat">Data Surat</a></li>
                    <li><a class="nav-link active" href="/home/list-pengajuan">List Pengajuan</a></li>
                    <li><a class="nav-link active" href="/home/rekap-laporan">Rekap Laporan Siswa</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-envelope"></i><span>Kelola Surat</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/home/disposisi-surat-masuk">Disposisi Surat Masuk</a></li>
                    <li><a class="nav-link" href="/home/ekspedisi-rekap-surat">Ekspedisi Rekap Surat</a></li>
                </ul>
            </li>
            @endif

            {{-- Side TU --}}
            @if (Auth::user()->role == 'tu')
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-pie"></i><span>Data Prakerin</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link active" href="/home/list-pengajuan">List Pengajuan</a></li>
                    <li><a class="nav-link active" href="/home/rekap-laporan">Rekap Laporan Siswa</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-envelope"></i><span>Kelola Surat</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/home/disposisi-surat-masuk">Disposisi Surat Masuk</a></li>
                    <li><a class="nav-link" href="/home/ekspedisi-rekap-surat">Ekspedisi Rekap Surat</a></li>
                </ul>
            </li>
            @endif

            {{-- Side Siswa --}}
            @if (Auth::user()->role == 'siswa')
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-pie"></i><span>Data Prakerin</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link active" href="/home/entri-transaksi">Entri Transaksi Pengajuan</a></li>
                    <li><a class="nav-link active" href="/home/cetak-surat">Cetak Surat Prakerin</a></li>
                    <li><a class="nav-link active" href="/home/rekap-laporan">Rekap Laporan Siswa</a></li>
                </ul>
            </li>
            @endif

        {{-- Side kaprog --}}
            @if (Auth::user()->role == 'kaprog')
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-pie"></i><span>Data Prakerin</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link active" href="/home/list-pengajuan">List Pengajuan</a></li>
                    <li><a class="nav-link active" href="/home/rekap-laporan">Rekap Laporan Siswa</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-envelope"></i><span>Kelola Surat</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/home/disposisi-surat-masuk">Disposisi Surat Masuk</a></li>
                    <li><a class="nav-link" href="/home/ekspedisi-rekap-surat">Ekspedisi Rekap Surat</a></li>
                </ul>
            </li>
            @endif

            {{-- Side Kepsek --}}
            @if (Auth::user()->role == 'kepsek')
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-pie"></i><span>Data Prakerin</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link active" href="/home/list-pengajuan">List Pengajuan</a></li>
                    <li><a class="nav-link active" href="/home/rekap-laporan">Rekap Laporan Siswa</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-envelope"></i><span>Kelola Surat</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/home/disposisi-surat-masuk">Disposisi Surat Masuk</a></li>
                    <li><a class="nav-link" href="/home/ekspedisi-rekap-surat">Ekspedisi Rekap Surat</a></li>
                    </ @endif @endif </ul> </aside> </div>
