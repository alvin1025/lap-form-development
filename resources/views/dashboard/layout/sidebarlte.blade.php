<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboardUtama" class="brand-link">
        <img src="{{ asset('../img/default.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">LUCKY PRINT ABADI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline mt-3">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              
                <li class="nav-header text-center">MENU</li>
                @can('permohonan_promosi_access')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-friends"></i>
                            {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                            <p>
                                HR
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/dashboard/hr/promosi"
                                    class="nav-link {{ Request::is('/dashboard/hr/promosi*') ? 'active' : '' }}">
                                    <p>Permohonan Promosi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/hr/kecelakaan"
                                    class="nav-link {{ Request::is('/dashboard/hr/kecelakaan*') ? 'active' : '' }}">
                                    <p>Laporan Kecelakaan Kerja</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/hr/meninggalkan"
                                    class="nav-link {{ Request::is('/dashboard/hr/meninggalkan*') ? 'active' : '' }}">
                                    <p>Permohonan Meninggalkan Tempat Kerja</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/hr/kartu"
                                    class="nav-link {{ Request::is('/dashboard/hr/kartu*') ? 'active' : '' }}">
                                    <p>Permohonan Pembuatan Kartu</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/hr/shift"
                                    class="nav-link {{ Request::is('/dashboard/hr/shift*') ? 'active' : '' }}">
                                    <p>Permohonan Tukar Shift</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/hr/undangan"
                                    class="nav-link {{ Request::is('/dashboard/hr/undangan*') ? 'active' : '' }}">
                                    <p>Undangan Hubungan Kerja</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/hr/pemanggilan"
                                    class="nav-link {{ Request::is('/dashboard/hr/pemanggilan*') ? 'active' : '' }}">
                                    <p>Surat Pemanggilan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/hr/peringatan"
                                    class="nav-link {{ Request::is('/dashboard/hr/peringatan*') ? 'active' : '' }}">
                                    <p>Surat Peringatan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/hr/denda"
                                    class="nav-link {{ Request::is('/dashboard/hr/denda*') ? 'active' : '' }}">
                                    <p>Surat Denda</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/hr/dokter"
                                    class="nav-link {{ Request::is('/dashboard/hr/dokter*') ? 'active' : '' }}">
                                    <p>Surat Periksa Dokter</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/hr/karyawanBaru"
                                    class="nav-link {{ Request::is('/dashboard/hr/karyawanBaru*') ? 'active' : '' }}">
                                    <p>Pengantar Karyawan Baru</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/hr/instruktur"
                                    class="nav-link {{ Request::is('/dashboard/hr/instruktur*') ? 'active' : '' }}">
                                    <p>Instruktur Training</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan



                {{-- Marketing --}}
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Marketing
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="/dashboard/formrequest"
                                class="nav-link {{ Request::is('dashboard/formrequest*') ? 'active' : '' }}">
                                <p>Form Req Dev (MKT)</p>
                            </a>
                        </li>
                        <li class="nav-item }">
                            <a href="/dashboard/sales"
                                class="nav-link {{ Request::is('dashboard/sales*') ? 'active' : '' }}">
                                <p>Form Dev Req (Sales)</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}

                {{-- QARD --}}
                {{-- <li class="nav-item"> --}}
                {{-- <a href="#" class="nav-link"> --}}
                {{-- <i class="nav-icon fas fa-vials"></i> --}}
                {{-- <i class="nav-icon fas fa-tree"></i> --}}
                {{-- <p>
                            QARD
                            <i class="fas fa-angle-left right"></i>
                        </p> --}}
                {{-- </a> --}}
                {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard/qard"
                                class="nav-link {{ Request::is('dashboard/qard*') ? 'active' : '' }}">
                                <p>Dev Report (QARD)</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/ws03"
                                class="nav-link {{ Request::is('dashboard/ws03*') ? 'active' : '' }}"">
                                <p>WS 03</p>
                            </a>
                        </li>
                        <li class=" nav-item">
                                <a href="/dashboard/ws05"
                                    class="nav-link {{ Request::is('dashboard/ws05*') ? 'active' : '' }}">
                                    <p>WS 05</p>
                                </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/test-benang"
                                class="nav-link {{ Request::is('dashboard/test-benang*') ? 'active' : '' }}">
                                <p>Test Benang</p>
                            </a>
                        </li>
                    </ul> --}}
                {{-- </li> --}}

                {{-- BCI --}}
                {{-- <li class="nav-item"> --}}
                {{-- <a href="#" class="nav-link">
                        <i class="nav-icon fab fa-yandex-international"></i>
                        <p>
                            BCI
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a> --}}
                {{-- <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="/dashboard/bci"
                                class="nav-link {{ Request::is('dashboard/bci*') ? 'active' : '' }}">
                                <p>Form Hasil Test Benang</p>
                            </a>
                        </li>
                    </ul> --}}
                {{-- </li> --}}
                {{-- <li class="nav-item }">
                    <a href="/dashboard/salesFolder/inputan"
                        class="nav-link {{ Request::is('/dashboard/salesFolder/inputan*') ? 'active' : '' }}">
                        <p>Customer</p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="/dashboard/salesFolder/info/kd2"
                        class="nav-link {{ Request::is('/dashboard/salesFolder/info/kd2*') ? 'active' : '' }}">
                        <p>All Customer</p>
                    </a>
                </li>
                @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE')
                    
                <li class="nav-item">
                    <a href="{{ route('kd3.create') }}"
                        class="nav-link {{ Request::is('/dashboard/salesFolder/kd2*') ? 'active' : '' }}">
                        <p>New Customer</p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="/dashboard/salesFolder/kd2"
                        class="nav-link {{ Request::is('/dashboard/salesFolder/kd2*') ? 'active' : '' }}">
                        <p>Outstanding</p>
                    </a>
                </li>
                

                {{-- <li class="nav-item">
                    <a href="{{ route('kd3outindex') }}"
                        class="nav-link">
                        <p>Outstanding Customer</p>
                    </a>
                </li> --}}
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p style="font-size: 13px">
                            Authorize Customer
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="{{ Route('belumSelesai') }}"
                                class="nav-link {{ Request::is('/dashboard/mis/settings/assiociation*') ? 'active' : '' }}">
                                <p>Belum Selesai</p>
                                {{-- <span class="badge badge-info right">{{ $belum }}</span> --}}
                            </a>
                        </li>
                        
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="{{ route('submitDM') }}"
                                class="nav-link {{ Request::is('/dashboard/mis/settings/assiociation*') ? 'active' : '' }}">
                                <p>Autorisasi DM</p>
                               @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES")  
                               <span class="badge badge-info right">{{ $dm }}</span>
                               @endif
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="{{ route('submitGM') }}"
                                class="nav-link {{ Request::is('/dashboard/mis/settings/assiociation*') ? 'active' : '' }}">
                                <p>Autorisasi GM</p>
                                @if (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA")
                                <span class="badge badge-info right">{{ $gm }}</span>
                                @endif
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="{{ route('submitDMFinance') }}"
                                class="nav-link {{ Request::is('/dashboard/mis/settings/assiociation*') ? 'active' : '' }}">
                                <p>Autorisasi DM Finance</p>
                                @if (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager')   
                                <span class="badge badge-info right">{{ $dmFin }}</span>
                                @endif
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="{{ route('submitGMFinance') }}"
                                class="nav-link {{ Request::is('/dashboard/mis/settings/assiociation*') ? 'active' : '' }}">
                                <p>Autorisasi GM Finance</p>
                                @if (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi')
                                    
                                <span class="badge badge-info right">{{ $gmFin }}</span>
                                @endif
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="{{ route('submitDocControl') }}"
                                class="nav-link {{ Request::is('/dashboard/mis/settings/assiociation*') ? 'active' : '' }}">
                                <p>Autorisasi Doc Control</p>
                                @if (auth()->user()->division == 'INTERNAL AUDIT')
                                    
                                <span class="badge badge-info right">{{ $doc }}</span>
                                @endif
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="{{ route('submitFinish') }}"
                                class="nav-link {{ Request::is('/dashboard/mis/settings/assiociation*') ? 'active' : '' }}">
                                <p>Finish Customer</p>
                                {{-- @if (auth()->user()->division == 'INTERNAL AUDIT')
                                    
                                <span class="badge badge-info right">{{ $doc }}</span>
                                @endif --}}
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="{{ route('reject') }}"
                                class="nav-link {{ Request::is('/dashboard/mis/settings/assiociation*') ? 'active' : '' }}">
                                <p>Rejected Customer</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item }">
                    <a href="/settings/{{ auth()->user()->id }}/edit" class="nav-link">
                        <p>Change Password</p>
                    </a>
                </li> --}}

                {{-- Sales --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>
                            Master Sales
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="/dashboard/sales"
                                class="nav-link {{ Request::is('dashboard/sales*') ? 'active' : '' }}">
                                <p>Form Dev Req (Sales)</p>
                            </a>
                        </li>
                    </ul> --}}
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="/dashboard/salesFolder/creditBaru"
                                class="nav-link {{ Request::is('/dashboard/salesFolder/creditBaru*') ? 'active' : '' }}">
                                <p>Credit Limit & Term Baru</p>
                            </a>
                        </li>
                    </ul> --}}
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="/dashboard/salesFolder/credit"
                                class="nav-link {{ Request::is('/dashboard/salesFolder/credit*') ? 'active' : '' }}">
                                <p>Permohonan Ubah Credit Limit & Term</p>
                            </a>
                        </li>
                    </ul> --}}
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="/dashboard/salesFolder/customer"
                                class="nav-link {{ Request::is('/dashboard/salesFolder/customer*') ? 'active' : '' }}">
                                <p>Permintaan Input dan Ubah Data Customer</p>
                            </a>
                        </li>
                    </ul> --}}
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="/dashboard/mis/settings/assiociation"
                                class="nav-link {{ Request::is('/dashboard/mis/settings/assiociation*') ? 'active' : '' }}">
                                <p>Association</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard/mis/settings/sg"
                                class="nav-link {{ Request::is('/dashboard/mis/settings/sg*') ? 'active' : '' }}">
                                <p>SG</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard/mis/settings/agentmaster"
                                class="nav-link {{ Request::is('/dashboard/mis/settings/agentmaster*') ? 'active' : '' }}">
                                <p>Agent</p>
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item }">
                    <a href="/dashboard/salesFolder/change/request"
                        class="nav-link {{ Request::is('/dashboard/salesFolder/change/request*') ? 'active' : '' }}">
                        <p>Request Modify Customer</p>
                    </a>
                </li>
                {{-- MIS --}}
                @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-laptop-code"></i>
                            <p>
                                MIS
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item }">
                                <a href="/dashboard/register"
                                    class="nav-link {{ Request::is('/dashboard/register*') ? 'active' : '' }}">
                                    <p>User</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/dashboard/mis/settings/BReason"
                                    class="nav-link {{ Request::is('/dashboard/mis/settings/BReason*') ? 'active' : '' }}">
                                    <p>Block Reason</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/dashboard/salesFolder/kd3"
                                    class="nav-link {{ Request::is('/dashboard/salesFolder/kd3*') ? 'active' : '' }}">
                                    <p>Kd03</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/dashboard/salesFolder/kd4"
                                    class="nav-link {{ Request::is('/dashboard/salesFolder/kd4*') ? 'active' : '' }}">
                                    <p>Kd04</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/dashboard/salesFolder/kd5"
                                    class="nav-link {{ Request::is('/dashboard/salesFolder/kd5*') ? 'active' : '' }}">
                                    <p>Kd05</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/dashboard/salesFolder/kd6"
                                    class="nav-link {{ Request::is('/dashboard/salesFolder/kd6*') ? 'active' : '' }}">
                                    <p>Kd06</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/dashboard/salesFolder/kd11"
                                    class="nav-link {{ Request::is('/dashboard/salesFolder/kd11*') ? 'active' : '' }}">
                                    <p>Kd11</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/dashboard/salesFolder/kd14"
                                    class="nav-link {{ Request::is('/dashboard/salesFolder/kd14*') ? 'active' : '' }}">
                                    <p>Kd14</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-wrench"></i>
                                    <p>
                                        SETTINGS
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/title"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/title*') ? 'active' : '' }}">
                                            <p>Title</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/classes"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/classes*') ? 'active' : '' }}">
                                            <p>Class</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/negara"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/negara*') ? 'active' : '' }}">
                                            <p>Negara</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/sd"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/sd*') ? 'active' : '' }}">
                                            <p>SD</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/bizType"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/bizType*') ? 'active' : '' }}">
                                            <p>Biz Type</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/tax"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/tax*') ? 'active' : '' }}">
                                            <p>Tax</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/assignment"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/assignment*') ? 'active' : '' }}">
                                            <p>Assignment</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/delcon"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/delcon*') ? 'active' : '' }}">
                                            <p>Del.Con</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/kurs"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/kurs*') ? 'active' : '' }}">
                                            <p>Kurs</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/language"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/language*') ? 'active' : '' }}">
                                            <p>Language Mark</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/paykind"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/paykind*') ? 'active' : '' }}">
                                            <p>Payment Kind</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/agentkind"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/agentkind*') ? 'active' : '' }}">
                                            <p>Agent Kind</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/userGroup"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/userGroup*') ? 'active' : '' }}">
                                            <p>User Group</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/departement"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/departement*') ? 'active' : '' }}">
                                            <p>Departement</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/MenueGroup"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/MenueGroup*') ? 'active' : '' }}">
                                            <p>Menue Group</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/client"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/client*') ? 'active' : '' }}">
                                            <p>Client</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/shipmentKindManagement"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/shipmentKindManagement*') ? 'active' : '' }}">
                                            <p>ShipmentKind Management</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/shipmentKind"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/shipmentKind*') ? 'active' : '' }}">
                                            <p>ShipmentKind</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/keyacc"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/keyacc*') ? 'active' : '' }}">
                                            <p>Key Acc</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/va03"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/va03*') ? 'active' : '' }}">
                                            <p>VA03</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/vs04"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/vs04*') ? 'active' : '' }}">
                                            <p>VS04</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/salesGrade"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/salesGrade*') ? 'active' : '' }}">
                                            <p>Sales Group</p>
                                        </a>
                                    </li>
                                </ul>
                                <hr>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/delivTerm"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/delivTerm*') ? 'active' : '' }}">
                                            <p>Delivery Term</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/quantity"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/quantity*') ? 'active' : '' }}">
                                            <p>Quantity Unit</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/surcharge"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/surcharge*') ? 'active' : '' }}">
                                            <p>Surcharge Type</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/satuan"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/satuan*') ? 'active' : '' }}">
                                            <p>Satuan</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/packing"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/packing*') ? 'active' : '' }}">
                                            <p>Packing</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/cutting"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/cutting*') ? 'active' : '' }}">
                                            <p>Cutting</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/stdSample"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/stdSample*') ? 'active' : '' }}">
                                            <p>Std Sample</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/payTerm"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/payTerm*') ? 'active' : '' }}">
                                            <p>Pay Term</p>
                                        </a>
                                    </li>
                                </ul>
                                <hr>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/jenisBisnis"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/jenisBisnis*') ? 'active' : '' }}">
                                            <p>Jenis Bisnis</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/orientasiMarket"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/orientasiMarket*') ? 'active' : '' }}">
                                            <p>Orirentasi Market</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/kepemilikanKantor"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/kepemilikanKantor*') ? 'active' : '' }}">
                                            <p>Kepemilikan Kantor</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/creditLimit"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/creditLimit*') ? 'active' : '' }}">
                                            <p>Credit Limit Data</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/caraPembayaran"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/caraPembayaran*') ? 'active' : '' }}">
                                            <p>Cara Pembayaran</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/tipePerusahaan"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/tipePerusahaan*') ? 'active' : '' }}">
                                            <p>Tipe Perusahaan</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/country"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/country*') ? 'active' : '' }}">
                                            <p>Kode County</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/clm"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/clm*') ? 'active' : '' }}">
                                            <p>Clm</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/new/agent"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/new/agent*') ? 'active' : '' }}">
                                            <p>Agent</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/sg"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/sg*') ? 'active' : '' }}">
                                            <p>SG</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/pr03"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/pr03*') ? 'active' : '' }}">
                                            <p>PR03</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/pr04"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/pr04*') ? 'active' : '' }}">
                                            <p>PR04</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/mis/settings/pr06"
                                            class="nav-link {{ Request::is('/dashboard/mis/settings/pr06*') ? 'active' : '' }}">
                                            <p>PR06</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                @endif

                {{-- Maintenance --}}
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            Maintenance
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="/dashboard/maintenance/serah-terima"
                                class="nav-link {{ Request::is('/dashboard/maintenance/serah-terima*') ? 'active' : '' }}">
                                <p>Form Serah Terima</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- GA --}}
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-house"></i>
                        <p>
                            GA
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="/dashboard/ga/perintah"
                                class="nav-link {{ Request::is('/dashboard/ga/perintah*') ? 'active' : '' }}">
                                <p>Surat Perintah Kerja</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="/dashboard/ga/anggaran"
                                class="nav-link {{ Request::is('/dashboard/ga/anggaran*') ? 'active' : '' }}">
                                <p>Rencana Anggaran Biaya</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="/dashboard/ga/kebutuhan"
                                class="nav-link {{ Request::is('/dashboard/ga/kebutuhan*') ? 'active' : '' }}">
                                <p>Daftar Kebutuhan Material</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="/dashboard/ga/complain"
                                class="nav-link {{ Request::is('/dashboard/ga/complain*') ? 'active' : '' }}">
                                <p>Complain Service Kantin</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item }">
                            <a href="/dashboard/ga/berobat"
                                class="nav-link {{ Request::is('/dashboard/ga/berobat*') ? 'active' : '' }}">
                                <p>Surat Pengantar Berobat</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}









                {{-- <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/kanban.html" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Kanban Board
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/mailbox/mailbox.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/compose.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/read-mail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/invoice.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/profile.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/e-commerce.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>E-commerce</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/projects.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-add.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-edit.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Edit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-detail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Detail</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/contacts.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contacts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/faq.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>FAQ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/contact-us.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact us</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Extras
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Login & Register v1
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/examples/login.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Login v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/register.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/forgot-password.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Forgot Password v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/recover-password.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Recover Password v1</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Login & Register v2
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/examples/login-v2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Login v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/register-v2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/forgot-password-v2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Forgot Password v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/recover-password-v2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Recover Password v2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/lockscreen.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lockscreen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Legacy User Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/language-menu.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Language Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/404.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 404</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/500.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 500</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/pace.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pace</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/blank.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blank Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="starter.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Starter Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-search"></i>
                        <p>
                            Search
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/search/simple.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Search</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/search/enhanced.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Enhanced</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">MISCELLANEOUS</li>
                <li class="nav-item">
                    <a href="iframe.html" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>Tabbed IFrame Plugin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Documentation</p>
                    </a>
                </li>
                <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Level 1
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Level 2
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                    </a>
                </li>
                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
