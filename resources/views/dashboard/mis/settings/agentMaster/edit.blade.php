@extends('dashboard.layout.lte')

@section('title', 'Form Agent')

@section('content')

    <form action="/dashboard/mis/settings/agentmaster/{{ $agent->id }}" method="POST">
        @csrf
        @method('patch')
       
        <div class="row">
            <div class="d-flex justify-content-start">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label">Title</label>
                            </div>
                            <div class="col-sm-8">
                                <select class="selectpicker" aria-label="Default select example" name="title"
                                    data-live-search="true" data-container="body">
                                    <option selected value="{{ $agent->title }}" selected>{{ $agent->title }}</option>
                                    @foreach ($titles as $title)
                                        @if (old('title') == $title->title)
                                            <option value="{{ $title->title }}">
                                                {{ $title->title }}
                                            </option>
                                        @else
                                            <option value="{{ $title->title }}">{{ $title->title }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label">Language</label>
                            </div>
                            <div class="col-sm-7">
                                <select class="selectpicker" aria-label="Default select example" name="language"
                                    data-live-search="true" data-container="body">
                                    <option selected value="{{ $agent->language }}" selected>{{ $agent->language }}
                                    </option>
                                    @foreach ($languages as $language)
                                        @if (old('language') == $language->description)
                                            <option value="{{ $language->description }}">
                                                {{ $language->description }}
                                            </option>
                                        @else
                                            <option value="{{ $language->description }}">{{ $language->description }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('class')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label">Status</label>
                            </div>
                            <div class="col-sm-7">
                                <select class="selectpicker" aria-label="Default select example" name="status"
                                    data-live-search="true">
                                    <option value="1" {{ $agent->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="2" {{ $agent->status == 2 ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label">Nama 1</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="name1" type="text"
                                    class="form-control @error('name1') is-invalid @enderror" name="name1"
                                    value="{{ $agent->name1 }}" />
                                @error('name1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label">Nama 2</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="name2" type="text"
                                    class="form-control @error('name2') is-invalid @enderror" name="name2"
                                    value="{{ $agent->name2 }}" />
                                @error('name2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label">Street</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="street" type="text"
                                    class="form-control @error('street') is-invalid @enderror" name="street"
                                    value="{{ $agent->street }}" />
                                @error('street')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label"
                                    style="font-size: 13px">Additional
                                    Address</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="addit" type="text"
                                    class="form-control @error('addit') is-invalid @enderror" name="addit"
                                    value="{{ $agent->addit }}" />
                                @error('addit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label"
                                    style="font-size: 13px">Kurs</label>
                            </div>

                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="kurs"
                                    data-live-search="true" data-container="body">
                                    <option selected value="{{ $agent->kurs }}" selected>{{ $agent->kurs }}</option>
                                    @foreach ($kurses as $kurs)
                                        @if (old('kurs') == $kurs->kurs)
                                            <option value="{{ $kurs->kurs }}" selected>
                                                {{ $kurs->kurs }}
                                            </option>
                                        @else
                                            <option value="{{ $kurs->kurs }}">{{ $kurs->kurs }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('tax')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="d-flex flex-row">
                            <div class="col-sm-3">

                            </div>
                            <div class="col-sm-8">

                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-5">
                                <label type="text" name="" id=""
                                    class="form-label text-center">Agent</label>
                            </div>
                            <div class="col-sm-6">
                                <label type="text" name="" id="" class="form-label text-center">Short
                                    Name</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-5">
                                <input id="agent" type="text"
                                    class="form-control @error('agent') is-invalid @enderror" name="agent"
                                    value="{{ $agent->agent }}" />
                                @error('agent')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input id="shortname" type="text"
                                    class="form-control @error('shortname') is-invalid @enderror" name="shortname"
                                    value="{{ $agent->shortname }}" />
                                @error('shortname')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-5">
                            <div class="col-sm-3">
                                <label type="text" name="" id=""
                                    class="form-label text-center">Fax</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="fax" type="text"
                                    class="form-control @error('fax') is-invalid @enderror" name="fax"
                                    value="{{ $agent->fax }}" />
                                @error('fax')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label text-center">PO
                                    Box</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="text" type="text"
                                    class="form-control @error('pobox') is-invalid @enderror" name="pobox"
                                    value="{{ $agent->pobox }}" />
                                @error('pobox')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id=""
                                    class="form-label text-center">Email</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ $agent->email }}" />
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id=""
                                    class="form-label text-center">Phone</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="phone" type="number"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ $agent->phone }}" />
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id=""
                                    class="form-label text-center">Mobile</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="mobile" type="number"
                                    class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                    value="{{ $agent->mobile }}" />
                                @error('mobile')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id=""
                                    class="form-label text-center">Home</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="home" type="text"
                                    class="form-control @error('home') is-invalid @enderror" name="home"
                                    value="{{ $agent->home }}" />
                                @error('home')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id=""
                                    class="form-label text-center">Allowance Qty</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="allow" type="number"
                                    class="form-control @error('allow') is-invalid @enderror" name="allow" value="{{ $agent->vs04->allow }}"/>
                                @error('allow')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <a href="{{ route('agentmaster.index') }}" class="btn btn-danger">BACK</a>
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary">UPDATE</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-8">
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-2 mr-3">
                                <label type="text" name="" id="" class="form-label"
                                    style="font-size: 13px">Country
                                    Code</label>
                            </div>
                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="cocd"
                                    data-live-search="true" data-container="body">
                                    <option selected value="{{ $agent->cocd }}" selected>{{ $agent->cocd }}</option>
                                    @foreach ($negaras as $negara)
                                        @if (old('negara') == $negara->nama_negara)
                                            <option value="{{ $negara->nama_negara }}">
                                                {{ $kd03->negara }}
                                            </option>
                                        @else
                                            <option value="{{ $negara->nama_negara }}">
                                                {{ $negara->nama_negara }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('cocd')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-2 mr-3">
                                <label type="text" name="" id="" class="form-label"
                                    style="font-size: 15px">Agent Kind
                            </div>
                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="agent_kind"
                                    data-live-search="true" data-container="body">
                                    <option selected value="{{ $agent->agent_kind }}" selected>
                                        {{ $agent->agent_kind }}</option>
                                    @foreach ($agentKind as $kind)
                                        @if (old('agent_kind') == $kind->description)
                                            <option value="{{ $kind->description }}" selected>
                                                {{ $kind->description }}
                                            </option>
                                        @else
                                            <option value="{{ $kind->description }}">
                                                {{ $kind->description }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('kode_county')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-2 mr-3">
                                <label type="text" name="" id="" class="form-label">Kota</label>
                            </div>
                            <div class="col-sm-6">
                                <input id="cty" type="text"
                                    class="form-control @error('cty') is-invalid @enderror" name="cty"
                                    value="{{ $agent->cty }}" />
                                @error('cty')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </form>



@endsection
