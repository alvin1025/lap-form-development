<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                    href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            @if (auth()->user()->division == 'MARKETING' || auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/formrequest*') ? 'active' : '' }}"
                        href="/dashboard/formrequest">
                        <span data-feather="file"></span>
                        Form Req Dev (MKT)
                    </a>
                </li>
            @endif

            @if (auth()->user()->division == 'COMMERCE YARN & GREIGE' || auth()->user()->division == 'FABRIC SALES' || auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/sales*') ? 'active' : '' }}" href="/dashboard/sales">
                        <span data-feather="file"></span>
                        Form Dev Req (Sales)
                    </a>
                </li>
            @endif

            @if (auth()->user()->division == 'PRODUKSI & QARD SPINNING' || auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/bci*') ? 'active' : '' }}" href="/dashboard/bci">
                        <span data-feather="file"></span>
                        BCI
                    </a>
                </li>
            @endif
            @if (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/register*') ? 'active' : '' }}"
                        href="/dashboard/register">
                        <span data-feather="user-plus"></span>
                        Register
                    </a>
                </li>
            @endif


            @if (auth()->user()->division == 'QARD' || auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/qard*') ? 'active' : '' }}" href="/dashboard/qard">
                        <span data-feather="file"></span>
                        Dev Report (QARD)
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/ws03*') ? 'active' : '' }}" href="/dashboard/ws03">
                        <span data-feather="file"></span>
                        Update ws03
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/ws05*') ? 'active' : '' }}" href="/dashboard/ws05">
                        <span data-feather="file"></span>
                        Update ws05
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/test-benang*') ? 'active' : '' }}"
                        href="/dashboard/test-benang">
                        <span data-feather="file"></span>
                        Test Benang
                    </a>
                </li>
            @endif


            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/hr/promosi*') ? 'active' : '' }}"
                    href="/dashboard/hr/promosi">
                    <span data-feather="file"></span>
                    Permohonan Promosi
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/hr/kecelakaan*') ? 'active' : '' }}"
                    href="/dashboard/hr/kecelakaan">
                    <span data-feather="file"></span>
                    Laporan Kecelakaan Kerja
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/hr/meninggalkan*') ? 'active' : '' }}"
                    href="/dashboard/hr/meninggalkan">
                    <span data-feather="file"></span>
                    Permohonan Meninggalkan Tempat Kerja
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/hr/kartu*') ? 'active' : '' }}"
                    href="/dashboard/hr/kartu">
                    <span data-feather="file"></span>
                    Permohonan Pembuatan Kartu
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/hr/shift*') ? 'active' : '' }}"
                    href="/dashboard/hr/shift">
                    <span data-feather="file"></span>
                    Permohonan Tukar Shift
                </a>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/hr/undangan*') ? 'active' : '' }}"
                    href="/dashboard/hr/undangan">
                    <span data-feather="file"></span>
                    Undangan Hubungan Kerja
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/hr/pemanggilan*') ? 'active' : '' }}"
                    href="/dashboard/hr/pemanggilan">
                    <span data-feather="file"></span>
                    Surat Pemanggilan
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/hr/peringatan*') ? 'active' : '' }}"
                    href="/dashboard/hr/peringatan">
                    <span data-feather="file"></span>
                    Surat Peringatan
                </a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/hr/denda*') ? 'active' : '' }}"
                    href="/dashboard/hr/denda">
                    <span data-feather="file"></span>
                    Surat Denda
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/hr/dokter*') ? 'active' : '' }}"
                    href="/dashboard/hr/dokter">
                    <span data-feather="file"></span>
                    Surat Periksa Dokter
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/hr/karyawanBaru*') ? 'active' : '' }}"
                    href="/dashboard/hr/karyawanBaru">
                    <span data-feather="file"></span>
                    Pengantar Karyawan Baru
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/hr/instruktur*') ? 'active' : '' }}"
                    href="/dashboard/hr/instruktur">
                    <span data-feather="file"></span>
                    Instruktur Training
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/maintenance/serah-terima*') ? 'active' : '' }}"
                    href="/dashboard/maintenance/serah-terima">
                    <span data-feather="file"></span>
                    Serah Terima
                </a>
            </li>
    </div>
</nav>
