@extends('dashboard.layout.lte')

@section('title', 'Permohonan Perubahan Credit Limit Dan Credit Term')

@section('content')

    {{-- <form action="{{ route('credit.show') }}" method="post">
        @csrf --}}
    <h4 class="text-center">Permohonan Perubahan Credit Limit Dan Credit Term</h4>
    <hr>

    <div class="d-flex justify-content-between">
        <div class="col-sm-6">
            <div class="row">
                <label class="col-sm-12 col-form-label ">Kepada : Finance Departmen</label>
            </div>
            <div class="row">
                <label class="col-sm-12 col-form-label ">CC</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mt-3 row">
                <input class="form-check-input" type="checkbox" value="Customer Baru" id="defaultCheck1" name="jenis_cust">
                <label class="form-check-label" for="defaultCheck1">
                    Customer Baru
                </label>
            </div>
            <div class="row">
                <input class="form-check-input" type="checkbox" value="Customer Baru" id="defaultCheck1" name="jenis_cust">
                <label class="form-check-label" for="defaultCheck1">
                    Customer Baru
                </label>
            </div>
        </div>
    </div>
    <hr>
    <div class="col-sm-12">
        <label class="col-sm-12 col-form-label ">Bersama ini kami mengajukan permohonan perubahan/customer baru
            atas :</label>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Kode Customer</label>
            </div>
            <div class="col-sm-3">
                <input id="kode_cust" type="text" class="form-control @error('kode_cust') is-invalid @enderror"
                    name="kode_cust" value="{{ $creditBaru->kode_cust }}" readonly />
                @error('kode_cust')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-sm-3">
                <input id="no_cust" type="text" class="form-control @error('no_cust') is-invalid @enderror" name="no_cust"
                    value="{{ $creditBaru->no_cust }}" readonly />
                @error('no_cust')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Nama Customer</label>
            </div>
            <div class="col-sm-6">
                <input id="nama_cust" type="text" class="form-control @error('nama_cust') is-invalid @enderror"
                    name="nama_cust" value="{{ $creditBaru->nama_cust }}" readonly />
                @error('nama_cust')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Contact Person</label>
            </div>
            <div class="col-sm-6">
                <input id="contact_person" type="text" class="form-control @error('contact_person') is-invalid @enderror"
                    name="contact_person" value="{{ $creditBaru->contact_person }}" readonly />
                @error('contact_person')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Alamat</label>
            </div>
            <div class="col-sm-6">
                <textarea id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" cols="30"
                    rows="5" readonly></textarea>
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Perubahan Alamat</label>
            </div>
            <div class="col-sm-6">
                <textarea id="perubahan_alamat" type="text" class="form-control @error('perubahan_alamat') is-invalid @enderror"
                    name="perubahan_alamat" cols="30" rows="5" readonly></textarea>
                @error('perubahan_alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">No Telpon</label>
            </div>
            <div class="col-sm-3">
                <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp"
                    value="{{ $creditBaru->no_telp }}" readonly />
                @error('no_telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-sm-1">
                <label type="text" name="" id="" class="form-label">Fax</label>
            </div>
            <div class="col-sm-2">
                <input id="fax" type="text" class="form-control @error('fax') is-invalid @enderror" name="fax"
                    value="{{ $creditBaru->fax }}" readonly />
                @error('fax')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Jenis Bisnis</label>
            </div>
            <div class="col-sm-3">
                <select class="form-select" aria-label="Default select example" name="jenis_bisnis">
                    <option selected>Pilih..</option>
                    <option value="Wholesale">Wholesale</option>
                    <option value="Manufacturing">Manufacturing</option>
                    <option value="Retailer">Retailer</option>
                </select>
                @error('jenis_bisnis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-sm-1">
                <label type="text" name="" id="" class="form-label">Bidang</label>
            </div>
            <div class="col-sm-2">
                <input id="bidang" type="text" class="form-control @error('bidang') is-invalid @enderror" name="bidang"
                    value="{{ $creditBaru->bidang }}" readonly />
                @error('bidang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Orientasi Market</label>
            </div>
            <div class="col-sm-6">
                <select class="form-select" aria-label="Default select example" name="orientasi_market">
                    <option selected>Pilih..</option>
                    <option value="Export">Export</option>
                    <option value="Lokal">Lokal</option>
                </select>
                @error('orientasi_market')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Type Perusahaan</label>
            </div>
            <div class="col-sm-6">
                <select class="form-select" aria-label="Default select example" name="type_perusahaan">
                    <option selected>Pilih..</option>
                    <option value="PT">PT</option>
                    <option value="CV">CV</option>
                    <option value="Toko">Toko</option>
                </select>
                @error('type_perusahaan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Kepemilikan</label>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row">
            <div class="col-sm-2 mr-3">
                <select class="form-select" aria-label="Default select example" name="kepemilikan">
                    <option selected>Pilih..</option>
                    <option value="Kantor">Kantor</option>
                    <option value="Pabrik">Pabrik</option>
                    <option value="Toko">Toko</option>
                </select>
                @error('kepemilikan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-sm-6">
                <select class="form-select" aria-label="Default select example" name="jenis_kepemilikan">
                    <option selected>Pilih..</option>
                    <option value="Sewa">Sewa</option>
                    <option value="Milik Sendiri">Milik Sendiri</option>
                </select>
                @error('jenis_kepemilikan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label" style="font-size: 12px">Sudah berapa lama di
                    bisnis Textile</label>
            </div>
            <div class="col-sm-3">
                <input id="lama_bisnis" type="text" class="form-control @error('lama_bisnis') is-invalid @enderror"
                    name="lama_bisnis" value="{{ $creditBaru->lama_bisnis }}" readonly />
                @error('lama_bisnis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-sm-1">
                <label type="text" name="" id="" class="form-label">Tahun</label>
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label" style="font-size: 12px">Omzet
                    Perusahaan/Tahun</label>
            </div>
            <div class="col-sm-6">
                <input id="omzet" type="text" class="form-control @error('omzet') is-invalid @enderror" name="omzet"
                    value="{{ $creditBaru->omzet }}" readonly />
                @error('omzet')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Credit Limit</label>
            </div>
            <div class="col-sm-3">
                <select class="form-select" aria-label="Default select example" name="credit_limit">
                    <option selected>Pilih..</option>
                    <option value="IDR">IDR</option>
                    <option value="USD">USD</option>
                </select>
                @error('credit_limit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-sm-1">
                <label type="text" name="" id="" class="form-label" style="font-size: 13px">Berubah Menjadi</label>
            </div>
            <div class="col-sm-2">
                <select class="form-select" aria-label="Default select example" name="credit_limit_berubah">
                    <option selected>Pilih..</option>
                    <option value="IDR">IDR.</option>
                    <option value="USD">USD</option>
                </select>
                @error('credit_limit_berubah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Credit Term</label>
            </div>
            <div class="col-sm-3">
                <select class="form-select" aria-label="Default select example" name="credit_term">
                    <option selected>Pilih..</option>
                    <option value="IDR">IDR</option>
                    <option value="USD">USD</option>
                </select>
                @error('credit_term')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-sm-1">
                <label type="text" name="" id="" class="form-label" style="font-size: 13px">Berubah
                    Menjadi</label>
            </div>
            <div class="col-sm-2">
                <select class="form-select" aria-label="Default select example" name="credit_term_berubah">
                    <option selected>Pilih..</option>
                    <option value="IDR">IDR.</option>
                    <option value="USD">USD</option>
                </select>
                @error('credit_term_berubah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Cara Pembayaran</label>
            </div>
            <div class="col-sm-6">
                <select class="form-select" aria-label="Default select example" name="cara_pembayaran">
                    <option selected>Pilih..</option>
                    <option value="Cash">Cash</option>
                    <option value="Giro">Giro</option>
                    <option value="TT">TT</option>
                </select>
                @error('cara_pembayaran')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-4">
                <label type="text" name="" id="" class="form-label" style="font-size: 12px">Sudah berapa lama di
                    bekerja sama dengan LPA</label>
            </div>
            <div class="col-sm-3 ml-3">
                <input class="form-check-input" type="checkbox" value="Customer Baru" id="defaultCheck1"
                    name="lama_bekerja_dengan_lpa">
                <label class="form-check-label" for="defaultCheck1">
                    Customer Baru
                </label>
            </div>
            <div class="col-sm-1">
                <input id="lama_bekerja_dengan_lpa" type="text"
                    class="form-control @error('lama_bekerja_dengan_lpa') is-invalid @enderror"
                    name="lama_bekerja_dengan_lpa" value="{{ $creditBaru->lama_bekerja_dengan_lpa }}" readonly />
                @error('lama_bekerja_dengan_lpa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-sm-1">
                <label type="text" name="" id="" class="form-label">Tahun</label>
            </div>
        </div>
    </div>

    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label" style="font-size: 14px">Bank
                    Koresponden</label>
            </div>
            <div class="col-sm-3">
                <input id="bank_koresponden1" type="text"
                    class="form-control @error('bank_koresponden1') is-invalid @enderror" name="bank_koresponden1"
                    value="{{ $creditBaru->bank_koresponden1 }}" readonly />
                @error('bank_koresponden1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-sm-3">
                <input id="bank_koresponden2" type="text"
                    class="form-control @error('bank_koresponden2') is-invalid @enderror" name="bank_koresponden2"
                    value="{{ $creditBaru->bank_koresponden2 }}" readonly />
                @error('bank_koresponden2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label" style="font-size: 14px">Data Customer (5
                    Besar)</label>
            </div>
            <div class="col-sm-6">
                <input id="data_cust1" type="text" class="form-control @error('data_cust1') is-invalid @enderror"
                    name="data_cust1" value="{{ $creditBaru->data_cust1 }}" readonly />
                @error('data_cust1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex flex-row mt-1">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label"></label>
            </div>
            <div class="col-sm-6">
                <input id="data_cust2" type="text" class="form-control @error('data_cust2') is-invalid @enderror"
                    name="data_cust2" value="{{ $creditBaru->data_cust2 }}" readonly />
                @error('data_cust2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label"></label>
            </div>
            <div class="col-sm-6">
                <input id="data_cust3" type="text" class="form-control @error('data_cust3') is-invalid @enderror"
                    name="data_cust3" value="{{ $creditBaru->data_cust3 }}" readonly />
                @error('data_cust3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label"></label>
            </div>
            <div class="col-sm-6">
                <input id="data_cust4" type="text" class="form-control @error('data_cust4') is-invalid @enderror"
                    name="data_cust4" value="{{ $creditBaru->data_cust4 }}" readonly />
                @error('data_cust4')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label"></label>
            </div>
            <div class="col-sm-6">
                <input id="data_cust5" type="text" class="form-control @error('data_cust5') is-invalid @enderror"
                    name="data_cust5" value="{{ $creditBaru->data_cust5 }}" readonly />
                @error('data_cust5')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label" style="font-size: 14px">Data Supplier (5
                    Besar)</label>
            </div>
            <div class="col-sm-6">
                <input id="data_supp1" type="text" class="form-control @error('data_supp1') is-invalid @enderror"
                    name="data_supp1" value="{{ $creditBaru->data_supp1 }}" readonly />
                @error('data_supp1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex flex-row mt-1">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label"></label>
            </div>
            <div class="col-sm-6">
                <input id="data_supp2" type="text" class="form-control @error('data_supp2') is-invalid @enderror"
                    name="data_supp2" value="{{ $creditBaru->data_supp2 }}" readonly />
                @error('data_supp2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label"></label>
            </div>
            <div class="col-sm-6">
                <input id="data_supp3" type="text" class="form-control @error('data_supp3') is-invalid @enderror"
                    name="data_supp3" value="{{ $creditBaru->data_supp3 }}" readonly />
                @error('data_supp3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label"></label>
            </div>
            <div class="col-sm-6">
                <input id="data_supp4" type="text" class="form-control @error('data_supp4') is-invalid @enderror"
                    name="data_supp4" value="{{ $creditBaru->data_supp4 }}" readonly />
                @error('data_supp4')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label"></label>
            </div>
            <div class="col-sm-6">
                <input id="data_supp5" type="text" class="form-control @error('data_supp5') is-invalid @enderror"
                    name="data_supp5" value="{{ $creditBaru->data_supp5 }}" readonly />
                @error('data_supp5')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Customer Class</label>
            </div>
            <div class="col-sm-6">
                <select class="form-select" aria-label="Default select example" name="customer_class">
                    <option selected>Pilih..</option>
                    <option value="Bronze">Bronze</option>
                    <option value="Silver">Silver</option>
                    <option value="Gold">Gold</option>
                    <option value="Platinum">Platinum</option>
                </select>
                @error('customer_class')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Alasan Perubahan</label>
            </div>
            <div class="col-sm-6">
                <input id="alasan_perubahan" type="text"
                    class="form-control @error('alasan_perubahan') is-invalid @enderror" name="alasan_perubahan"
                    value="{{ $creditBaru->alasan_perubahan }}" readonly />
                @error('alasan_perubahan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-sm-10">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Histori Pembayaran</label>
            </div>
            <div class="col-sm-6">
                <input id="history_pembayaran" type="text"
                    class="form-control @error('history_pembayaran') is-invalid @enderror" name="history_pembayaran"
                    value="{{ $creditBaru->history_pembayaran }}" readonly />
                @error('history_pembayaran')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-sm-8 mt-3">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2">
                <label type="text" name="" id="" class="form-label">Tanggerang</label>
            </div>
            <div class="col-sm-4">
                <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal"
                    value="{{ $creditBaru->tanggal }}" readonly />
                @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>


    {{-- <div class="d-flex justify-content-end mb-5">
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form> --}}


    <script></script>
@endsection
