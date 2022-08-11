@extends('dashboard.layout.lte')

@section('title', 'Credit Limit Dan Credit Term Baru')

@section('content')

    <form action="{{ route('creditBaru.store') }}" method="post">
        @csrf
        <h4 class="text-center">@yield('title')</h4>
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
                    <input class="form-check-input" type="checkbox" value="Customer Baru" id="defaultCheck1"
                        name="jenis_cust">
                    <label class="form-check-label" for="defaultCheck1">
                        Customer Baru
                    </label>
                </div>
                <div class="row">
                    <input class="form-check-input" type="checkbox" value="Customer Baru" id="defaultCheck1"
                        name="jenis_cust">
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
                    <select class="selectpicker" aria-label="Default select example" name="kode_cust"
                        data-live-search="true" id="kode_cust">
                        <option selected>Open this select menu</option>
                        @foreach ($credits as $credit)
                            @if (old('kode_cust') == $credit->kode_cust)
                                <option data-tokens="{{ $credit->kode_cust }}" selected>
                                    {{ $credit->kode_cust }}
                                </option>
                            @else
                                <option data-tokens="{{ $credit->kode_cust }}">
                                    {{ $credit->kode_cust }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                    @error('kode_cust')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-sm-1">
                    <label type="text" name="" id="" class="form-label" style="font-size: 13px">No Cust</label>
                </div>
                <div class="col-sm-2">
                    <input id="no_cust" type="text" class="form-control @error('no_cust') is-invalid @enderror"
                        name="no_cust" />
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
                <div class="col-sm-7">
                    <input id="nama_cust" type="text" class="form-control @error('nama_cust') is-invalid @enderror"
                        name="nama_cust" />
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
                <div class="col-sm-7">
                    <input id="contact_person" type="text"
                        class="form-control @error('contact_person') is-invalid @enderror" name="contact_person" />
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
                <div class="col-sm-7">
                    <textarea id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" cols="30"
                        rows="5"></textarea>
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
                    <label type="text" name="" id="" class="form-label" style="font-size: 13px">Perubahan Alamat</label>
                </div>
                <div class="col-sm-7">
                    <textarea id="perubahan_alamat" type="text" class="form-control @error('perubahan_alamat') is-invalid @enderror"
                        name="perubahan_alamat" cols="30" rows="5"></textarea>
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
                    <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror"
                        name="no_telp" />
                    @error('no_telp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-sm-1">
                    <label type="text" name="" id="" class="form-label">Fax</label>
                </div>
                <div class="col-sm-3">
                    <input id="fax" type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" />
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
                    <input id="jenis_bisnis" type="text" class="form-control @error('jenis_bisnis') is-invalid @enderror"
                        name="jenis_bisnis" />
                    {{-- <select class="form-select" aria-label="Default select example" name="jenis_bisnis">
                        <option selected>Pilih..</option>
                        <option value="Wholesale">Wholesale</option>
                        <option value="Manufacturing">Manufacturing</option>
                        <option value="Retailer">Retailer</option>
                    </select> --}}
                    @error('jenis_bisnis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-sm-1">
                    <label type="text" name="" id="" class="form-label">Bidang</label>
                </div>
                <div class="col-sm-3">
                    <input id="bidang" type="text" class="form-control @error('bidang') is-invalid @enderror"
                        name="bidang" />
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
                <div class="col-sm-7">
                    <input id="orientasi_market" type="text"
                        class="form-control @error('orientasi_market') is-invalid @enderror" name="orientasi_market" />
                    {{-- <select class="form-select" aria-label="Default select example" name="orientasi_market">
                        <option selected>Pilih..</option>
                        <option value="Export">Export</option>
                        <option value="Lokal">Lokal</option>
                    </select> --}}
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
                <div class="col-sm-7">
                    <input id="type_perusahaan" type="text"
                        class="form-control @error('type_perusahaan') is-invalid @enderror" name="type_perusahaan" />
                    {{-- <select class="form-select" aria-label="Default select example" name="type_perusahaan">
                        <option selected>Pilih..</option>
                        <option value="PT">PT</option>
                        <option value="CV">CV</option>
                        <option value="Toko">Toko</option>
                    </select> --}}
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
                <div class="col-sm-7">
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
                        name="lama_bisnis" />
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
                <div class="col-sm-7">
                    <input id="omzet" type="text" class="form-control @error('omzet') is-invalid @enderror"
                        name="omzet" />
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
                    <input id="credit_limit" type="text" class="form-control @error('credit_limit') is-invalid @enderror"
                        name="credit_limit" />
                    {{-- <select class="form-select" aria-label="Default select example" name="credit_limit">
                        <option selected>Pilih..</option>
                        <option value="IDR">IDR</option>
                        <option value="USD">USD</option>
                    </select> --}}
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
                    <select class="selectpicker" aria-label="Default select example" name="credit_limit_berubah"
                        data-live-search="true">
                        <option selected>Open this select menu</option>
                        @foreach ($creditLimits as $credit)
                            @if (old('credit_limit_berubah') == $credit->credit_limit)
                                <option data-tokens="{{ $credit->credit_limit }}" selected>{{ $credit->credit_limit }}
                                </option>
                            @else
                                <option data-tokens="{{ $credit->credit_limit }}">{{ $credit->credit_limit }}</option>
                            @endif
                        @endforeach
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
                    <input id="credit_term" type="text" class="form-control @error('credit_term') is-invalid @enderror"
                        name="credit_term" />
                    {{-- <select class="form-select" aria-label="Default select example" name="credit_term">
                        <option selected>Pilih..</option>
                        <option value="IDR">IDR</option>
                        <option value="USD">USD</option>
                    </select> --}}
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
                    <select class="selectpicker" aria-label="Default select example" name="credit_term_berubah"
                        data-live-search="true">
                        <option selected>Open this select menu</option>
                        @foreach ($pays as $pay)
                            @if (old('credit_term_berubah') == $pay->pay_term)
                                <option data-tokens="{{ $pay->pay_term }}" selected>{{ $pay->pay_term }}
                                </option>
                            @else
                                <option data-tokens="{{ $pay->pay_term }}">{{ $pay->pay_term }}</option>
                            @endif
                        @endforeach
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
                <div class="col-sm-7">
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
                        name="lama_bekerja_dengan_lpa" />
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
                        class="form-control @error('bank_koresponden1') is-invalid @enderror" name="bank_koresponden1" />
                    @error('bank_koresponden1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-sm-3">
                    <input id="bank_koresponden2" type="text"
                        class="form-control @error('bank_koresponden2') is-invalid @enderror" name="bank_koresponden2" />
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
                        name="data_cust1" />
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
                        name="data_cust2" />
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
                        name="data_cust3" />
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
                        name="data_cust4" />
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
                        name="data_cust5" />
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
                        name="data_supp1" />
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
                        name="data_supp2" />
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
                        name="data_supp3" />
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
                        name="data_supp4" />
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
                        name="data_supp5" />
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
                    <input id="customer_class" type="text"
                        class="form-control @error('customer_class') is-invalid @enderror" name="customer_class" />
                    {{-- <select class="form-select" aria-label="Default select example" name="customer_class">
                        <option selected>Pilih..</option>
                        <option value="Bronze">Bronze</option>
                        <option value="Silver">Silver</option>
                        <option value="Gold">Gold</option>
                        <option value="Platinum">Platinum</option>
                    </select> --}}
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
                    <label type="text" name="" id="" class="form-label" style="font-size: 13px">Alasan
                        Perubahan</label>
                </div>
                <div class="col-sm-6">
                    <input id="alasan_perubahan" type="text"
                        class="form-control @error('alasan_perubahan') is-invalid @enderror" name="alasan_perubahan" />
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
                    <label type="text" name="" id="" class="form-label" style="font-size: 13px">Histori
                        Pembayaran</label>
                </div>
                <div class="col-sm-6">
                    <input id="history_pembayaran" type="text"
                        class="form-control @error('history_pembayaran') is-invalid @enderror"
                        name="history_pembayaran" />
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
                    <input id="date_in" type="date" class="form-control @error('tanggal') is-invalid @enderror"
                        name="tanggal" />
                    @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-end mb-5">
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>


    <script>
        $(document).ready(function() {
            /* Algoritma: return realtime duedate
                1. init `DATE` dan `DUE DATE` ke hari ini.
                2. baca `DEV TYPE`, potong string, ubah ke integer.
                    (opsional: gunakan custom option text)
                3. tambah `DATE` dengan integer.
                4. set `DUE DATE` dari hasil penambahan `DATE` dengan integer.
                5. `DATE` onchange: ulangi step 2,3,4
            */
            // 1.
            // now (0,10): "YYYY-MM-DD"
            // now (0,19): "YYYY-MM-DD HH:mm:ss"
            const date = new Date().toISOString().substr(0, 10).replace('T', ' ');
            $('#date_in').val(date);
            console.log('now: ' + $('#date_in').val());
            // 2, 3, 4
            calcDueDate();
            // onchanged elements function call
            $('#dev_model_id').on('change', function(e) {
                calcDueDate();
            });
            $('#date_in').on('change', function(e) {
                calcDueDate();
            });
        })

        function calcDueDate() {
            // 2.
            let days = $('#dev_model_id option:selected').text(); // get text of selected id_dev
            days = parseInt(days.substring(4, 6));
            // adjust due date
            let adjustedDate = new Date($('#date_in').val());
            adjustedDate.setDate(adjustedDate.getDate() + days); // 3. adjust
            adjustedDate = adjustedDate.toISOString().substr(0, 10).replace('T', ' '); // format
            $('#due_date').val(adjustedDate); // 4. set
            console.log('adjustedDate: ' + adjustedDate);
        }

        let sel = document.getElementById('kode_cust');
        sel.addEventListener('click', function(e) {
            let price = e.srcElement.selectedOptions["0"].dataset.price;
            document.getElementById('no_cust').value = price;
        });
    </script>
@endsection
