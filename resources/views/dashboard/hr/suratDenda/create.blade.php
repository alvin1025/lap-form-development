@extends('dashboard.layout.lte')

@section('title', 'Create Surat Denda')

@section('content')

    <form action="{{ route('denda.store') }}" method="post">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="row">
                <h3>Lucky Textile Group</h3>
                <h5>Bintaro-Cibitung</h5>
            </div>

        </div>
        <div class="row">

            <h3 class="text-center" style="font-weight: bold">SURAT PERSETUJUAN DENDA</h3>

            <h5 class="text-center">
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="" style="form-label">NO :</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="no">
                        </div>
                    </div>
                </div>
            </h5>

        </div>
        <hr>

        <div class="d-flex justify-content-start">
            <div class="col-sm-8">
                <div class="row">
                    <label class="col-sm-12 col-form-label my-2">Pimpinan Perusahaan Lucky Textile Group memberikan
                        denda kepada :</label>
                    <div class="col-sm-7 my-2">
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Nama</label>
                    <div class="col-sm-6 my-2">
                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" />
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">NRP</label>
                    <div class="col-sm-6 my-2">
                        <input id="nrp" type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp" />
                        @error('nrp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Jabatan/Level</label>
                    <div class="col-sm-3 my-2">
                        <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror"
                            name="jabatan" />
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3 my-2">
                        <input id="level" type="text" class="form-control @error('level') is-invalid @enderror"
                            name="level" />
                        @error('level')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Bagian/Divisi</label>
                    <div class="col-sm-3 my-2">
                        <input id="bagian" type="text" class="form-control @error('bagian') is-invalid @enderror"
                            name="bagian" />
                        @error('bagian')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3 my-2">
                        <input id="divisi" type="text" class="form-control @error('divisi') is-invalid @enderror"
                            name="divisi" />
                        @error('divisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-8 col-form-label my-2" style="font-weight: bold">Alasan diberi peringatan :</label>
                </div>
                <p>Terbukti merusak/menghilangkan barang-barang milik perusahaan karena kecerobohan atau Mengerjakan
                    pekerjaan yang menyalahi ketentuan perusahaan sehingga menyebabkan kerugian perusahaan sebesar
                </p>
                <div class="row">
                    <label class="col-sm-1 col-form-label">Rp.</label>
                    <div class="col-sm-3">
                        <input id="denda" type="text" class="form-control @error('denda') is-invalid @enderror"
                            name="denda" />
                        @error('denda')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <label class="col-sm-6 col-form-label">Merujuk pada Perjanjian kerja bersama Pasal 41</label>
                </div>
            </div>
        </div>
        <div class="row">
            <label class="col-sm-3 col-form-label">Dengan diberinya denda sebesar Rp. </label>
            <div class="col-sm-2">
                <input id="denda" type="text" class="form-control @error('denda') is-invalid @enderror" name="denda" />
                @error('denda')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <label class="col-sm-6 col-form-label">yang merupakan bagian dari pembinaan </label>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <p>
                    karyawan ini, Perusahaan berharap Saudara segera mengubah perilaku / perbuatan Saudara serta
                    tidak mengulanginya di kemudian
                    hari.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <p>
                    Apabila setelah diberi denda ini saudara masih tetap melakukan pelanggaran – pelanggaran atau hal-hal
                    yang merugikan Perusahaan, maka Perusahaan akan secara tegas melakukan tindakan lanjutan sesuai
                    peraturan yang berlaku.
                </p>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <div class="col-sm-4">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Cikarang,</label>
                    <div class="col-sm-6 my-2">
                        <input id="berlaku" type="date" class="form-control @error('berlaku') is-invalid @enderror"
                            name="berlaku" />
                        @error('berlaku')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>










        <div class="
                            d-flex justify-content-end mb-5">
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>



@endsection
